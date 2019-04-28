<?php

function validator(){
  $warning = [];

  //como valido el archivo a subir??? consultar en clase

 if ($_POST["nombre"] == ""){
   $warning["nombre"]= "Ooops, faltó tu nombre";
 } else if (strlen($_POST["nombre"]) < 3) {
   $warning["nombre"] = "Parece que a tu nombre le faltan algunas letras...";
 } else if (ctype_alpha($_POST["nombre"])== false){
   $warning["nombre"] = "En el nombre sólo pueden ir letras ;)";
 } else if ($_POST["nombre"] == "nombre"){
   $warning["nombre"]= "Ooops, faltó tu nombre";
 }

 //Si pongo Torre Walsh no me valida el espacio como caracter valido. Ver como cambiarlo

 if ($_POST["apellido"] == ""){
   $warning["apellido"]= "Ooops, faltó tu apellido";
 } else if (strlen($_POST["apellido"]) < 3) {
   $warning["apellido"] = "¿Tu apellido está completo?";
 } else if (ctype_alpha($_POST["apellido"])== false){
   $warning["apellido"] = "En el apellido sólo pueden ir letras ;)";
 } else if ($_POST["apellido"] == "apellido"){
   $warning["apellido"]= "Ooops, faltó tu apellido";
 }

 if ($_POST["password"] == ""){
   $warning["password"]= "Ooops, faltó tu clave";
 } else if (strlen($_POST["password"]) < 8) {
   $warning["password"] = "La contraseña es muy corta, tiene que tener mínimo 8 caracteres";
 }

 if ($_POST["email"] == ""){
   $warning["email"]= "Ooops, faltó tu e-mail";
 } else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
   $warning["email"] = "¿El mail está bien escrito? Parece no ser válido";
 }

 return $warning;
}
