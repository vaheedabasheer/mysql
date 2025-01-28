<?php
include 'mytrial_connection.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass=$_POST['pwd'];
    $country=$_POST['country'];
    mysqli_query($con,"INSERT INTO users(first_name,last_name,password,country)VALUES('$fname','$lname','$pass','$country')");

}

?>
<form method="POST" action="">
First Name: <input type="text" name="fname"><br><br>
Last Name: <input type="text" name="lname"><br><br>
Password: <input type="password" name="pwd"><br><br>
country: <select name="country" id="">
    <option value=""></option>
    <option value="1">USA</option>
    <option value="2">uk</option>
    <option value="3">INDIA</option>
    <option value="4">KSA</option>
    <option value="5">UAE</option>
</select>
<br><br>
<button name="submit">SUBMIT</button>

</form>
