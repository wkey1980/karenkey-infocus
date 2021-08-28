<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package karenkey-infocus
 */
?>

<?php get_header(); ?>
<h1>404.php</h1>

	<section class="error-404 not-found">
		<h1><?php esc_html_e( 'Error, No Content Found', 'karenkey-infocus' ); ?></h1>
        <a href="<?php echo esc_url( home_url() ); ?>">Go Home!</a>
	</section>

<?php get_footer(); ?>