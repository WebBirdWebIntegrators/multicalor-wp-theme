<?php if( is_single() && in_category('referenties') ) { ?>
  <?php get_template_part( 'single-references' ); ?>
<?php } elseif( is_single() && in_category('references-fr') ) { ?>
  <?php get_template_part( 'single-references' ); ?>
<?php } elseif( is_single() && in_category('references') ) { ?>
  <?php get_template_part( 'single-references' ); ?>
<?php } else { ?>
  <?php get_template_part( 'single_default' ); ?>
<?php } ?>
