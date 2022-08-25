<?php 
include_once '../controller/ADD_USER_CONTROLLER.php';

?>
<html>
	    <head>
        <style>
            body {
                    background-color: rgb(204, 204, 204);
                }    
        </style>
        <script> 
		var hasError=false;



function validate(){
    refresh();
    if(get("email").value == ""){
        hasError = true;
        get("err_email").innerHTML = "<span'>*Email Required</span>";
    }

    if(get("password").value == ""){
        hasError = true;
        get("err_pass").innerHTML = "<span>*Password Required</span>";
    }
    return !hasError;
}

    function refresh(){
        hasError=false;
        get("err_email").innerHTML ="";
        get("err_pass").innerHTML ="";
    }
		</script>
        
        </head>
    <body>
            <form action="" onsubmit="return validate()" method="post">
                <fieldset>
                    <legend><h1>Add User</h1></legend>
                <table align="center">	
                   

                    <tr>        
                        <td>
                            First Name
                        </td>
                        <td>
                            :<input id="fname" type="text" name="fname" value="<?php echo $fname;?>"  placeholder="Enter First name">
                        </td>
                        <td>
                        <span id="err_fname"><?php echo $err_fname;?></span>
                        </td>
                    </tr>

                     <tr>        
                        <td>
                            Last Name
                        </td>
                        <td>
                            :<input id="lname" type="text" name="lname" value="<?php echo $lname;?>"  placeholder="Enter Last name">
                        </td>
                        <td>
                        <span id="err_lname"><?php echo $err_lname;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            :<input id="email" type="email" name="email" value="<?php echo $email;?>" placeholder="Enter a valid email">
                        </td>
                        <td>
                        <span id="err_email"><?php echo $err_email;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Password
                        </td>
                        <td>
                            :<input id="password" type="password" name="password" value="<?php echo $pas;?>" placeholder="Enter password">
                        </td>
                        <td>
                        <span id="err_pass"><?php echo $err_pass;?></span>
                        </td>
                    </tr>

                    
                    
                    <!-- <tr>
                        <td>
                            Majore health Issue<br>
                            (if any)
                        </td>
                        <td>
                            :<textarea id="health" name="health" placeholder="Mention if any"><?php echo $health;?></textarea>
                        </td>
                    </tr> -->
                    
                    
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td> 
                        <input type="submit" name="sign_up" value="Submit">
                        
                        
                        
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>

<?php 

?>
