<?php highlight_file( __FILE__ ); ?>
<?php

// Random PHP code snippet!

function create_category_feeds($categories = NULL) {

	global $wpdb, $title, $headcomments;

	if($categories == NULL) {
		$sort_column = 'term_id';
		$query = "SELECT * FROM $wpdb->term_taxonomy 
				  JOIN $wpdb->terms ON ( $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ) 
				  WHERE $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->terms.term_id > 0 AND count > 0 AND parent = 0 
				  ORDER BY $wpdb->terms.name ASC";
		$categories = $wpdb->get_results($query);
	} 

	$catsnum = count($categories);

	foreach ($categories as $category) {
		$link = '<link rel="alternate" type="application/rss+xml" title="';
		$link = $link . $title . ': ' . $category->name;
		$link = $link . '" href="' . get_category_rss_link(0, $category->term_id, $category->name) . '" />';
		echo "\t" . $link . "\n";
	}

	$hcomlink = '<link rel="alternate" type="application/rss+xml" title="';
	$hcomlink = $hcomlink . $title . ': Comments';
	$hcomlink = $hcomlink . '" href="' . get_bloginfo('comments_rss2_url') . '" />' . "\n";
	if($headcomments == TRUE) {
		echo "\t" . $hcomlink;
	}
}

function clb_head() {

	global $authorlinks, $catarchive, $pagelinks;
	if(is_home() | is_date()) {
		create_category_feeds();
	}
	if(is_single()) {
		create_category_feeds(get_the_category());
	}
	if(is_category() | is_search()) {
		if($catarchive == TRUE) {
			create_category_feeds();
		}
		elseif($catarchive == FALSE) {
			create_category_feeds(get_the_category());
		}
	}
	if(is_page()) {
		if($pagelinks == TRUE) {
			create_category_feeds();
		}
		elseif($pagelinks == FALSE) {
			create_category_feeds(get_the_category());
		}
	}
	if(is_author()) {
		if($authorlinks == TRUE) {
			create_category_feeds();
		}
		elseif($authorlinks == FALSE) {
			create_category_feeds(get_the_category());
		}
	}
}
