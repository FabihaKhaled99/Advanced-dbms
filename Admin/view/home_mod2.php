
                <?php include 'account.php' ;?>


  <html>
  <head>
    <title> Home </title>
  </head>
  <body >
     <link rel="stylesheet" href="CSS/home_mod2.css">

    <table border="0" width="90%" align="center">
      <tr align="center">
       
       <h1 align="center"> Welcome Home Admin </h1>
        
      </tr>



      <tr align="left">
       

        <td> 
          <h2> Services : </h2> 
          <ul>
            <li><a href="Teacher.php"><h2>Crud Teacher</h2></a> </li>
            <li><a href="AddStudent.php"><h2>Assign Students to courses </h2></a></li>
            <li><a href="add_user.php"><h2>Add Users </h2></a></li>
            <li><a href="AddNotices.php"><h2>Add Notices</h2></a></li>
            <li><a href="AddNotes.php"><h2>Add Notes</h2></a></li>
             <li><a href="AddCourse.php"><h2>Add Course</h2></a></li>
             <li><a href="Add_grade.php"><h2>Add Grade Reports</h2></a></li>
            <li><a href="advancedSearch.php"><h2>Search Notes of the courses</h2></a> </li>
            <li><a href="WriteNotices.php"><h2>Write Notices</h2></a></li>
            <li><a href="Result.php"><h2>Scholarship Student List</h2></a> </li>
            
            <li><a href="About.html"><h2>About</h2></a> </li>
          </ul>
        </td>
         <td >
          <h2>Notices:</h2>
    
        <?php include 'Viewnotices.php' ;?>
        </td>
         
      </tr>

      
    </table>

  </body>
  </html>