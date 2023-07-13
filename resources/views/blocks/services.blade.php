{{--
  Title: Services
  Description: Display services with hover effect
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: container layout padding columns grid divide tabs
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
    array( 'acf/services-single', array(), array() ),
);
$allowed_inner_blocks = ['acf/services-single'];
?>

<x-block class="service-block">
    <InnerBlocks renderAppender="<div>Add Service</div>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="false" orientation="horizontal"/>
</x-block>


