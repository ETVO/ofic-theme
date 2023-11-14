<?php

$nome; $codigo; $status;
function inscricao_load($attrs)
{
  global $nome, $codigo, $status;
  $attrs = shortcode_atts(array(), $attrs);

  if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];

    $args = array(
      'posts_per_page'    => 1,
      'post_type'     => 'inscricao',
      'meta_key'      => 'codigo',
      'meta_value'    => $cod
    );

    $query = new WP_Query($args);

    if($query->have_posts()) {
      $query->the_post();
      $inscricao = get_post( get_the_ID() );
      $nome = $inscricao->post_title;
      $codigo = get_field('codigo', $inscricao->ID) ?? '???';
      $status = get_field('status', $inscricao->ID) ?? '???';
    }
  }
}
