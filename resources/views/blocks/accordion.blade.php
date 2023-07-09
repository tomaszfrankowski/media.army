{{--
  Title: Accordion
  Description: Accordion Block
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: accordion layout
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
    array( 'acf/accordion-single', array(), array() ),
);
$allowed_inner_blocks = ['acf/accordion-single'];
?>

<x-block class="accordion mb-16">
    <InnerBlocks renderAppender="<div>Add Accordion</div>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="false" orientation="vertical"/>
</x-block>