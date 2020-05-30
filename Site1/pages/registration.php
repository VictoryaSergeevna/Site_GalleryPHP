<?php
/*include("functions.php");*/
$_GET['page'] = 4;
?>
	<form action="index.php?page=4" method="POST">
	<h1>Регестрация</h1> 
  <div class="form-group">
    <label for="InputLogin">Введите логин:</label>
    <input type="text" class="form-control" id="InputLogin" placeholder="Логин должен содержать 3-30 символов" name="login" required>    
  </div>
  <div class="form-group">
    <label for="InputPassword">Пароль:</label>
    <input type="password" class="form-control" id="InputPassword" placeholder="Введите пароль" name="password"  required>
  </div>
  <div class="form-group">
    <label for="InputRepeat_Pas">Повторите пароль:</label>
    <input type="password" class="form-control" id="InputRepeat_Pas" placeholder="Пароли должны совпадать" name="repeat_pas" required>
  </div>
   <div class="form-group">
    <label for="InputEmail">Введите email:</label>
    <input type="email" class="form-control" id="InputEmail" placeholder="name@example.com" name="email" aria-describedby="emailHelp" required>      
  </div>  
  <button type="submit" name="save" class="btn btn-primary" >Сохранить</button>
</form>

<?php
if(isset($_POST['save']))
{  
  $login=$_POST['login'];
  $password =$_POST['password'];
  $repeat_pas =$_POST['repeat_pas'];
  $email=$_POST['email'];  
	if($password == $repeat_pas)
	{

		register($login, $password, $repeat_pas, $email);
	}

	else
	{
   echo "<h3><font color=red font face='arial' size='20pt'>Пароли не совпадают!</font></h3>";
	}

}
?>
<a href="index.php">Назад</a>
<style type="text/css">
	input{
		padding-left: 10px; 
	}
</style>