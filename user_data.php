<?php
if(isset($_POST['register'])){
   ;
    $myfile = fopen("user_data.csv", "a") or die("Unable to open file!");
    fputcsv($myfile, $_POST);
    print_r($userdata);
}
?>
