<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<?php $this->load_parts(array('head')) ?>
<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">
<?php $this->load_parts( array( 'header-bar' ) ); ?>
<article class="amp-wp-article wp-ampify-<?php echo $this->post->post_type ?>-content"> 
	<?php if('post' === $this->post->post_type ){ ?>
	<header class="amp-wp-article-header">
		<h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
		<?php $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-author', 'meta-time' ) ) ); ?>
	</header>
	<?php $this->load_parts( array( 'featured-image' ) ); ?>
	<?php } ?>
	<div class="amp-wp-article-content">
		<?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
	</div>
	<?php if('post' === $this->post->post_type ){ ?>
	<footer class="amp-wp-article-footer">
		<?php $this->load_parts( apply_filters( 'amp_post_article_footer_meta', array( 'meta-taxonomy', 'meta-comments-link' ) ) ); ?>
	</footer>
	<?php } ?>
</article>
<?php $this->load_parts( array( 'footer' ) ); ?>
<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>
