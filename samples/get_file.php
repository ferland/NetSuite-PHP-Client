<?php

require_once '../PHPToolkit/NetSuiteService.php';
require_once "../PHPToolkit/NSconfig.php";

$service = new NetSuiteService();

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "346";
$request->baseRef->type = "file";
$getResponse = $service->get($request);
if (!$getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $file = $getResponse->readResponse->record;
    echo "GET SUCCESS, File name is " . $file->name;
}

?>

