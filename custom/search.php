<?php
get_header();
?>
<div class="container">
	<main>
		<div>
      <h3>De Zoekresultaten voor: <em class="zoek-term-in-kop"><?php echo get_search_query(); ?></em></h3>
<?php
if(have_posts()) :
	while(have_posts()) : the_post() ?>
			<article class="bericht">
			<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
				<?php the_content() ?>
			</article>




    <?php endwhile;
    else:
    	echo "Er zijn geen berichten gevonden voor de zoek term:<em class='zoek-term-in-kop'>". get_search_query() . "</em>";
    endif;
    ?>
	</div>
  <aside>
		<?php dynamic_sidebar( 'widget_aside' ); ?>
	</aside>
</main>
</div>
<?php
get_footer();
?>
