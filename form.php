<?php

if ( isset($_POST['submit']) ) {
    $file = fopen($_POST['username'].'.'.'txt', 'w') or die("Unable to create file.");
    $write_file = fwrite($file, 'USERNAME: '.$_POST['username'].PHP_EOL.'FIRST NAME: '.$_POST['first_name'].PHP_EOL.'LAST NAME: '.$_POST['last_name'].PHP_EOL.'EMAIL ADDRESS: '.$_POST['email']);
    echo $write_file ? "Write Successful" : "An error occurred";
    fclose($file);
}

?>