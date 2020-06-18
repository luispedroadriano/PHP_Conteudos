
<form>
<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">
</form>

<?php
if(isset($_GET)){
    foreach ($_GET as $key => $value){
        echo "Campo: " . $key . "<br>";
        echo "Valor: " . $value;
        echo "<hr>";
    }
}


?>