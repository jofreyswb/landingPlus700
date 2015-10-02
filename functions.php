<?php
 if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// фильтр передает переменную $template - путь до файла шаблона. Изменяя этот путь мы изменяем файл шаблона.


/*// функция фильтрации
function my_template( $template ) {

	# аналог второго способа
	// если это страница со слагом portfolio, используем файл шаблона page-portfolio.php
	// используем условный тег is_page()
	if( is_page('wq') ){
		if ( $new_template = locate_template( array( 'page-wq.php' ) ) )
			return $new_template ;
	}

	# шаблон для группы рубрик
	// этот пример будет использовать файл из папки темы tpl_special-cats.php,
	// как шаблон для рубрик с ID 9, названием "Без рубрики" и слагом "php"
	if( is_category( array( 9, 'Без рубрики', 'php') ) ){
		return get_stylesheet_directory() . '/tpl_special-cats.php';
	}

	# шаблон для записи по ID
	// файл шаблона расположен в папке плагина /my-plugin/site-template.php
	global $post;
	if( $post->ID == 12 ){
		return wp_normalize_path( WP_PLUGIN_DIR ) . '/my-plugin/site-template.php';
	}

	# шаблон для страниц произвольного типа "book"
	// предполагается, что файл шаблона book-tpl.php лежит в папке темы
	global $post;
	if( $post->post_type == 'book' ){
		return get_stylesheet_directory() . '/book-tpl.php';
	}

	return $template;

}

add_filter('template_include', 'my_template');*/
?>