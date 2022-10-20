<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Sin Up</title>
  </head>
  <body>
  <?php
    $unameErr = $sbErr = $fnameErr = $lnameErr = $mailErr = $numberErr = $passErr = $pass1Err = $genderErr = $cboxErr = "";

    $uname = $fname = $lname = $mail = $number = $pass = $pass1 = $gender = $cbox = $sb = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        if(empty($_POST["uname"]))
        {
            $unameErr = "Please Enter valiad username";
        }
        else
        {
            $uname = test_input($_POST["uname"]);
            if (!preg_match("/^[<a-z0-9>]*$/",$uname)) 
            {
                $unameErr = "Only small letters and number allowed";
            }
        }


        if(empty($_POST["fname"]))
        {
            $fnameErr ="Enter valid name";
        }
        else
        {
            $fname = test_input($_POST["fname"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$fname))
            {
                $fnameErr ="Name,Only use letter";
            }
        }


        if(empty($_POST["lname"]))
        {
            $lnameErr ="Enter valid name";
        }
        else
        {
            $lname = test_input($_POST["lname"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$fname))
            {
                $fnameErr ="Name,Only use letter";
            }
        }



        if(empty($_POST["mail"]))
        {
            $mailErr ="Enter valid email";
        }
        else
        {
            $mail = test_input($_POST["mail"]);
        }


        if(empty($_POST["number"]))
        {
            $numberErr ="Enter valid phone";
        }
        else
        {
            $number = test_input($_POST["number"]);
        }

        if(empty($_POST["pass"]) || (strlen($_POST["pass"]))<8)
        {
            $passErr ="Passwor must be 8 bit";
        }
        else
        {
            $pass = test_input($_POST["pass"]);
        }
        if(($_POST["pass"])!=($_POST["pass1"]))
        {
            $pass1Err ="Password must be use same";
        }
        else
        {
            $pass1 = test_input($_POST["pass1"]);
        }


        if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } else {

            $gender = test_input($_POST["gender"]);

        }

        if(empty($_POST["cbox"]))
        {
            $cboxErr ="Must accept term and condition";

        }
        else
        {
            $cbox = test_input($_POST["cbox"]);
        }

        if($_POST["uname"]!='' && $_POST["fname"]!='' && $_POST["lname"]!='' && $_POST["pass"]!='' && $_POST["pass1"]!='' && $_POST["number"]!='' && $_POST["gender"]!='' && $_POST["mail"]!='' && $_POST["cbox"]!='')
        {
            if(file_exists('userdata.json')){
            $current_data = file_get_contents('userdata.json');
            $array_data = json_decode($current_data, true);
            $new_data = array(
                'User Name' => $_POST["uname"],
                'Fast Name' => $_POST["fname"],
                'Last Name' => $_POST["lname"],
                'Email' => $_POST["mail"],
                'Number' => $_POST["number"],
                'Password' => $_POST["pass"],
                'Re-Password' => $_POST["pass1"],
                'Gender' => $_POST["gender"]
            );
            $array_data[] = $new_data;
            $json_data = json_encode($array_data,JSON_PRETTY_PRINT);
            if(file_put_contents('userdata.json', $json_data))
            {
                echo "<h2>Your Registretion is succesfully</h2>";
            }
            else{
                echo "Your Registretion is unsuccesfully";
            }
        }
            else
            {
                echo "Json file not Exist";
            }
            
        }
        else
        {
            echo "Please Fill up all field";
        }

    }
    function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    
?>


  <h2 align="center">Registretion</h2>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center">
        <tr>
            <td>User Name *</td>
            <td><input type="text" name="uname" require><span> <?php echo $unameErr;?></span></td>
        </tr>

        <tr>

        <td>Fast Name *</td>
        <td><input type="text" name="fname" value="<?php echo $fname; ?>"><span><?php echo $fnameErr;?></span></td>
        </tr>

        <tr>

        <td>Last Name</td>
        <td><input type="text" name="lname"><span></td>

        </tr>
        <tr>

            <td>E-mail *</td>
            <td><input type="email" name="mail"><span><?php echo $mailErr;?></span></td>

        </tr>
        <tr>
            <td>Phone </td>
            <td><input type="number" name="number"><td>
        </tr>
        <tr>
            <td>Password *</td>
            <td><input type="password" name="pass"><span><?php echo $passErr;?></span></td>
        </tr>
        <tr>
            <td>Re-Password *</td>
            <td><input type="password" name="pass1"><span><?php echo $pass1Err;?></span></td>
        </tr>
        <tr>
            <td>Gender *</td>
            <td><input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female 
            <input type="radio" name="gender" value="Other">Other  <span><?php echo $genderErr;?></span></td>
        </tr>
        <tr>
            <td>*<input type="checkbox" name="cbox" >I accept all term and condition<span><br><?php echo $cboxErr;?></span></td>
            
        </tr>
        <tr>
            <td></td>
        <td><input type="submit" name="sbtn" value="Sin Up"></td>
        </tr>

        <tr>
            <td>You have a account <a href="Login.php">Login</a></td>
        </tr>

    </table>

  </form>

  </body>
</html>