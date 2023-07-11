{{--
  Title: Testimonials
  Description: Testimonials Block
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: testimonials 
  Mode: preview
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsJsx: true
  SupportsMode: false
  SupportsMultiple: true
--}}
<?php
$template = array(
    array( 'acf/testimonial-single', array(), array() ),
);
$allowed_inner_blocks = ['acf/testimonial-single'];
?>

<div class="testimonials max-h-testimonials overflow-hidden">
  <div class="testimonials__wrapper mb-16 columns-2 column-gap[32px] [break-inside:avoid] transform translate-y-[var(--translate-y)] transition-transform ease-linear duration-100">
      <InnerBlocks renderAppender="<div>Add Testimonial</div>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="false" orientation="vertical"/>
  </div>
</div>