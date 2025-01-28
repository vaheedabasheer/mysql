<?php
include 'con.php';
if(isset($_POST['submit']))
{
    $gender=$_POST['gender']
    if($gender=="male")
    {
        $data="male";
    }
    elseif($gender=="female")
    {
        $data="female";
    }
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $add=$_POST['addr'];
    $dis=$_POST['district'];
    $state=$_POST['state'];
 
    mysqli_query($con,"INSERT INTO my_tb(first_name,last_name,age,email,password,address,gender,district,state) VALUES ('$fname','$lname','$age','$email','$pass','$add','$data','$dis','$state')");
    
}
?>
<form method="POST" action="" >
first Name: <input type="text" name="fname"> <br> <br>
Last Name: <input type="text" name="lname"> <br> <br>
Age: <input type="text" name="age"> <br> <br>
Email: <input type="email" name="email"> <br> <br>
Password: <input type="password" name="password"> <br> <br>
Address: <textarea name="addr" id=""></textarea> <br> <br>
Gender: <input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female"> Female
<br> <br>
District: <select name="district" id="">
    <option value=""></option>
    <option value="kozhikode">kozhikode</option>
    <option value="kannur">kannur</option>
    <option value="wayanadu">wayanadu</option>
    <option value="idukki">idukki</option>
    <option value="ernakulam">ernakulam</option>
    <option value="trivandrum">trivandrum</option>
    <option value="malappuram">malappuram</option>
</select>
<br> <br>
state: <select name="state" id="">
    <option value=""></option>
    <option value="kerala">kerala</option>
    <option value="tamilnadu">tamilnadu</option>
    <option value="karnataka">karnataka</option>
    <option value="jammu">jammu</option>
    <option value="gujarat">gujarat</option>
</select>
<br> <br>
<button name="submit">SUBMIT</button>
</form>