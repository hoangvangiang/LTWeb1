<?php
    if(!empty($_POST['TuKhoa']))
    {
        $Ten = $_POST['TuKhoa'];
        echo ("Ket qua tim kiem voi tu khoa, " .$Ten)."<br>";
    }
    else
    {
        echo("Vui long nhap vao tu khoa can tim!!!" . '<br>');
    }
    echo '<a href="Bai1.php">Quay Lai!</a>';
 ?>