<?php
$cmd = "ls";

exec(escapeshellcmd($cmd), $output, $status);
if ($status) echo "Exec command failed";
else {
    foreach($output as $line) echo htmlspecialchars("$line\n");
}

// exec takes three command 
// An array in which e system will puut the output from the command (in the previous vase, outpue)
// A variable to contain the returned status of the call (which in teh previous case is $status)
