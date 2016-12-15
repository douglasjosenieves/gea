<?php
$ds          = DIRECTORY_SEPARATOR;  //1
$date =  date("YmdGis");
$storeFolder = 'images';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds. $date.'-';  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}

echo $date.'-'.$_FILES['file']['name'] ;
?>