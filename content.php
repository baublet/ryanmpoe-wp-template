<?php $custom_fields = get_post_custom(); ?>
<?php if(get_post_type() == 'fbreport') { ?>
<div class="fbproject-head">
<h1 class="entry-title"><a href="/wordpress/virginia-freedmens-bureau-project/">Virginia Freedmen's Bureau Project</a></h1>
<p><a href="/wordpress/virginia-freedmens-bureau-project/">Back to the Project</a></p>
</div>
<?php } ?>
<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) { ?>
		<div class="entry-meta">
			<?php posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php } ?>
		<?php if(get_post_type() !== 'fbreport') { ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<? } else { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Report sent <?php echo $custom_fields['date'][0]; ?></a></h2>
		<?php } ?>
		<?php if($custom_fields['subtitle'][0]): ?>
		<h2 class="entry-subtitle"><?php echo $custom_fields['subtitle'][0]; ?></h2>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ('post' == get_post_type() && $post->post_excerpt) : // Only display Excerpts if they exist ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php endif; ?>
	<div class="entry-content">
		<?php if('fbreport' == get_post_type()) { ?>
		<div class="letter-date"><?php echo $custom_fields['date'][0]; ?></div>
		<div class="to"><?php echo $custom_fields['to'][0]; ?>,</div>
		<?php } ?>
		<?php the_content(__( 'Continue reading <span class="meta-nav">&rarr;</span>')); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __('Pages:'), 'after' => '</div>' ) ); ?>
		<?php if('fbreport' == get_post_type()) { ?>
		<div class="from"><span class="signoff">Sincerely,</span> <?php echo $custom_fields['from'][0]; ?></div>
		<div class="citation"><?php echo $custom_fields['from'][0]; ?> to <?php echo $custom_fields['to'][0]; ?>, <?php echo $custom_fields['date'][0]; ?>. <em>Records of the Field Offices for the State of Virginia, Bureau of Refugees, Freedmen, and Abandoned Lands, 1865-1872</em>, M1913, Roll <?php echo $custom_fields['citation'][0]; ?>. United States Congress and National Archives and Records Administration Washington, DC (2006).</div>
</div>
		<?php } ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list(__(', '));
				if ($categories_list && is_categorized_blog()) :
			?>
			<span class="categories">
				<?php printf(__( '%1$s'), $categories_list); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list('', __(', '));
				if ( $tags_list ) :
			?>
			<span class="tags">
				<?php printf(__('%1$s'), $tags_list); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
