<?php $_GET['page'] = 3 ?>
<h1>Gallery</h1>
<form action="index.php?page=3" method="POST" enctype="multipart/from-data" class="form-inline">
<div class="col-auto my-1">
<label for="select" class="mr-sm-2">Select graphics extention to display:</label>    
    <select class="custom-select mr-sm-2 id="select" name="formats[]">
      <option value="png">png</option>
      <option value="jpg">jpg</option>      
    </select>
    <button type="submit" name="show"  class="btn btn-primary">Show Pictures</button>
  </div> 

</form>



<?php 
if(isset($_POST['show'])){
   $formats=$_POST['formats'];
     $directory ="images";      
     $allowed_types=array("jpg", "png");
     $file_parts = array();
     $ext="";
     $title="";
     $i=0; 
  $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
    while ($file = readdir($dir_handle))    //поиск по файлам
      {
      if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
      $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
      $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение
          
     if(in_array($ext,$formats))
      {
      echo '<div class = "row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
             <div class="card h-100">
                <img src="'.$directory.'/'.$file.'" class="card-img-top" title="'.$file.'" />             
               <div class="card-body">
                <h5 class="card-title">'.$file.'</h5>
               </div>
              </div>
             </div>
             </div>            
            ';
     $i++;
    }
    
    }

    closedir($dir_handle);  //закрыть папку
    }
    
?> 

<!--Заполнение select -->
<!-- <form action="index.php?page=3" method="POST" enctype="multipart/from-data" class="form-inline">
<div class="col-auto my-1">
  <label for="select" class="mr-sm-2">Select graphics extention to display:</label>       
  <select class="custom-select mr-sm-2 id="select" name="formats[]">
    <?php
      $directory ="images";     
      $file_parts = array();
      $ext="";    
     
    $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
      while ($file = readdir($dir_handle))    //поиск по файлам
       {
        if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
        $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
        $ext = strtolower(array_pop($file_parts)); 
        foreach ($ext as $value) {      
        echo '<option value="val">'.$value.'</option>'; 
        }
      } 
      closedir($dir_handle);  //закрыть папку
      ?>
    </select>    
    <button type="submit" name="show"  class="btn btn-primary">Show Pictures</button>
    </div> 
</form>



<?php 
if(isset($_POST['show'])){
  $formats=$_POST['formats'];
  $directory ="images";
  $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
while ($file = readdir($dir_handle))    //поиск по файлам
  {
      if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
      $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
      $ext = strtolower(array_pop($file_parts)); 
   if(in_array($ext,$formats))
      {
      echo '<div class = "row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
             <div class="card h-100">
                <img src="'.$directory.'/'.$file.'" class="card-img-top" title="'.$file.'" />             
               <div class="card-body">
                <h5 class="card-title">'.$file.'</h5>
               </div>
              </div>
             </div>
             </div>            
            ';
     $i++;
     }
   }
  closedir($dir_handle);
}     
?>  -->

<a href="index.php">Назад</a>
