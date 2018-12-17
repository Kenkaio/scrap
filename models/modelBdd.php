<?php

ob_start();
function redirect_to($url){
    header($url);
    exit();
}
error_reporting(E_ALL);
ini_set("display_errors", 1);


function posts(){
    $db = dbConnect();
    $req = $db->query('SELECT * FROM articles ORDER BY id DESC LIMIT 1');
    return $req;
}

function allPosts(){
    $db = dbConnect();
    $req = $db->query('SELECT * FROM articles ORDER BY id DESC');
    return $req;
}
