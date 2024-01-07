<?php
// understanding file in php

// checking whether a file exists
if (file_exists("testfile.txt")) {
    $fh = fopen("testfile.txt", 'r') or die('File does not exist or you lack permission to read');

    $line = fread($fh, 10);
    fclose($fh);
    echo $line;
}

else {
    $fh = fopen("testfile.txt", "w") or die("Failed to create a file");

    $text = <<<_END
    This is a file
    that I just created for testing
    only please do not open
    _END;
    fwrite($fh, $text);
    fclose($fh);
    echo "File 'testfile.txt' written successfully";
};