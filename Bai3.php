<form action = "Bai3_KQ.php" method="POST">
    Name:  <input type = "text" name = 'Ten' value="<?php echo (@$_POST['Ten'])?>"> <br><br>
    E-mail: <input type = "email" name = 'E-mail' value="<?php echo (@$_POST['E-mail'])?>"> <br><br>
    Website: <input type = "text" name = 'Web' value="<?php echo (@$_POST['Web'])?>"> <br><br>
    Comment: <textarea name= 'Comment' rows="5" cols="40" value="<?php echo (@$_POST['Comment'])?>"></textarea> <br><br>
    Gender: <input type="radio" name="Gender" value="female" checked='NULL'/> Female
            <input type="radio" name="Gender" value="male" checked='NULL'/> Male 
            <input type="radio" name="Gender" value="other" checked='NULL'/> Other <br><br>
    <button type='Submit'>Submit</button> 
 </form>
