<?php
require("config.php");
if ($conn) {
    $display_query = "SELECT * FROM `User_info`;";
    $display_query = mysqli_query($conn, $display_query);

    if (mysqli_num_rows($display_query) > 0) {
        echo ("
            <table id=\"display-table\">
            <tr>
            <td>User ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Password</td>
            <td>Address</td>
            <td>Qualification</td>
            <td>Gender</td>
            <td>Hobbies</td>
            <td>Date of Birth</td>
            <td>image</td>
        </tr>
        ");
        //INSERT INTO `user_info` (`ID`, `user_ID`, `Name`, `email`, `phone`, `password`, `address`, `qualification`, `gender`, `hobbies`, `dob`, `image`) 
        while ($row = mysqli_fetch_array($display_query)) {
            $row_userID = $row['user_ID'];
            $row_Name = $row['Name'];
            $row_email = $row['email'];
            $row_phone = $row['phone'];
            $row_password = $row['password'];
            $row_address = $row['address'];
            $row_qualification = $row['qualification'];
            $row_gender = $row['gender'];
            $row_hobbies = $row['hobbies'];
            $row_dob = $row['dob'];
            $image = $row['image'];
            $image = explode(',', $image);

            echo (" 
                     <tr>
                            <td>$row_userID</td>
                            <td>$row_Name</td>
                            <td>$row_email</td>
                            <td>$row_phone</td>
                            <td>$row_password</td>
                            <td>$row_address</td>
                            <td>$row_qualification</td>
                            <td>$row_gender</td>  
                            <td>$row_hobbies</td>
                            <td>$row_dob</td>     <td>              
            ");
            for ($i = 0; $i < count($image); $i++) {
                $image_path = "img/" . $image[$i];
                // echo($image_path);
                echo ("                
                <img src=\"$image_path\" >;                
                ");
            }
            echo ("</td></tr>");
        }
        echo ("</table>");
        // print_r($row);
        //     echo ("<br>");
        //     echo ("<br>");
        //     echo ("<br>");
    } else {
        echo ("No record in Database");
    }
} else {
    echo ("Connection not established");
}