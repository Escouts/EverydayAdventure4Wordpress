<form method="get" id="searchform" class="left" action="<?php bloginfo('url'); ?>/">
<div>
<input type="text" value="Search" value="<?php the_search_query(); ?>" name="s" id="s" onfocus="this.value=''" title="Enter the terms you wish to search for." /><input type="image" src="<?php echo get_option('home'); ?>/wp-content/themes/everydayadventure/images/magnify.gif" id="searchsubmit" />

</div>
</form>