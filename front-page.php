<?php wp_head(); ?>


<?php get_header(); ?>






<!--Partie gauche bandeau-->

<div id="container-top">

<article id="front-top-left">

	<img class="image top-image" src="<?php echo get_field('bandeau_image_g')['sizes']['my-custom-size']; ?>">

	<article class="top-article-gauche">

	<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>

	<h3 class="sous-titre"><?php the_field('bandeau_survol_g')['titre'] ?></h3>

	<?php
	$group = get_field('bandeau_btn_g');

	if($group['title']) :

	$url = $group['url'];
	$target = 'target="_blank" rel="noopener"';

	if( $group['choice'] == 'pagelink' ) {
	$url = $group['page_link'];
	$target = '';
	} ?>

	<a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
	<div class="icon-container">
	<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg"/>
	</div>
	<p><?php echo $group['title']; ?></p>
	</a>

	<?php endif; ?>
</article>

</article>

<!--Partie droite bandeau-->

<article id="front-top-right">

<img class="image top-image" src="<?php echo get_field('bandeau_image_d')['sizes']['my-custom-size']; ?>">
		

	<article class="top-article-droit">
		<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
		<h3 class="sous-titre"><?php the_field('bandeau_survol_d')['titre'] ?></h3>

		<?php
		$group = get_field('bandeau_btn_d');

		if($group['title']) :

		$url = $group['url'];
		$target = 'target="_blank" rel="noopener"';

		if( $group['choice'] == 'pagelink' ) {
		$url = $group['page_link'];
		$target = '';
		} ?>

		<a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
		<div class="icon-container">
		<img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg"/>
		</div>
		<p><?php echo $group['title']; ?></p>
		</a>
	
	<?php endif; ?>
	</article>

</article>

</div>


<?php get_footer(); ?>