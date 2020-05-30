<?php
function register($login, $password, $repeat_pas, $email)
{
 $isExists=true;
 if (strlen($login) < 3 or strlen($login) > 30 or strlen($password) < 3 or strlen($password) > 30)
  {
   echo "<h3><font color=red font face='arial' size='20pt'>Логин и пароль должен состоять не менее чем из 3 символов и не более чем из 30!</font></h3>";
   $isExists=false;
  }

   $fd=fopen("Users.txt",'a+') or die("не удалось открыть файл");   
    while(!feof($fd))
    {
    	$str=fgets($fd);
      $str_parts=explode("|", $str);
    	if($login==$str_parts[0])
    	{
    	  echo "<h3><font color=red font face='arial' size='20pt'> Логин с таким именем уже занят!</font></h3>";
    		$isExists=false;
    		break;
    	}    	
    }
     if($isExists)
    {
     
     echo "<h3><font color=green font face='arial' size='20pt'>Добро пожаловать новый пользователь!</font></h3>"; 
     echo '<p>Ваш логин: '.$login.'</p>';
     echo '<p>Ваш пароль: '.$password.'</p>';    
     $str1 =$login."|".$password."|".$email;
     fputs($fd,$str1.PHP_EOL);     
     
    }
    fclose($fd); 
}

function login($login,$password)
{ 
  $isExists=true;
  $fd=fopen("Users.txt",'r') or die("не удалось открыть файл");  
    while(!feof($fd))
    {
      $str=fgets($fd);
      $str_parts=explode("|", $str);
      if($login==$str_parts[0])
      {
        $isExists=false;
        break;
      }     
    }
      fclose($fd); 

     if(!$isExists)
    {
    $_SESSION['registered_user'] = $login;
    return true;
    }
    else 
    {
     echo ' <script>window.location = "index.php?page=4";</script>';
     return false;
     }
}
?>
