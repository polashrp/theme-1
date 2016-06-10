<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
		<?php while( have_posts() ) : the_post(); ?>
			<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01">November 1, 2015</time>
						<a href="#" class="author"><span class="name"><?php ?></span><img src="<?php echo get_template_directory_uri() . '/images/avatar.jpg'; ?>" alt="" /></a>
					</div>
				</header>
				<?php if (has_post_thumbnail()) : ?>
					<a href="#" class="image featured">
						<?php the_post_thumbnail( 'large' ); ?>
					</a>
				<?php endif; ?>
				<div>
					<?php the_excerpt(); ?>
				</div>
				<footer>
					<ul class="actions">
						<li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
					</ul>
					<ul class="stats">
						<li><a href="#">General</a></li>
						<li><a href="#" class="icon fa-heart">28</a></li>
						<li><a href="#" class="icon fa-comment">128</a></li>
					</ul>
				</footer>
			</article>
		<?php endwhile; ?>

		<!-- Pagination -->
		<ul class="actions pagination">
			<li><a href="" class="disabled button big previous">Previous Page</a></li>
			<li><a href="#" class="button big next">Next Page</a></li>
		</ul>
	</div>

<?php get_footer(); ?>