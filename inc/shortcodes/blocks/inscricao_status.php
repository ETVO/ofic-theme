<?php

function inscricao_status($attrs)
{
  $attrs = shortcode_atts(array(), $attrs);

  global $status;

  ob_start(); // Start HTML buffering

  if(!isset($status) || $status == '???')
    $status = 'Não encontrado';

  $icon_src = THEME_IMG_URI;
  

  switch($status) {
    case 'Pendente':
      $class = 'pendente';
      $icon_src .= 'info.svg';
      break;
    case 'Aprovado':
      $class = 'aprovado';
      $icon_src .= 'check.svg';
      break;
    case 'Não Classificado':
      $class = 'n-c';
      $icon_src .= 'x.svg';
      break;
    default:
      $class = 'not-found';
      $icon_src .= 'x.svg';
      break;
  }

?>

  <div class="status-bar <?= $class ?>">
    <div class="icon">
      <img src="<?= $icon_src; ?>">
    </div>
    <div class="label">
      <?= $status; ?>
    </div>
  </div>

<?php

  $output = ob_get_contents(); // collect buffered contents

  ob_end_clean(); // Stop HTML buffering

  return $output; // Render contents
}
