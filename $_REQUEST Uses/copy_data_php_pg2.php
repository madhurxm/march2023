<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <style>
        form {
            margin: 70px 450px;
        }
    </style>
</head>

<body class="mb-3 pb-5">


    <form method="post">
        <h1>PAGE 2</h1>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="<?php
                                        $name = $_POST["name"];
                                        echo ($name);
                                        ?>" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <label for="mail" class="form-label">E-Mail:</label>
            <input type="email" value="<?php
                                        $mail = $_POST["mail"];
                                        echo ($mail);
                                        ?>" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" value="<?php
                                        $phone = $_POST["phone"];
                                        echo ($phone);
                                        ?>" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <label for="pass" class="form-label">Password:</label>
            <input type="text" value="<?php
                                        $pass = $_POST["pass"];
                                        echo ($pass);
                                        ?>" id="pass" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-primary" name="submit" disabled>Submit</button>
        </div>
    </form>
</body>

</html>