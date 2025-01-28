
<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['submit']))
    {
        $uname=$_POST['username'];
        $pwd=$_POST['password'];
        $data=mysqli_query($con,"SELECT * FROM login_tb WHERE user_name='$uname' and password='$pwd'");
    
    if(mysqli_num_rows($data)>0)
    {
        $ses=mysqli_fetch_assoc($data);
        // $a=$ses['user_name'];
        // var_dump($a);
        $_SESSION['username']=$ses['user_name'];
        header("location:7jan_home.php");

    }
    else{
        echo "<script>alert('invalid username or password')</script>";
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr,td {
border:1px solid black;
           
           text-align:center;
           
        }
        
        table{
           
           margin:300px;
          
         border-collapse:collapse;
           
        }
        button:hover{background-color:red;}
    </style>
</head>
<body>
   
   <center>
   <form action="" method="POST">
    <table>
        <tr>
        <td> Username:</td>
        <td><input type="text" name="username" > </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td> <input type="password" name="password" > </td>
        </tr>
        <tr>
           <td colspan="2"  ><center><button class="button" name="submit" >Login</button></center></td> 
        </tr>
        
    </table>
   
   </form>
   </center>
</body>
</html>