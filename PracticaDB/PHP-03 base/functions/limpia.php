<?php

function limpia($cadena){
  $cadena = htmlspecialchars($cadena);
  $cadena = strip_tags($cadena);
  $cadena = trim($cadena);
  return $cadena;
}

