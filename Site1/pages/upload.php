<?php
 $_GET['page'] = 2?>
 <h3>Upload form</h3>
 <?php
if($_SESSION['registered_user']!=null)
{
	?> 
<form action="index.php?page=2" method="POST" enctype='multipart/form-data'>
	<div class="form-group">
		<label>Выберите файл для загрузки</label>	
		<input type="file" name="filename" class="form-control-file"><br>
		<input type="submit" class="btn btn-primary" value="Послать файл" name = "submit">
	</div>
</form>
<?php
  if ($_FILES["filename"]["size"] > 500000)
    {
	 echo "<h3><font color=red font face='arial' size='20pt'> Sorry, your file is too large!</font></h3>";   
    
    }
  else{
 
   if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
   { 
   		$name = $_FILES['filename']['name'];
   		move_uploaded_file($_FILES['filename']['tmp_name'], 'images/'.$name);
   		echo "<h3><font color=green font face='arial' size='20pt'>File Uploaded Successfuly!</font></h3>"; 
   		
	}
    else if ($_FILES && $_FILES['filename']['error']!= UPLOAD_ERR_OK){
      echo "<h3><font color=red font face='arial' size='20pt'> Upload error code:2</font></h3>";
	}
	}
}

else
   {
		echo "<h3><font color=red font face='arial' size='20pt'>For registered users Only!</font></h3>";
	}

 ?>
<a href="index.php">Назад</a>
