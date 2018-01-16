<?php 

include "function.php";
include "dbconnection.php";

$title = $mysqli->real_escape_string($_POST["titel"]);
$description = $mysqli->real_escape_string($_POST["description"]);
$rolechoose = $mysqli->real_escape_string($_POST["rolechoose"]);
$file = $mysqli->real_escape_string($_POST["file"]);

 if($rolechoose == "all")
 {$rolechoose = 3;}
else if($rolechoose == "Specific User")
 {$rolechoose = 2;}
else {$rolechoose = 1;}

mysqli_query ("INSERT INTO tblpost ('title', 'description', 'restriction', 'Picture_pfad')
VALUES ("$title", "$description", "$rolechoose", "$file")");

$img = imagecreatefromjpeg($file);
$path = 'img-down/';
imagejpeg($img, $path);

//$file = $mysqli->real_escape_string($_FILES["file"]["name"]);
// $uploaddir = 'img/';
// $uploadfile = $uploaddir . basename($file);


// if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
//     echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
// } else {
//     echo "Möglicherweise eine Dateiupload-Attacke!\n";

// print_r($_FILES);
// }
?>

mysql_query("INSERT INTO tblpost ("title", "description", "Picture_pfad")
VALUES ('$title', '$description', 