<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
  <form id="myForm" name="myForm" method="post"  action="../controller/Login_Check_mod2.php" >
    <br><div align="center">
      <center>
    <fieldset style=" width: 300px " align ="center" >
        
     <h1 align="center">Get Started</h1>
      <table align ="center">
        
        <tr>
          <td style="color:white;">Username</td>
          <td><input type="text" name="UNAME" value=""></td>
        </tr>
        
        <tr>
          <td style="color:white;">Password</td>
          <td><input type="password" name="Pass" value=""></td>
        </tr>
        
        <tr>
          <td></td>
          <td>
            <input type="submit" name="submit" value="Submit" > 
          </td>
        </tr>
        <tr>
            <td>
              <a href="Registration_mod2.php">Not registered yet?</a>
            </td>
          </tr>
        </div><br>
        
      </table>
    </fieldset>
    </center>
  </form>
</body>
</html>