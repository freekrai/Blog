<?php get_header(); ?>

<?php if (is_home()) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts('cat=-461,-683&paged=' . $paged);
} ?>

<?php if (is_home()): ?>
<div id="topbox">
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/avatar.png" />
	<p>This is the personal site of Dan Grossman, web developer and <a href="http://www.awio.com">entrepreneur</a>. I create web applications that 
	help people get the most out of their websites. Check out my <a href="/profile">profile</a>, <a href="/category/portfolio">portfolio</a> and 
	<a href="/category/code">open source code</a>.</p>
	<div style="clear: both"></div>
</div>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

 <?php the_date('F j, Y', '<div class="postdate"><h1>', '</h1></div>'); ?> 

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</div>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1): ?>
<ul class="pager">
	<li class="previous"><?php next_posts_link('&larr; Older posts'); ?></li>
	<li class="next"><?php previous_posts_link('Newer posts &rarr;'); ?></li>
</ul>
<?php endif; ?>

<?php get_footer(); ?>