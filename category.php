<?php if( is_category('referenties') ) { ?>
  <?php get_template_part( 'category-references' ); ?>
<?php } elseif( is_category('references-fr') ) { ?>
  <?php get_template_part( 'category-references' ); ?>
<?php } elseif( is_category('references') ) { ?>
  <?php get_template_part( 'category-references' ); ?>
<?php } ?>
