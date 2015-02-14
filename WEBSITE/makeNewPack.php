<?php
$hasFailed = false;


if(strlen($_POST['name']) < 3){
    $error = 'Pack name is too short';
    $hasFailed = true;
}


if($hasFailed){
    die($error);
}

if(strlen($_POST['description']) < 50){
    $error = 'The description is too short. It must be longer than 50 chars';
    $hasFailed = true;
}

$mcVerDecimals = substr_count($text, '.');

if($hasFailed){
    die($error);
}

$command = escapeshellcmd("python makePack.py ". $_POST['name'] . " " . $_SESSION['username'] . " ".  str_replace(" ","_",$_POST['description']) . " " . $_POST['mcVer'] . " " . $_POST['forgeVer']);
$output = shell_exec($command);
echo $output;

?>