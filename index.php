<?php get_header(); ?>
<body>
<div class="warp">

<!-- main -->
<div class="main">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<!-- section -->

<section>
	<h4><?php the_title(); ?></h4>
		<?php the_content(); ?>

	<a href="#" class="read-more">Read More...</a>
</section>
<!-- /section -->

<?php endwhile; ?>
<?php endif; ?>




</div>
<!-- /main -->

</div>
<div class="more">
<?php posts_nav_link(' ', ('Prev'), ('Next')); ?>
</div>
<?php get_footer(); ?>