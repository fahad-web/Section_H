<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >


    <link rel="stylesheet" href="../Css/login_page.css">


    <title>Log in </title>
  </head>
  <body>

  <?php include("../Controller/LoginV.php"); ?>


    <div class="loginpage">
      <div class="container">
        <div class="row">
          <?php
            if(isset($_GET["created"]))
            {
              echo "<h2 class='rr' align='center'>User Created succesfully</h2>";
            }
          ?>
          <?php
          if(isset($error))
          {
            echo "<h4 class='rr'>".$error."</h4>";
          }
          ?>
          <div class="col-lg-12">
            <div class="fpage">
              
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table align="center">
                  <h4 align='center' class="mb-4">Login</h4>
                  
                  <tr>
                    <td>E-mail </td>
                    <td class="jj"><input type="email" class="form-control" name="lmail" require></td>
                  </tr>
                  <tr>
                    <td>Password </td>
                    <td class="jj"><input type="password" class="form-control" name="lpass" require></td>
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
                      </td>
                  <tr>
                      <td>
                        <input type="checkbox" name="lcbox"> Save password
                      </td>
                  </tr>
                </table>
                <span class="logbtn"><input type="submit" class="btn-primary" name="lsbtn" value="Log in"></span>


                <h5 class="ss">Don't have an account <a href="Sinup.php"> Sin Up</a></h5>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  

  </body>
</html>