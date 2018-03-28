<?php
  if(!empty($_POST['Ten']))
  {
      echo(" - Ten: ".$_POST['Ten'])."<br><br>";
  }
  if(!empty($_POST['E-mail']))
  {
      echo(" - E-mail: ".$_POST['E-mail'])."<br><br>";
  }
  if(!empty($_POST['Web']))
  {
      echo(" - Web: ".$_POST['Web'])."<br><br>";
  }
  if(!empty($_POST['Comment']))
  {
      echo(" - Comment: ".$_POST['Comment'])."<br><br>";
  }else{
      echo ' - Comment: No Comment...!'.'<br><br>';
  }
  if(!empty($_POST['Gender']))
  {
      echo(" - Gender: ".$_POST['Gender'])."<br><br>";
  }
?>