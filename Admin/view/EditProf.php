<!-- <?php
    
    //include('adminheader.php');
?> -->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Teacher Information</title>
</head>
<body>
    <div>
        <a class="btn btn-secondary" href="adminDashboard.php">Dashboard</a>
        <a class="btn btn-secondary" href="manager.php">Manager</a>
        <a class="btn btn-secondary" href="customer.php">Customer</a>
        <a class="btn btn-secondary" href="adminMenu.php">Menu</a>
        <a class="btn btn-secondary" href="adminOrder.php">Order</a>
        <a class="btn btn-danger" href="../controller/logout.php">Logout</a>
    </div>
    <br>
    <br>
    <center>    
      <form method="POST" action="../controller/EditProf_Check.php?id=<?php echo $_GET['id']; ?>&uname=<?php echo $_GET['uname']; ?>">
        <table width="40%">
          <tr>
            <th>ID:</th>
            <td><?php echo $_GET['id']; ?></td>
          </tr>
          <tr>
            <th>Name:</th>
            <td><input type="text" name="name" value="<?php echo $_GET['name']; ?>"></td>
          </tr>
          <tr>
            <th>Email:</th>
            <td><input type="email" name="email" value="<?php echo $_GET['email']; ?>"></td>
          </tr>
            <th>User Name:</th>
            <td><?php echo $_GET['uname']; ?></td>
          </tr>

          <tr>
            <th>Gender:</th>
            <td><input type="gender" name="gender" value="<?php echo $_GET['gender']; ?>"></td>
          </tr>
          <tr>
          <tr>
            <th>Password:</th>
            <td><input type="password" name="password" value="<?php echo $_GET['password']; ?>"></td>
          </tr>
          <tr>
            <td><br><hr>
              <input  type="submit" name="submit" value="Update">
            </td>
          </tr> 
        </table>
        
      </form>
    </center>
    

</body>
</html>
