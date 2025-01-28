
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $pic=$_FILES['f1']['name'];
//  var_dump($pic);
//  exit();
    if($pic!="")
    {
        $filearray=pathinfo($_FILES['f1']['name']);
        
        $file1=rand();
        $file_ext=$filearray["extension"];
        $filenew=$file1.".".$file_ext;
        // var_dump($filenew);
        // exit();
        move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);
        mysqli_query($con,"INSERT INTO `fileup`(`file`) VALUES ('$filenew')" );
        echo "<script>alert ('file uploaded');</script>";
    }
    else{
        echo "<script>alert ('please try again');</script>";
    }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <file upload> -->
        <form action="" method="Post" enctype="multipart/form-data">
<input type="file" id="image_id" name="f1" placeholder="image">
<button name="submit">Submit</button>
        </form>
</body>
</html>