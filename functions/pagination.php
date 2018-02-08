<?php 
/**
 * Paginacja numeryczna
 * 
 * @param  string|object $query Obiekt WP_Query, musi być podany dla własnego Query
 */
function teik_pagination($query = '') {

	if( empty( $query ) ) {
		global $wp_query;
	} else {
		$wp_query = $query;
	}
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="pagination__item pagination__item--prev">%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="pagination__item pagination__item--active"' : ' class="pagination__item"';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li class="pagination__item">…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="pagination__item pagination__item--active"' : ' class="pagination__item"';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li class="pagination__item">…</li>' . "\n";

		$class = $paged == $max ? ' class="pagination__item pagination__item--active"' : ' class="pagination__item"';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link('',$wp_query->max_num_pages) )
		printf( '<li class="pagination__item pagination__item--next">%s</li>' . "\n", get_next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>',$wp_query->max_num_pages) );

	echo '</ul>' . "\n";

}
