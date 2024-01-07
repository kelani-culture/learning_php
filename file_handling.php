<?php
// understanding file in php

// checking whether a file exists
function files() {
    if (file_exists("testfile.txt")) {
        $fh = fopen("testfile.txt", 'r') or die('File does not exist or you lack permission to read');

        $filename = 'testfile.txt';
        $line = fread($fh, filesize($filename));

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
    }
}
#files();

// copying file in php
if (file_exists('testfile.txt')) {
    copy('testfile.txt', 'testfile2.txt');
    echo "copy file successful\n";
}

// rename function
if (!rename('testfile2.txt', 'testfile2.new')) {
    echo "could not rename file";
} else echo "File successfully reneamed to 'testfile2.new";