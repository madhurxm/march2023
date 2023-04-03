<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>
    </script>

</head>

<body>
    <form method="post" action="$_request.php">
        <input type="text" name="fna" id="fid">
        <input type="submit" id="sid">
        <table>
            <tr>
                <td>
                    <?php
                    session_start();
                    if (isset($_SESSION["username"])) {
                        echo ($_SESSION["username"] . " is logged in.");
                    }
                    ?>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>