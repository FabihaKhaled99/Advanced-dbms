<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
</head>
<body>
    <div>
      <a class="btn btn-secondary" href="home_mod2.php">Dashboard</a>
      <a class="btn btn-danger" href="logout_mod2.php">Logout</a>
    </div>
    <br>
    <br>
    <center>    
    	<form method="POST" action="../controller/AddStudent_Check.php">
    		<table width="40%">
    			<table>
            <tr>
                <td> Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td> Username </td>
                <td>
                    <input type="text" name="uname">
                </td>
            </tr>
            <tr>

                <tr>
                <td> Gender </td>
                <td>
                    <input type="text" name="gender">
                </td>
            </tr>
            <tr>


                <td>Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="password" name="cpassword">
                </td>
          </tr>
            
                <td>
                    <input type="submit" name="submit" value="Add Student">
                </td>
                
            </tr>
        </table>
    		
    	</form>
    </center>
    

</body>
</html>
