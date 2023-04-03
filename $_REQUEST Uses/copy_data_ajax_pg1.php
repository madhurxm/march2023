<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <style>
        form {
            margin: 100px 450px;
        }
    </style>
    <!-- <script>
        $(document).ready(function() {
            $("button").click(function() {
                $.ajax({
                    url: "copy_data_ajax_pg2.php",
                    type: "post",
                    data: $("form").serialize(),
                });
            });
        });
    </script> -->

</head>

<body>
    <form method="POST" action="copy_data_ajax_pg2.php">
        <h1>Page 1</h1>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" class="form-control" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="mail" class="form-label">E-Mail:</label>
            <input type="email" id="mail" class="form-control" name="mail" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" id="phone" class="form-control" pattern="[0-9]{10}" name="phone" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="pass" class="form-label">Password:</label>
            <input type="password" id="pass" class="form-control" name="pass" required>
        </div>
        <div class="mb-3 mt-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</body>

</html>