<?php


$iterator = new FilesystemIterator('installs');
foreach($iterator as $fileInfo){
    if($fileInfo->isFile()){
        $cTime = new DateTime();
        $cTime->setTimestamp($fileInfo->getCTime());
        echo "<a href=installs/" . $fileInfo->getFileName() . ">" . $fileInfo->getFileName() . "</a> Created " . $cTime->format('Y-m-d h:i:s') .  "<br/>\n";
    }
    if($fileInfo->isDir()){
        $cTime = new DateTime();
        $cTime->setTimestamp($fileInfo->getMTime());
        echo $fileInfo->getFileName() . " dir Modified " . $cTime->format('Y-m-d h:i:s') . "<br/>\n";
    }
}
