<?php
include 'conf.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $FILES['file']['name'];
    $fileTmpName = $FILES['file']['tmp_name'];
    $fileSize = $FILES['file']['size'];
    $fileError = $FILES['file']['error'];
    $fileType = $FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if ($fileSize < 1000000) {
                 
            }else{
                echo "Your file is too big!"
            }
        }else {
            echo "There was an error uploading your file";
        }
    }else{
        echo 'You cannot upload files of this type!';
    }

}

?>
