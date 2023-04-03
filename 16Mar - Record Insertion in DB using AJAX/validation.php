<?php
// print_r($_FILES["file"]);
// die();
if (
    !empty($_REQUEST['name'] && $_REQUEST["mail"] && $_POST["number"] && $_POST["pass"] && $_POST["user_id"] && $_POST["address"] && $_POST["qual"] && $_POST["dob"])
    && (isset($_POST["gender"]))
    && (!empty($_POST["hobbies"]))
    && (!empty($_FILES["file"]["name"]))
) {
    $user_id = $_REQUEST["user_id"];
    $name = $_REQUEST["name"];
    $mail = $_REQUEST["mail"];
    $number = $_POST["number"];
    $pass = $_POST["pass"];
    $gender = $_POST["gender"];
    $address = $_REQUEST["address"];
    $qual = $_REQUEST["qual"];
    $dob = $_REQUEST["dob"];

    $hobbies = $_POST["hobbies"];
    $hobbies = implode(", ", $hobbies);

    $mail = "\"" . $mail . "\"";

    require 'config.php';
    if ($conn) {
        $insert_query = "INSERT INTO `user_info` ( `user_ID`, `Name`, `email`, `phone`, `password`, `address`, `qualification`, `gender`, `hobbies`, `dob`) VALUES ( $user_id, '$name', $mail, $number, '$pass', '$address', '$qual', '$gender', '$hobbies', '$dob');";
        if (mysqli_query($conn, $insert_query)) {
            echo ("Record inserted in DB");
        } else {
            echo ("Data not inserted  " . mysqli_error($conn));
        }

        // $show = "SELECT * FROM `USER_INFO` ;";
        // $row = mysqli_fetch_array(mysqli_query($conn, $show)) or die("No Data fetched");
        // echo ($row['phone']);
    } else {
        echo ("connection not established");
    }
} else {

    echo ("Enter all values");
}
