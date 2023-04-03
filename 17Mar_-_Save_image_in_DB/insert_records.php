<?php
if (
    !empty($_REQUEST['name'] && $_REQUEST["mail"] && $_REQUEST["number"] && $_REQUEST["pass"] && $_REQUEST["user_id"] && $_REQUEST["address"] && $_REQUEST["qual"] && $_REQUEST["dob"])
    && (isset($_REQUEST["gender"]))
    && (!empty($_REQUEST["hobbies"]))
    && (!empty($_FILES["file"]["name"]))
) {
    $user_id = $_REQUEST["user_id"];
    $name = $_REQUEST["name"];
    $mail = $_REQUEST["mail"];
    $number = $_REQUEST["number"];
    $pass = $_REQUEST["pass"];
    $gender = $_REQUEST["gender"];
    $address = $_REQUEST["address"];
    $qual = $_REQUEST["qual"];
    $dob = $_REQUEST["dob"];

    $hobbies = $_REQUEST["hobbies"];
    $hobbies = implode(", ", $hobbies);

    $mail = "\"" . $mail . "\"";

    require 'config.php';
    if ($conn) {

        $check_user_id = "SELECT * FROM `user_info` where `user_ID` ='$user_id';";
        $check_user_id = mysqli_query($conn, $check_user_id);
        if (mysqli_num_rows($check_user_id) == 0) {

            $num_of_files = count($_FILES["file"]["name"]);
            for ($i = 0; $i < $num_of_files; $i++) {
                $file_first_name = basename($_FILES["file"]["name"][$i]);
                if (preg_match("/,/", $file_first_name)) {
                    die("Don't include comma in file name");
                }

                $fileType = pathinfo($file_first_name, PATHINFO_EXTENSION);
                $_FILES["file"]["name"][$i] = $user_id . "_$i." . $fileType;
                $file_name = $_FILES["file"]["name"][$i];
                move_uploaded_file($_FILES["file"]["tmp_name"][$i], 'img/' . $file_name);
                $all_files_name[] = $file_name;
            }
            $file_name = implode(",", $all_files_name);

            $insert_query = "INSERT INTO `user_info` ( `user_ID`, `Name`, `email`, `phone`, `password`, `address`, `qualification`, `gender`, `hobbies`, `dob`, `image`) VALUES ( $user_id, '$name', $mail, $number, '$pass', '$address', '$qual', '$gender', '$hobbies', '$dob','$file_name');";

            if (mysqli_query($conn, $insert_query)) {
                echo ("Record Inserted in DB ");
            } else {
                echo ("Record not inserted " . mysqli_error($conn));
            }
        } else {
            echo ("User ID exists");
        }
        mysqli_close($conn);
    } else {
        echo ("Connection not established");
    }
} else {
    echo ("Enter all values");
}
