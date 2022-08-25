<!-- <?php
    
    //include('adminheader.php');
?> -->
<?php include 'account.php' ;?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher</title>
</head>
<body>
    <link rel="stylesheet" href="CSS/ShowAllTeachers.css">
    <div>
    </div>
    <br>
    <br>
    <center>
    <form method="POST" action="">
        <div align="Right">
            <input type="text" name="search">
            <input class="btn btn-primary" type="submit" name="submit" value="Search">
        </div>
        <a class="btn btn-primary" href="addTeacher.php"> <h3>Add Teacher</h3> </a>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Gender</th>
                <th>Password</th>
                
    <?php
        if (isset($_POST['submit'])) {



            $uname = $_POST['search'];



            $link = oci_connect("system", "12345", "127.0.0.1/XE");



            $result = oci_parse($link, "SELECT * FROM t_register WHERE t_uname LIKE '$uname%'");
            oci_execute($result);

            $i=0;
            while($row=oci_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["T_ID"]; ?></td>
                <td><?php echo $row["T_NAME"]; ?></td>
                <td><?php echo $row["T_EMAIL"]; ?></td>
                <td><?php echo $row["T_UNAME"]; ?></td>
                <td><?php echo $row["T_GENDER"]; ?></td>
                <td><?php echo $row["T_PASS"]; ?></td>
                <td>
                    <a class="btn btn-success" href="EditProf.php?id=<?php echo $row["T_ID"]; ?>&name=<?php echo $row["T_NAME"]; ?>&email=<?php echo $row["T_EMAIL"]; ?>&uname=<?php echo $row["T_UNAME"]; ?>&gender=<?php echo $row["T_GENDER"]; ?>&password=<?php echo $row["T_PASS"]; ?>">Edit</a>
                    <a class="btn btn-danger" href="../controller/Delete_Teacher.php?id=<?php echo $row["T_ID"]; ?>">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
            }



            }
            else{
                $link = oci_pconnect("system", "12345", "127.0.0.1/XE");

                $result = oci_parse($link, "SELECT * FROM t_register");
                oci_execute($result);

                $i=0;
                while($row=oci_fetch_array($result)) {
                ?>
                <tr>
                <td><?php echo $row["T_ID"]; ?></td>
                <td><?php echo $row["T_NAME"]; ?></td>
                <td><?php echo $row["T_EMAIL"]; ?></td>
                <td><?php echo $row["T_UNAME"]; ?></td>
                <td><?php echo $row["T_GENDER"]; ?></td>
                <td><?php echo $row["T_PASS"]; ?></td>
                    <td>
                        <a class="btn btn-success" href="EditProf.php?id=<?php echo $row["T_ID"]; ?>&name=<?php echo $row["T_NAME"]; ?>&email=<?php echo $row["T_EMAIL"]; ?>&uname=<?php echo $row["T_UNAME"]; ?>&gender=<?php echo $row["T_GENDER"]; ?>&password=<?php echo $row["T_PASS"]; ?>">Edit</a>
                    <a class="btn btn-danger" href="../controller/Delete_Teacher.php?id=<?php echo $row["T_ID"]; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                $i++;
                }

            }

    ?>
        </table>
    </form>
    </center>
    

</body>
</html>
