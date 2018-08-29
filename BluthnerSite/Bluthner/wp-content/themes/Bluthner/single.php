<?php get_header(); ?>
<?php
   if(in_category('piano')){
       get_template_part('single-piano');
   }elseif(in_category('news')) {
       get_template_part('single-news');
   }else{
       get_template_part('single-standard');
    }
?>
<?php get_footer(); ?>
