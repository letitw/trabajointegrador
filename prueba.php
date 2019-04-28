<?php

  require_once ("validator.php");
  $mensajes = [];
  $mantengoNombre = "";
  $mantengoApellido = "";
  $mantengoEmail="";

      if ($_POST){
       $mensajes = validador();

        if (count($mensajes) == 0) {
          header("location:home.html");exit;
        }
        $mantengoNombre = $_POST["nombre"];
        $mantengoApellido = $_POST["apellido"];
        $mantengoEmail = $_POST["email"];
    }
 ?>
<ul>
  <?php foreach ($mensajes as $error): ?>
    <li><?=$error?></li>
  <?php endforeach; ?>
</ul>

<div class="caja-registro">
    <form class="" action="registro.php" method="POST">
      <div class="texto-registro">
        <label for="nombre"></label>
        <?php if (isset($mensajes["nombre"])):?>
        <input id="nombre" type="text" name="nombre" value="<?=$mantengoNombre?>" placeholder="Nombre">
            <p style ="color:red;font-size:8px;"><?=$errores["nombre"]?></p>
        <?php endif;?>
      </div>
      <div class="texto-registro">
        <label for="apellido"></label>
        <?php if (isset($mensajes["apellido"])): ?>
        <input id="apellido" type="text" name="apellido" value="<?=$mantengoApellido?>" placeholder="Apellido">
            <p style ="color:red;font-size:8px;"><?=$errores["apellido"]?></p>
        <?php endif;?>
      </div>
      <div class="texto-registro">
        <label for="email"></label>
        <?php if (isset($mensajes["email"])): ?>
        <input id="email" type="email" name="email" value="<?=$mantengoEmail?>" placeholder="Email" required>
            <p style ="color:red;font-size:8px;"><?=$errores["email"]?></p>
        <?php endif;?>
      </div>
      <div class="texto-registro">
        <label for="pass"></label>
        <?php if (isset($mensajes["password"])): ?>
        <input id="pass" type="password" name="pass" value="" placeholder="Contraseña">
            <p style ="color:red;font-size:8px;"><?=$errores["password"]?></p>
        <?php endif;?>
      </div>
      <div class="texto-registro">
        <label for="pais">¿De dónde nos visitas?</label>
        <select class="" name="pais" id="pais">
            <option value="ar">Argentina</option>
            <option value="br">Brasil</option>
            <option value="bo">Bolivia</option>
            <option value="ch">Chile</option>
            <option value="co">Colombia</option>
            <option value="ec">Ecuador</option>
            <option value="py">Paraguay</option>
            <option value="pe">Peru</option>
            <option value="uy">Uruguay</option>
            <option value="ot">Otro</option>
        </select>
      </div>
      <div class="texto-checkbox">
        <input id=mailing type="checkbox" name="mailing" value="si">
        <label for="mailing">Quiero que me envien ofertas por mail!</label>
      </div>
    <div class="">
      <button type="submit" name="button">REGISTRAME</button>
    </div>
</div>

</form>
