<?php
 if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// ������ �������� ���������� $template - ���� �� ����� �������. ������� ���� ���� �� �������� ���� �������.


/*// ������� ����������
function my_template( $template ) {

	# ������ ������� �������
	// ���� ��� �������� �� ������ portfolio, ���������� ���� ������� page-portfolio.php
	// ���������� �������� ��� is_page()
	if( is_page('wq') ){
		if ( $new_template = locate_template( array( 'page-wq.php' ) ) )
			return $new_template ;
	}

	# ������ ��� ������ ������
	// ���� ������ ����� ������������ ���� �� ����� ���� tpl_special-cats.php,
	// ��� ������ ��� ������ � ID 9, ��������� "��� �������" � ������ "php"
	if( is_category( array( 9, '��� �������', 'php') ) ){
		return get_stylesheet_directory() . '/tpl_special-cats.php';
	}

	# ������ ��� ������ �� ID
	// ���� ������� ���������� � ����� ������� /my-plugin/site-template.php
	global $post;
	if( $post->ID == 12 ){
		return wp_normalize_path( WP_PLUGIN_DIR ) . '/my-plugin/site-template.php';
	}

	# ������ ��� ������� ������������� ���� "book"
	// ��������������, ��� ���� ������� book-tpl.php ����� � ����� ����
	global $post;
	if( $post->post_type == 'book' ){
		return get_stylesheet_directory() . '/book-tpl.php';
	}

	return $template;

}

add_filter('template_include', 'my_template');*/
?>