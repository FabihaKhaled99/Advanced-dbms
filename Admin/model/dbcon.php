<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>


<body>
    <?php
    $GLOBALS['error'] = "";
    $GLOBALS['success'] = "";
    class db
    {
        function OpenCon()
        {
            $dbhost = "localhost/xe";
            $dbuser = "system";
            $dbpass = "12345";
            // $db = "ridehub";

            $this->conn = @oci_connect($dbuser, $dbpass, $dbhost);
            return $this->conn;
        }

       
function ShowAllAdmin()
        {
            $result = oci_parse($conn, "SELECT * From register");
            return $result;
        }
function CloseCon($conn)
        {
            oci_close($conn);
        }
    }

    ?>
</body>

</html>