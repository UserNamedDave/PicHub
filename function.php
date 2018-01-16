<?php 
function connection_ok($mysqli) {
    if ($mysqli->connect_errno) {
        return false;
    }
    else {
        return true;
    }
}
function is_auth($mysqli, $user, $pass) {
    if($result = $mysqli->query("SELECT tbluser.PW FROM tbluser WHERE tbluser.username = '$user' LIMIT 1;")) {
        $row = mysqli_fetch_array($result);
        if ($row[0] == $pass) {
            return true;
        }
        else {
            return false;
            echo"pw not verify";
        }
    }
    else {
        return false;
        echo"select statement";
    }
    return false;
    echo"pw not query";
}
function lib_insert($mysqli, $title, $description, $rolechoose /*, $file*/){
    if (isset($title) and isset($rolechoose) /*and isset($file)*/){
        $mysqli->query("INSERT INTO tblpost (timestamp, title, description, picture_id, restriction) VALUES ((SELECT user.id FROM user WHERE user.name = '$autor'), '$eintrag', '$zeitpunkt' );");
    }
}
?>