<div id="sidebar">
	<div class="sidebaritem">
		<a href='http://localhost/development/dummy.html'>Staff Directory</a><BR>
		<hr>
		<h1>Search the Loop</h1><BR>
		<form method="get" id="sb_searchform" action="<?php bloginfo('home'); ?>/"><div class='search-box'>
			<input name="s" id="s" class='search-input' placeholder='Search' type='text' />
			<img onclick="document.getElementById('sb_searchform').submit();" class='search-img' src='<?php bloginfo('template_url'); ?>/img/search.png'>
		</div></form>
		<hr>
		<h1>Post by Caterory</h1><BR>
		<?php wp_dropdown_categories(array('hide_empty' => 0, 'name' => 'cat', 'orderby' => 'name', 'selected' => $category->parent, 'hierarchical' => true, 'show_option_none' => __('Select Category'))); ?>
		<script type="text/javascript">/*  */
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					location.href = "<?php echo site_url(); ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
		</script>
		<BR>
		<hr>
		<h1>Recent Posts</h1>
		<ul>
		<?php wp_get_archives('type=postbypost&limit=3'); ?>
		</ul>
		<hr>
		<h1>Recent Comments</h1><BR>
		<?php 
		foreach(get_comments( array( 'number' => 3)) as $c){
			echo "<a href='".get_permalink($c->comment_post_ID)."/#comment-".$c->comment_ID."'><h2>$c->comment_author</h2>\n";
			echo  "<p>".get_the_title($c->comment_post_ID)."</p></a>\n";
		
		} ?>
	</div>                        
</div>