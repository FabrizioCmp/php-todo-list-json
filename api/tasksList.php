<?php

//converte JSON in array indicizzato
$taskList =json_decode( file_get_contents("../taskslist.json"), true);


$newtask = $_POST["task"] ?? "";

if($newtask){
    $taskList[] = [
        "task" => $newtask,
        "completed" => false,
    ];
    file_put_contents("../tasksList.json",json_encode($taskList, JSON_PRETTY_PRINT));
};



header("Content-Type: application/json");
echo json_encode($taskList);
//converte array in JSON

