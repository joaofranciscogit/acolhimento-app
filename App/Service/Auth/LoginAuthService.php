<?php

use Autoload\Class\Database\Database;
use Autoload\Class\Helper\Helper;

$useDatabase = new Database(DATABASE);
$useHelper = new Helper();

header('Content-Type: application/json');

$serviceData = json_decode(file_get_contents('php://input'), true);

$serviceParam = [
    ':email' => $serviceData['email'],
    ':senha' => $serviceData['senha']
];

$serviceExecute = $useDatabase->mysqlExe("SELECT *FROM conta WHERE conta_email = :email AND conta_senha = :senha", $serviceParam);

if (count($serviceExecute) == 1) {

    $serviceReturn = $serviceExecute;
    $_SESSION['conta'] = $serviceReturn[0];

    http_response_code(200);
    echo json_encode($serviceReturn[0]);
    die;
}

else{
    http_response_code(400);
    echo json_encode(["error" => 'NÃO']);
    die;
}