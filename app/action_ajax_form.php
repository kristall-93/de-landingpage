<?php

if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["message"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'mail' => $_POST["mail"],
    	'message' => $_POST["message"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>