<?php

if (
    !empty($_REQUEST['name'] && $_REQUEST["mail"] && $_POST["number"] && $_POST["pass"]) &&
    // (isset($_POST["music_1"]) || isset($_POST["racing_1"]) || isset($_POST["cycling_1"])) && 
    (isset($_POST["music_0"]) || isset($_POST["racing_0"]) || isset($_POST["cycling_0"])) &&
    (isset($_POST["gender"])) &&
    (!empty($_POST["hobbies"])) &&
    (!empty($_FILES["file"]["name"]))
) {

    $name = $_REQUEST["name"];
    $mail = $_REQUEST["mail"];
    $number = $_POST["number"];
    $pass = $_POST["pass"];
    $gender = $_POST["gender"];
    // $cycling_0 = $_POST["cycling_0"];
    // $music_0 = $_POST["music_0"];
    // $racing_0 = $_POST["racing_0"];
    // $cycling_1 = $_POST["cycling_1"];
    // $music_1 = $_POST["music_1"];
    // $racing_1 = $_POST["racing_1"];
    // $file = $_POST["file"];

    if (preg_match("/[a-z]+/i", $name,)) {
        echo (" include only alphabets in NAME <br>");
    } else {
        echo ("Name: $name <br>");
    }

    if (!preg_match("/[\w\.]+@([\w]+\.)+[\w]{2,4}/", $mail,)) {
        echo (" enter valid mail <br>");
    } else {
        echo ("Mail: $mail <br>");
    }

    if ((strlen($number) != 10) || (preg_match("/\D+/", $number))) {
        echo ("Enter valid mobile number <br>");
    } else {
        echo ("Mobile Number is: $number <br>");
    }

    if (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8}/", $pass)) {
        echo ("Enter valid password <br>");
    } else {
        echo ("Password: $pass <br>");
    }

    echo ("Selected gender is $gender <br>");

    if (isset($_POST["cycling_0"], $_POST["music_0"]) || isset($_POST["racing_0"], $_POST["music_0"]) || isset($_POST["racing_0"], $_POST["cycling_0"])) {
        echo ("Select only 1 option in Hobbies - Single Selection <br>");
    } else {
        if (isset($_POST["racing_0"]))
            echo ("Single Selected value is " . $_POST["racing_0"] . "<br>");
        else if (isset($_POST["cycling_0"]))
            echo ("Single Selected value is " . $_POST["cycling_0"] . "<br>");
        else
            echo ("Single Selected value is " . $_POST["music_0"] . "<br>");
    }

    $hobbies = $_POST["hobbies"];
    echo ("Multiple selected hobbies are ");
    foreach ($hobbies as $v) {
        echo ($v . " ");
    }
    echo ("<br>");

    if (preg_match("/image/", $_FILES['file']['type'])) {
        $filename = $_FILES['file']['name'];
        echo ("Uploaded image's name is $filename");
    } else {
        echo ("Upload Image only");
    }
} else {

    echo ("Enter all values");
}
