<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Toposervis
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function toposervis_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'toposervis_body_classes' );

// /**
//  * Add a pingback url auto-discovery header for single posts, pages, or attachments.
//  */
// function toposervis_pingback_header() {
// 	if ( is_singular() && pings_open() ) {
// 		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
// 	}
// }
// add_action( 'wp_head', 'toposervis_pingback_header' );

add_action('wp_head', 'display_url_header');
function display_url_header(){
    //Close PHP tags ?>
    <script>
		const ajax = {
			url : "<?=admin_url( 'admin-ajax.php' )?>",
			api : "<?=get_rest_url( null, 'api/' )?>",
		}
	</script>
    <?php //Open PHP tags
}
function img_featured_url( $post_id ){
	$thumbID = get_post_thumbnail_id( $post_id );
	$imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
	return $imgDestacada[0];
}
function assets( $resouce ){ 
	return get_template_directory_uri().'/'.$resouce;
}
function getLogo(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	return $image[0];
}
function mailtrap($phpmailer) {
	$phpmailer->isSMTP();
	$phpmailer->Host = 'smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 2525;
	$phpmailer->Username = '74b07990006b47';
	$phpmailer->Password = '3284dd3f196082';
  }
  
  add_action('phpmailer_init', 'mailtrap');

class plantilla{

	function plantilla($template_file){
		$this->tpl_file = get_template_directory().'/template-parts/' . $template_file . '.php';
	}
	
	function asigna_variables($vars){
		$this->vars= (empty($this->vars)) ? $vars : $this->vars . $vars;
	}
	
	function muestra(){
		if (!($this->fd = @fopen($this->tpl_file, 'r'))) {
			sostenedor_error('error al abrir la plantilla ' . $this->tpl_file);
		} else{
			$this->template_file = fread($this->fd, filesize($this->tpl_file));
			fclose($this->fd);
			$this->mihtml = $this->template_file;
			$this->mihtml = str_replace ("'", "\'", $this->mihtml);
			$this->mihtml = preg_replace('#\{([a-z0-9\-_]*?)\}#is', "' . $\\1 . '", $this->mihtml);
			reset ($this->vars);
			while (list($key, $val) = each($this->vars)) {
				$$key = $val;
			}
			eval("\$this->mihtml = '$this->mihtml';");
			reset ($this->vars);
			while (list($key, $val) = each($this->vars)) {
				unset($$key);
			}
			$this->mihtml=str_replace ("\'", "'", $this->mihtml);
			return $this->mihtml;
		}
	}
}