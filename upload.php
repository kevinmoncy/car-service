<?php
if (isset($_POST['submit'])){
    $file=$_FILES['file'];
    $fileName =$_FILES['file']['name'];
    $fileTmpName =$_FILES['file']['tmp_name'];
    $fileSize =$_FILES['file']['size'];
    $fileError =$_FILES['file']['error'];
    $fileType =$_FILES['file']['type'];
    $fileExt= explode('.',$fileName);
      strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf');
    if
        (in_array($fileActualExt,$allowed))
    {
        if($fileError === 0){            }

            if($fileSize<1000000){
                $fileNameNew= uniqid('',true).".".$fileActualExt;
                $fileDestiantion= 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName,fileDestination);
                header("Location:demo.php?success")
        } else
        {
            echo "to big";
        }
    }
    else
    {
        echo"error";
    }
        else
        {
            echo"you cannot";
        }
    
}