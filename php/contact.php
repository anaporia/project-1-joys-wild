<?php

    $array = [
        "firstname" => "",
        "name" => "",
        "email" => "",
        "phone" => "",
        "subject" => "",
        "message" => "",
        "firstnameError" => "",
        "nameError" => "",
        "emailError" => "",
        "phoneError" => "",
        "subjectError" => "",
        "messageError" => "",
        "isSuccess" => false
    ];

    $emailTo = "projetwild@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["subject"] = test_input($_POST["subject"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["firstname"]) ||!isName($array["firstname"])) {
            $array["firstnameError"] = "Hep hep hep !";
            $array["isSuccess"] = false; 
        } else {
            $emailText .= "Firstname: " . $array['firstname'] . "\n";
        }

        if (empty($array["name"]) || !isName($array["name"])) {
            $array["nameError"] = "Sorry, you have to enter a lastname !";
            $array["isSuccess"] = false; 
        } else {
            $emailText .= "Name: " . $array['name'] . "\n";
        }

        if(empty($array["email"]) || !isEmail($array["email"])) {
            $array["emailError"] = "Just a little more effort";
            $array["isSuccess"] = false; 
        } else {
            $emailText .= "Email: " . $array['email'] . "\n";
        }

        if (empty($array["phone"]) || !isPhone($array["phone"])) {
            $array["phoneError"] = "I like data";
            $array["isSuccess"] = false; 
        } else {
            $emailText .= "Phone: " . $array['phone'] . "\n";
        }

        if (empty($_POST["subject"])) {
            $array["subjectError"] = "You're almost there...";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "Subject: " . $array["subject"] . "\n";
        }

        if (empty($array["message"])) {
            $array["messageError"] = "Are you talking to me ?!";
            $array["isSuccess"] = false; 
        } else {
            $emailText .= "Message: " . $array['message'] . "\n";
        }
        
        if($array["isSuccess"]) {
            $headers = "From: " . $array["firstname"] . $array["name"] . $array["email"] . "\n" . "Reply-To: " . $array["email"];
            mail($emailTo, "Un message de votre site", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail(string $email) : string {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone(string $phone) : string {
        return preg_match("#^\+?[0-9\./, -]{6,20}$#", $phone);
    }
    function isName(string $name) : string {
        return preg_match("/^[a-zA-Z -]*$/", $name);
    }

    function test_input(string $data) : string {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


 
