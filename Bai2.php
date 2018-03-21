<form method="post" name="form">
    <input type="text" name="TuKhoa" placeholder="Tu khoa ...">
    <input type="submit" value="Tim" name="Tim">
</form>

<?php
    if(!empty($_POST['TuKhoa']))
    {
        $Ten = $_POST['TuKhoa'];
        echo ("Ket qua tim kiem voi tu khoa, " .$Ten);
    }
    else
    {
        echo("Nhap vao tu khoa can tim!!!");
    }
 ?>