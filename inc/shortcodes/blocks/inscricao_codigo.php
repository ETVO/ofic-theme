<?php

function inscricao_codigo($attrs)
{
  $attrs = shortcode_atts(array(), $attrs);

  global $codigo;
  
  ob_start(); // Start HTML buffering
  
  if(!isset($codigo))
    $codigo = 'CÓDIGO INVÁLIDO';

  echo $codigo;

  $output = ob_get_contents(); // collect buffered contents

  ob_end_clean(); // Stop HTML buffering

  return $output; // Render contents
}
