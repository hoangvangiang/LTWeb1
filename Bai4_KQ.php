<html>
    <h1> THUC DON DA CHON</h1>
<?php
if(!empty($_POST['mon_khai_vi']))
{
    $khai_vi = $_POST['mon_khai_vi'];
    echo "- Mon Khai Vi: ";
    foreach ($khai_vi as $x){
        echo $x."<br><br>";
    }
}
 else {
     echo ("Chua chon mon khai vi!"). "<br><br>";
}
if(!empty($_POST['mon_chinh']))
{
    $chinh = $_POST['mon_chinh'];
    echo "- Mon Chinh: ";
    foreach ($chinh as $y){
        echo $y."<br><br>";
    }
}
 else {
     echo "Chua chon mon chinh!"."<br><br>";
}
if(!empty($_POST['mon_trang_mieng']))
{
    $trang_mieng = $_POST['mon_trang_mieng'];
    echo "- Mon Trang Mieng: ";
    foreach ($trang_mieng as $z){
        echo $z."<br><br>";
    }
}
 else {
     echo "Chua chon mon trang mieng!";
}
?>
</html>
<style>
        body{
            text-align: center;
        }
</style>