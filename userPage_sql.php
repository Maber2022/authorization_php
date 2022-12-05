<?php

header('Content-Type: text/html; charset=utf-8');
$request = $_GET["data"];

if($request === "getUserData"){
dataMainer::getAllData();
} else {
echo "Data not found";
}

class dataMainer {
    public static function getAllData(){
    $mysqli = mysqli_connect("localhost", "ztjsifmb_learn", "12345", "ztjsifmb_learn");
    if ($mysqli == false) {
    echo "error";
    } else {
            $result = $mysqli->query("SELECT * FROM `users`");
            $result = $result->fetch_assoc();
            $result = json_encode($result);
            echo $result;
    }
}

}
