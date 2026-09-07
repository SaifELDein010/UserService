<?php

// create fake log as a JSON
// format log data into record
// save log data

require_once './LoggerService/LoggerFormat/LoggerType/RecordLog.php';
require_once './LoggerService/LoggerSave/LoggerType/FileLogging.php';
require_once './LoggerService/LoggerSave/LoggerType/DatabaseLogging.php';
require_once './LoggerService/LoggerFormat/LoggerType/DatabaseLog.php';
require_once './ValidatorService/ValidatorTypes/LogData.php';
require_once __DIR__ . '/config/database.php';

use LoggerService\LoggerFormat\LoggerType\Record;
use LoogerService\LoggerType\FileLogging;
use LoogerService\LoggerType\DatabaseLogging;
use LoggerService\LoggerFormat\LoggerType\DatabaseLog;
use ValidatorService\ValidatorTypes\LogData;


$dataLog = [
        "username" => "user", 
        "action" => "User reqister successfully", 
        "datetime" => date('Y-m-d H:i:s')
    ];

$dataLog = json_encode($dataLog);
$isValidData = new LogData\LogData($dataLog);
echo "\n  >> ".$isValidData->validated()." \n";

$formatLog = new Record\RecordLog($dataLog);
$record = $formatLog->format();

$saveLog = new FileLogging\FileLogging($record);
$saveLog->saveLog();

$formatDB = new DatabaseLog\DatabaseLog($dataLog, $pdo);

$saveLogDB = new DatabaseLogging\DatabaseLogging($formatDB);
$saveLogDB->saveLog();

?>