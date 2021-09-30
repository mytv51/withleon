<?php

$zipName = 'file_nen1.zip';
$zip = new ZipArchive();
if ($zip->open($zipName, ZipArchive::CREATE) == FALSE) {
    die("can't open");
}
$zip->addFile("images/room/img_exterior.png");
$zip->addFile("images/room/img_exterior2.png");
$zip->addFile("images/room/img_room1.jpg");
$zip->close();


$demo_name = "file_nen1.zip";
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="' . $demo_name . '"');
readfile('file_nen1.zip'); // auto download
//if you wnat to delete this zip file after download
unlink('file_nen.zip');
