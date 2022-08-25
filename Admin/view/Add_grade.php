<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add grade report</title>
</head>
<body>
    <div>
        <a class="btn btn-secondary" href="home_mod2.php">Dashboard</a>
      <a class="btn btn-danger" href="logout_mod2.php">Logout</a>
    </div>
    <br>
    <br>
    <center>    
    	<form method="POST" action="../controller/Add_grade_check.php">
    		<table width="40%">
    			<table>
            <tr>
                <td> Grade Id</td>
                <td>
                    <input type="text" name="gid">
                </td>
            </tr>
            <tr>
                <td>Mid Grade</td>
                <td>
                    <input type="text" name="mgd">
                </td>
            </tr>
            <tr>
                <td> Final Grade </td>
                <td>
                   <input type="text" name="fgd">
                </td>
            </tr>
            <tr>

                <tr>
                <td> All grade </td>
                <td>
                    <input type="text" name="allgd">
                </td>
            </tr>
            <tr>


                <td>Course Id</td>
                <td>
                   <input type="text" name="cid">
                </td>
            </tr>
            
                <td>
                    <input type="submit" name="submit" value="Add Grade">
                </td>
                
            </tr>
        </table>
    		
    	</form>
    </center>
    

</body>
</html>
