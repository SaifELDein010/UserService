<?php

// create fake log as a JSON
// format log data into record
// save log data

require_once './LoggerService/LoggerFormat/LoggerType/RecordLog.php';
require_once './LoggerService/LoggerSave/LoggerType/FileLogging.php';
require_once './LoggerService/LoggerSave/LoggerType/DatabaseLogging.php';
require_once __DIR__ . '/config/database.php';

use LoggerService\LoggerFormat\LoggerType\Record;
use LoogerService\LoggerType\FileLogging;
use LoogerService\LoggerType\DatabaseLogging;

$dataLog = [
        "username" => "user", 
        "action" => "User reqister successfully", 
        "datetime" => date('Y-m-d H:i:s')
    ];

$dataLog = json_encode($dataLog);

$formatLog = new Record\RecordLog($dataLog);
$record = $formatLog->format();

$saveLog = new FileLogging\FileLogging($record);
$saveLog->saveLog();

$saveLogDB = new DatabaseLogging\DatabaseLogging($dataLog, $pdo);
$saveLogDB->saveLog();

?>