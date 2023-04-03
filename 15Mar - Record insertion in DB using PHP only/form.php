<html>

<head>
    <title>FORM</title>
</head>

<body>

    <form method="POST" action="validation.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="user_id">User ID</label></td>
                <td><input type="text" id="user_id" name="user_id" minlength="2" maxlength="2" pattern="[0-9]{2}" required title="Numbers only"></td>
            </tr>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" pattern="[a-zA-Z]{1,30}" title="Alphabets only" required></td>
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
                        <option value="Graduate">Graduate</option>
                        <option value="Under-Graduate">Under-Graduate</option>
                        <option value="Post Graduate">Post Graduate</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="male">Gender</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Male">
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
                <td><input type="file" id="file" name="file" required accept="image/png, image/gif, image/jpeg"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>