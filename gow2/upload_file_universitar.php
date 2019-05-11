<?php
$targetfolder = "uploads/universitar/";
$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
{
    header("Location: index.php?uploadsuccess");
}
else {
    header("Location: index.php?uploadfailed");
}
?>