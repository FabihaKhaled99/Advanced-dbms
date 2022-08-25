<?php
    session_start();
    if (isset($_POST['submit'])) {

        $username = $_POST['UNAME'];
        $password = $_POST['Pass'];

        if ($username == '' && $password == '' ) {

            echo "Please fill all the information";

            //header('location: ../view/adminDashboard.php');
        }
        else{

            if ($username == 'Mile' && $password == '12345') {

                setcookie('adminflag', true, time()+3600, '/');

                header('location: ../view/home_mod2.php');
                
            }
            else{


                $link = oci_pconnect("system", "12345", "localhost/XE");

                $result = oci_parse($link, "SELECT * from register WHERE uname ='$username' and pass ='$password'");
                oci_execute($result);

                    while ($row = oci_fetch_array($result)) {

                       $_SESSION['ID'] = $row['ID'];
                    $_SESSION['NAME'] = $row['NAME'];
                    $_SESSION['EMAIL'] = $row['EMAIL'];
                    $_SESSION['UNAME'] = $row['UNAME'];
                    $_SESSION['GENDER'] = $row['GENDER'];
                    $_SESSION['PASS'] = $row['PASS'];

                        setcookie('flag', true, time()+3600, '/');

                    }


                oci_free_statement($result);
                oci_close($link);

                header('location: ../view/home_mod2.php');
            }
        }

    }

?>