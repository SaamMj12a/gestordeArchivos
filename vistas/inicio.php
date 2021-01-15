<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>
<div class="container" background="imagenes/fondo.gif">
  <center>
   <br>
    <h1 style="color: black;">Gestor de archivos </h1>
    <br>
  </center>
  <div class="row">
    <div class="col-sm-4" style="background-color: #FFFFFF">
      <center>
        <img src="../img/sam.jpg" alt="" width="260" height="350" border-radius: 150px >
      </center>
    </div>
    <div class="col-sm-7" style="background-color: #FFFFFF; border: 5px solid pink; text-align: center;">
      <center>
        <h1 style="text-align: center;
    font-family: 'fantasy';
    text-shadow: 10px 5px 5px #F49CF2;">Datos Samara</h1>
      </center>
      <br>
      <label for="concepto"><b>Nombre:</b></label>
      <label for="concepto">Samara Mejía Maya</label>
      <br>
      <label for="tel"><b>Teléfono:</b></label>
      <label for="concepto">5529181359</label>
      <br>
      <label for="fecha"><b>Correo:</b></label>
      <label for="concepto">saammj460@gmail.com</label>
      <br>
      <label for="concepto"><b>Ocupación:</b></label>
      <label for="concepto">Estudiante</label>
      <br>
      <label for="concepto"><b>Hobby:</b></label>
      <label for="concepto">Voleibol</label>
      <br>
      <label for="concepto"><b>Edad</b></label>
      <label for="concepto">23 años</label>
      <br>
      <label for="concepto"><b>Fecha de nacimiento:</b></label>
      <label for="concepto">12/01/1997</label>
      <br>
      <label for="concepto">Entrega de proyecto Final<b></b></label>
      <label for="concepto">18/01/2021</label>
    </div>
  </div>
</div>




<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>