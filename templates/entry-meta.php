
<p class="byline author vcard text-muted">
	<?php echo __('&mdash;', 'roots'); ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><strong><?php echo get_the_author(); ?></strong></a>
	<time class="published pull-right" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
</p>

