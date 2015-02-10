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


$structure = 'packs/' . $_POST["name"] . '/';
print($structure);
if (!mkdir($structure, 0777, true)) {
    die('Failed to create folders...');
    $hasFailed = true;
} else {
    echo 'Created the mod pack folder';
}


if(!$hasFailed) {
    $file = $structure + 'pack.txt';
    $newfile = fopen($file, "wb") or die("Unable to make new file!");
    fclose($newfile);
    $myfile = fopen($file, "w") or die("Unable to open file!");
    $txt = $_POST["description"] + "\n";
    fwrite($myfile, $txt);
    $txt = $_POST["mcVer"] + "\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>