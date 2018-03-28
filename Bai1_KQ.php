<?php
if(!empty($_POST['Hoten']))
{
    $Ten = $_POST['Hoten'];
    echo ("Xin Chao, " .$Ten) ."<br>";
}
else
{
    echo 'Chua Nhap Ho Ten!!'. "<br>";
}
echo '<a href="Bai1.php">Quay Lai!</a>';  