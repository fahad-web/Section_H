<?php
session_start();
include("../Model/mysql.php");

if(!empty($_SESSION["username"]))
{
  header("location:Profile.php");
}
    $message =" ";
    $error =" ";

    if(isset($_POST["lsbtn"]))
    {
      $email = $_POST["lmail"];
      $password = $_POST["lpass"];
    }
    

    if(isset($_POST["lsbtn"]))
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
    if(isset($_POST["lsbtn"]))
    {
      $lgdb= new db();
      $fahad = $lgdb->Opencon();

      $result = $lgdb->CheckUser($fahad,$tablename,$email,$password);

      

      if($result > 0)
      {
        $_SESSION["username"]=$email;
        header("location:Profile.php");
      }
      else
      {
        $error = "<h5 align='center'class='text-denger'>Incorrect password and mail</h5>";
      }
          
    }

?>