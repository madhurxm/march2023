<html>

<head>
    <title>FORM</title>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                jQuery.ajax({
                    url: "insert_records.php",
                    type: "post",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                    }
                });
            });
            jQuery("#user_id").focusout(function() {
                if (!(/[0-9]{2}/.test(jQuery(this).val())) ^ (jQuery(this).val() == "")) {
                    alert("Enter 2 numbers only");
                    jQuery(this).val("");
                    jQuery(this).focus();
                    return false;
                }
            });
            jQuery("#name").focusout(function() {
                if (!(/^[A-Za-z]{1,30}$/.test(jQuery(this).val())) ^ (jQuery(this).val() == "")) {
                    alert("Enter only Alphabets");
                    jQuery(this).val("");
                    jQuery(this).focus();
                    return false;
                }
            });
            jQuery("#number").focusout(function() {
                if (!(/[0-9]{10}/.test(jQuery(this).val())) ^ (jQuery(this).val() == "")) {
                    alert("10 Numbers only");
                    jQuery(this).val("");
                    jQuery(this).focus();
                    return false;
                }
            });
            jQuery("#pass").focusout(function() {
                if (!(/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8}/.test(jQuery(this).val())) ^ (jQuery(this).val() == "")) {
                    alert("Include at least one lower-case alphabet, one upper-case alphabet and a number");
                    jQuery(this).val("");
                    jQuery(this).focus();
                    return false;
                }
            });
        });
    </script>
<style>
    #display-table, #display-table td{
        border: 1px solid black;
        border-collapse: collapse;
        border-color: #96D4D4;
    }
</style>
</head>

<body>

    <form id="form" enctype="multipart/form-data">

        <table>
             <tr>
                <td><label for="user_id">User ID</label></td>
                <td><input type=" text" id="user_id" name="user_id" minlength="2" maxlength="2" pattern="[0-9]{2}" required title="Numbers only"></td>
            </tr>
           <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" pattern="[a-zA-Z]{1,30}" title="Alphabets only" required>
                </td>
            <tr>
            <tr>
                <td><label for="mail">E-mail</label></td>
                <td><input type="email" id="mail" name="mail" required></td>
            </tr>
            <tr>
                <td><label for="number">Phone</label></td>
                <td><input type="tel" id="number" name="number" minlength="10" maxlength="10" required pattern="[0-9]{10}" required title="10 Numbers only"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" id="pass" name="pass" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8}" required title="Include at least one lower-case alphabet, one upper-case alphabet and a number"></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><textarea id="address" name="address" cols="21" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td><label for="qual">Qualification</label></td>
                <td>
                    <select id="qual" name="qual" required>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="BTech">BTech</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="male">Gender</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="FeMale">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="other" value="other">
                    <label for="other">Other</label>
                </td>
            </tr>
            <tr>
                <td><label for="cycling">Hobbies</label></td>
                <td>
                    <input type="checkbox" id="cycling" name="hobbies[]" value="cycling">
                    <label for="cycling">Cycling</label>
                    <input type="checkbox" id="music" name="hobbies[]" value="music">
                    <label for="music">Music</label>
                    <input type="checkbox" id="racing" name="hobbies[]" value="racing">
                    <label for="racing">Racing</label>
                </td>
            </tr>
            <tr>
                <td><label for="date">DOB</label></td>
                <td><input type="date" name="dob" id="dob" required></td>
            </tr>
            <tr>
                <td><label for="file">Upload Image</label></td>
                <td><input type="file" id="file" name="file[]" required accept="image/png, image/gif, image/jpeg" multiple="multiple"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" id="submit"></td>
            </tr>
            <tr>
                <td>
                    <a href="display_records.php">SHOW ALL DATA</a>
                </td>
            </tr>
        </table>
    </form>
<?php
// echo("<pre>");
// require('display_records.php');
// echo("</pre>");
 ?>
</body>

</html>