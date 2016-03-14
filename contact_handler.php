<?php

$user = 'cs1520';
$pass = 'pass1234';
$db = 'mysite';

$conn = new mysqli("localhost", $user, $pass, $db);

if($conn ->connect_errno > 0){
    echo 'Unable to connect to database';
}

function store_contact($first, $last, $email, $msg){
    if($msg == null){
        $msg=="<NO_MSG>";
    }
    $qry = "INSERT INTO contact_form (first_name, last_name, email, msg)
            VALUES('$first','$last', '$email', '$msg');";
    global $conn;
    $test= $conn->query($qry);
    if(!$test){
        echo $conn->error;
    }
}