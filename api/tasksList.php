<?php

//converte JSON in array indicizzato
$taskList =json_decode( file_get_contents("../taskslist.json"), true);



header("Content-Type: application/json");
echo json_encode($taskList);
//converte array in JSON

