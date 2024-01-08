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

function  file_operation(){
    if (!rename('testfile2.txt', 'testfile2.new')) {
        echo "could not rename file\n";
    } else echo "File successfully reneamed to 'testfile2.new\n";

    // unlink function
    if (!unlink('testfile2.new')) echo "could not delete file";
    else echo "File testfile2.new successfully deleted";

    // update files
    $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");

    $text = <<<_END
    what a new line to write at the end
    so sorry told you not to read it full of shit
    _END;

    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("could not write to file");
    fclose($fh);
    echo "File 'testfile.txt' successfully updated";

}

$fh = fopen("testfile.txt", 'r+') or die("Failed  to open file");
$text = fgets($fh);

if (flock($fh, LOCK_EX)) {
    fseek($fh, "$text") or die("Could not write to file");
    flock($fh, LOCK_UN);
}
fclose($fh);
echo "File 'testgile.txt' successfully updated";