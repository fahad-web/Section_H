<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Log in </title>
  </head>
  <body>

<?php

  $lmailErr = $lpassErr = "";
  $lmail = $lpass ="";

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["lmail"]))
    {
      $lmailErr = "Mail is required";
    }
    else
    {
      $lmail = test_input($_POST["lmail"]);
    }

    if(empty($_POST["lpass"]))
    {
      $lpassErr = "Password is requird";
    }
    else
    {
      $lpass = test_input($_POST["lpass"]);
    }
  }
  else
  {
    echo " ";
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<?php

$message =" ";
$error =" ";
 if(isset($_POST["lsbtn"]))
 {
  $userdata= file_get_contents("userdata.json");
  $data = json_decode($userdata, true);
  foreach($data as $row)
  {
    $row["User Name"];
    $row["Fast Name"];
    $row["Last Name"];
    $row["Email"];
    $row["Password"];

  }
  if($_POST["lmail"]==$row["Email"] && $_POST["lpass"]==$row["Password"])
  {
    $message ="<h1>Log in Success</h1>";
  }
  else
  {
    $error = "<h1>Incorrect Mail and pasword</h1>";
  }

  if(isset($error))
  {
    echo $error;
  }
  if(isset($message))
  {
    echo $message;
  }
 }

?>


    <h2 align="center"> Log in </h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table align="center">
      <tr>
        <td>E-mail </td>
        <td><input type="email" name="lmail">*<?php echo $lmailErr; ?></td>

      </tr>
      <tr>
        <td>Password </td>
        <td><input type="password" name="lpass">*<?php echo $lpassErr ?></td>
      </tr>
      <tr>
          <td>
            <input type="checkbox" name="lcbox">Save password
          </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="lsbtn" value="Log in"></td>
      </tr>
      <tr><td>Don't have an account <a href="Sinup.php"> Sin Up</a></td></tr>
    </table>
  </form>

  </body>
</html>