<html>
  <head>
  <title>HTML Program</title>
  </head>
  <body>
  <center>
  <marquee> <h1><strong>MA College</h1></marquee>
   <h2><i>Student Registration</i></h2>
   <h3>MCA</h3>
   <a href="table.html">Student List</a>
   <br>
   <form action="test2.php" method="POST" align="center">
   <br>

   <label> First name : </label>
     <input type="text" name="Fn"/><br>
     <br>
   <label> Address : </label>
     <textarea cols="20" rows="5" name="add"  value="Address">
     </textarea>
     <br><br>
   <label>Gender :</label>
     <input type="radio" name="male"/>MALE
       <input type="radio" name="female"/>FEMALE
       <input type="radio" name="other"/>OTHER
       <br><br>
   <label>Date of Birth :</label>
      <input type="date" name="dd"/>
      <br>
      <br>
  <label>Phone no.:</label>
     <input type="number" name="num"/>
     <br>
     <br>
        
   <label>Course :</label>

       <select >
        <option value="MCA">MCA</option>
        <option value="Mtech">Mtech</option>
        <option value="BCA">BCA</option>
        <option value="Btech">Btech</option>   
      </select> 
        <br>        
  <br> 
     
   <br>
     <input type="submit"  name="sub" value="submit">
     <input type="submit" name="can" value="cancel">
  
 
     </form>
     </center>
  </body>

</html>
<?php
 if(isset($_POST['sub']))
 { 
 echo "name:",$_POST['Fn'],"<br>";
 echo "Address:",$_POST['add'],"<br>";
 echo "DOB:",$_POST['dd'],"<br>";
 echo "Phone:",$_POST['num'],"<br>";
 }
?>

