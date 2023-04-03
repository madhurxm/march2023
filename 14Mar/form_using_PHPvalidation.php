<html>

<head>
    <title>PHP validated form</title>
</head>

<body>
    <form method="POST" action="output.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name"></td>
            <tr>
            <tr>
                <td><label for="mail">Mail</label></td>
                <td><input type="email" id="mail" name="mail"></td>
            </tr>
            <tr>
                <td><label for="number">Phone</label></td>
                <td><input type="tel" id="number" name="number"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" id="pass" name="pass"></td>
            </tr>
            <tr>
                <td><label for="male">Gender</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Male">
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="cycling_0">Hobbies - Single Selection</label></td>
                <td>
                    <input type="checkbox" id="cycling_0" name="cycling_0" value="cycling">
                    <label for="cycling">Cycling</label>
                    <input type="checkbox" id="music_0" name="music_0" value="music">
                    <label for="music">Music</label>
                    <input type="checkbox" id="racing_0" name="racing_0" value="racing">
                    <label for="racing">Racing</label>
                </td>
            </tr>
            <tr>
                <td><label for="cycling_1">Hobbies - Multiple Selection</label></td>
                <td>
                    <input type="checkbox" id="cycling_1" name="hobbies[]" value="cycling">
                    <label for="cycling">Cycling</label>
                    <input type="checkbox" id="music_1" name="hobbies[]" value="music">
                    <label for="music">Music</label>
                    <input type="checkbox" id="racing_1" name="hobbies[]" value="racing">
                    <label for="racing">Racing</label>
                </td>
            </tr>
            <tr>
                <td><label for="file">Upload File</label></td>
                <td><input type="file" id="file" name="file"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>