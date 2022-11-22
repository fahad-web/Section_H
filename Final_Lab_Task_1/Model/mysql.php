<?php
class db
{
    function Opencon()
    {
        $conn = new mysqli("localhost","root","","sec_h");
        return $conn;
    }

    function CheckUser($conn,$tablename,$email,$password)
    {
        $result = $conn->query("SELECT * FROM ". $tablename." WHERE username='". $email."' AND password='". $password."'");
        return $result;
    }

    function ShowAll($conn,$tablename)
    {
        $result = $conn->query("SELECT * FROM  $tablename");
        return $result;
    }


    function insertUser($conn,$tablename,$username,$fastname,$lastname,$email,$phone,$password,$gender)
    {
        $sql= "INSERT INTO $tablename (username,fastname,lastname,mail,phone,password,gender) VALUES ('$username','$fastname','$lastname','$email','$phone','$password','$gender')";
        if($conn -> query($sql) === TRUE)
        {
            header("location:Login.php? created");
        }
        
    }
    function Closecon()
    {
        $conn->close();
    }
}

?>