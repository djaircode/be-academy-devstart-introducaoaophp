<form action="" method="post">
  <input name="numero1" placeholder="Número 1"></br>
  <input name="numero2" placeholder="Número 2">
  <button>Enviar</button>
</form>

<?php 
    if ($_POST){
        echo "Oi ".$_POST['numero1'];
        echo "Oi ".$_POST['numero2'];
    }
?>