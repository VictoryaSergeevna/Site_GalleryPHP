<?php
$page=$_GET['page'];
?>
   <ul class="nav nav-pills">
  <li class="nav-item">
    <a <?php echo($page==1)?"class='nav-link active'":"class='nav-link'"?> href="index.php?page=1">Home</a>
  </li>
  <li class="nav-item">
    <a <?php echo($page==2)?"class='nav-link active'":"class='nav-link'"?> href="index.php?page=2">Upload</a>
  </li>
  <li class="nav-item">
    <a <?php echo($page==3)?"class='nav-link active'":"class='nav-link'"?> href="index.php?page=3p">Gallery</a>
  </li>
  <li class="nav-item">
    <a <?php echo($page==4)?"class='nav-link active'":"class='nav-link'"?> href="index.php?page=4">Registration</a>
  </li>
</ul>
</ul>   

<style type="text/css">
  a:hover{
    background-color: lightgrey;
  }
  ul{
    margin: 10px;
    height: 60px;    
    padding: 5px;
    background-color:antiquewhite;
  }
  li{
    font-weight: bold;
    font-size:20px;
  }
</style>