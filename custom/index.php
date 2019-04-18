<?php
get_header();
     if( have_posts() ) :
     while ( have_posts() ) : the_post()
     ?>
<div class="container">
<a href="<?php the_permalink() ?>">
 <h2><?php the_title(); ?></h2></a>
 <?php the_content() ?>
</div>

 <?php endwhile;
     else :
     echo '<p>Er zijn geen berichten gevonden</p>';
     endif ;
     get_footer();
     ?>
