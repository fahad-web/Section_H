<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >


    <link rel="stylesheet" href="../Css/style.css">


    <title>Sin Up</title>
  </head>
  <body>
  <?php
    include("../Controller/Validation.php");
  ?>




  <div class="silder">
  <div class="container-fluid">
    <div class="row">
        <!-- <div class="col-lg-3"></div> -->
        <div class="col-lg-12">
        <h2 align="center">Registretion</h2>
            <div class="regForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>User Name </td>
                            <td class="jj"><input type="text" class="form-control" name="uname" ><span> <?php echo "<span class='text-denger'>".$unameErr."</span>";?></span></td>
                        </tr>

                        <tr>

                        <td>Fast Name </td>
                        <td class="jj"><input type="text" class="form-control" name="fname" ><span><?php echo "<span class='text-denger'>".$fnameErr."</span>";?></span></td>
                        </tr>

                        <tr>

                        <td>Last Name</td>
                        <td class="jj"><input type="text" class="form-control" name="lname"><span><?php echo "<span class='text-denger'>".$lnameErr."</span>";?></span></td>

                        </tr>
                        <tr>

                            <td>E-mail </td>
                            <td class="jj"><input type="email" class="form-control" name="mail"><span><?php echo "<span class='text-denger'>".$mailErr."</span>";?></span></td>

                        </tr>
                        <tr>
                            <td>Phone </td>
                            <td class="jj"><input type="number" class="form-control" name="number" require><td>
                        </tr>
                        <tr>
                            <td>Password </td>
                            <td class="jj"><input type="password" class="form-control" name="pass"><span><?php echo "<span class='text-denger'>".$passErr."</span>";?></span></td>
                        </tr>
                        <tr>
                            <td>Re-Password </td>
                            <td class="jj"><input type="password" class="form-control" name="pass1"><span><?php echo "<span class='text-denger'>".$pass1Err."</span>";?></span></td>
                        </tr>
                        <tr>
                            <td>Select Type</td>
                            <td class="jj">
                              <select class="form-select" name="type" aria-label="Default select example">
                              <option selected>Select your type</option>
                              <option  value="admin">Admin</option>
                              <option  value="manager">Manager</option>
                              <option  value="seller">Seller</option>
                              <option  value="customer">Customer</option>
                              <!-- <span><?php echo "<span class='text-denger'>".$userErr."</span>";?></span> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td class="jj"><input type="radio" class="custom-control-input" name="gender" value="Male">Male
                            <input type="radio" class="custom-control-input" name="gender" value="Female">Female 
                            <input type="radio" class="custom-control-input" name="gender" value="Other">Other  <span><?php echo "<span class='text-denger'>".$genderErr."</span>";?></span></td>
                        </tr>
                    </table>
                    <span class="subbtn"><input type="submit" class="btn-primary" name="sbtn" value="Sin Up"></span>

                    <h5 class="kk">You have a account <a href="Login.php">Login</a></h5>

                </form>
            </div>
        </div>
        <!-- <div class="col-lg-3"></div> -->
    </div>
  </div>
  </div>
  


  

  </body>
</html>


