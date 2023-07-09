{{--
  Title: Slide
  Description: Single Slide
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: container layout slide
  Mode: preview
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsJsx: true
  SupportsMode: false
  SupportsMultiple: true
  parent: [ 'acf/slider' ],
--}}

{{-- <x-block noContainer class="swiper-slide" style="width: {{ get_field('slide_width') }}"> --}}
  <swiper-slide style="width: {{ get_field('slide_width') }}" data-title="<?= get_field('slide_title') ?>">
    <InnerBlocks />
  </swiper-slide>
{{-- </x-block> --}}