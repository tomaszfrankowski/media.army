{{--
  Title: Single Testimonial 
  Description: Testominial Block
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: testimonial layout
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
    [ 'core/heading',  ['placeholder' => 'Name', 'level' => 3, 'className' => 'order-2 h6 text-primary']],
    [ 'core/paragraph', [ 'placeholder' => 'Testimonial', 'className' => 'order-1' ] ],
    [ 'core/paragraph',  ['placeholder' => 'Company', 'className' => 'order-3 opacity-50 mb-0']],
);
?>

<div class="testimonials__single w-full min-w-fit bg-white mb-4 flex flex-col p-8 rounded-testimonial shadow-md block [break-inside:avoid] tablet:first-of-type:mt-40">
    <InnerBlocks renderAppender="<div>Add Testimonial</div>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="all" orientation="vertical"/>
</div>