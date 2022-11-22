<?php
    include("../Model/mysql.php");
    $uploadfileErr = $unameErr = $sbErr = $fnameErr = $lnameErr = $mailErr = $numberErr = $passErr = $pass1Err = $genderErr = $cboxErr = $typeErr = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["uname"]))
        {
            $unameErr = "Please Enter valiad username";
        }
        elseif(!preg_match("/^[<a-z0-9>]*$/" ,$_POST["uname"]))
        {
            $unameErr = "Only small letters and number allowed";
        }

        else if(empty($_POST["fname"]))
        {
            $fnameErr ="Enter valid name";
        }
        elseif(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"]))
        {
            $fnameErr ="Name,Only use letter";
        }

        else if(empty($_POST["lname"]))
        {
            $lnameErr ="Enter valid name";
        }
        else if(!preg_match("/^[a-zA-Z-']*$/",$_POST["lname"]))
        {
            $lnameErr="Name,Only use letter";
        }

        else if(empty($_POST["mail"]))
        {
            $mailErr ="Enter valid email";
        }
        elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST["mail"]))
        {
            
            $mailErr = "You Entered An Invalid Email Format"; 
        }


        else if(empty($_POST["number"]))
        {
            $numberErr ="Enter valid phone";
        }

        else if(empty($_POST["pass"]))
        {
            $passErr ="Passwor must be 8 bit";
        }
        elseif(strlen($_POST["pass"]) <= '8')
        {
            $passErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[A-Z]+#", $_POST["pass"])) {
            $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#", $_POST["pass"])) {
            $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        else if(($_POST["pass"])!=($_POST["pass1"]))
        {
            if(!empty($_POST["pass1"]))
            $pass1Err ="Password must be use same";
        }

        else if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } 
        else
        {
            $username = $_POST["uname"];
            $fastname = $_POST["fname"];
            $lastname = $_POST["lname"];
            $email = $_POST["mail"];
            $phone = $_POST["number"];
            $password = md5($_POST["pass"]);
            $gender = $_POST["gender"];

            if(isset($_POST["sbtn"]))
            {
                if(!empty($_POST["type"]))
                {
                    $tablename = $_POST["type"];
                }
                else
                {
                    $userErr = "Select one ";
                }
            }
            
            

            if(isset($_POST["sbtn"]))
            {
                $mydb = new db();
                $conobj=$mydb->Opencon();

                $result = $mydb->insertUser($conobj,$tablename,$username,$fastname,$lastname,$email,$phone,$password,$gender);
                
            }
        }
    }           
?>