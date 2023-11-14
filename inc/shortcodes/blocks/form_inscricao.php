<?php

function form_inscricao($attrs)
{
  $attrs = shortcode_atts(array(
    'action' => '/acompanhe-sua-inscricao'
  ), $attrs);

  ob_start(); // Start HTML buffering

?>

<form action="<?= $attrs['action'] ?>" class="form" id="form-inscricao">
  <label for="">Código de Inscrição
    <div class="field-row">
      <input type="text" name="cod" placeholder="OFiC0123456BR">
      <input type="submit" value="consultar">
    </div>
  </label>
</form>

<?php

  $output = ob_get_contents(); // collect buffered contents

  ob_end_clean(); // Stop HTML buffering

  return $output; // Render contents
}
