<?php

function inscricao_nome($attrs)
{
  $attrs = shortcode_atts(array(), $attrs);

  global $nome;
  
  ob_start(); // Start HTML buffering
  
  if(!isset($nome))
    $nome = 'NÃO ENCONTRADO';

  echo $nome;

  $output = ob_get_contents(); // collect buffered contents

  ob_end_clean(); // Stop HTML buffering

  return $output; // Render contents
}
