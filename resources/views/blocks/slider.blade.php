{{--
  Title: Slider
  Description: Display slider
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: container layout padding columns grid divide
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
    array( 'acf/slide', array(), array(
        
    ) ),
);
$allowed_inner_blocks = ['acf/slide'];
?>

<x-block noContainer class="slider swiper">
    <div class="swiper-wrapper">
      <InnerBlocks renderAppender="<div>Add Slide</div>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="false" orientation="vertical"/>
    </div>
    @if(get_field('scrollbar'))
      <div class="swiper-scrollbar"></div>
    @endif
    <div class="flex">
      @if(get_field('pagination'))
        <div class="swiper-pagination"></div>
      @endif
      @if(get_field('navigation'))
        <div class="flex justify-end w-full">
          <div class="slider__navigation slider__navigation--prev rotate-180 px-4">
            <img src="@asset('images/chevron.svg')" />
          </div>
          <div class="slider__navigation slider__navigation--next px-4">
            <img src="@asset('images/chevron.svg')" />
          </div>
        </div>
      @endif
    </div>
</x-block>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.slider', {
      direction: 'horizontal',
      loop: <?= get_field('swiper_loop') ?>,
      spaceBetween: <?= get_field('swiper_spaceBetween') ? get_field('swiper_spaceBetween') : '0' ?>,
      slidesPerView: <?= get_field('swiper_slidesPerView') ? get_field('swiper_slidesPerView') : '1' ?>,
      slidesOffsetBefore: function () {
        const windowWidth = document.body.getBoundingClientRect().width
        let offset = <?= get_field('swiper_slidesOffsetBefore') ? get_field('swiper_slidesOffsetBefore') : 0 ?>;
        if(offset == 'containerDefault'){
          offset = (windowWidth - 1328 + 64 ) / 2
        }else if(offset == 'containerNarrow'){
          offset = (windowWidth - 800 + 64 ) / 2
        }
        return (offset > 32 ? offset : 32);
      },
      slidesOffsetAfter: function () {
        const windowWidth = document.body.getBoundingClientRect().width
        if(windowWidth < 800) return 16
        let offset = <?= get_field('swiper_slidesOffsetAfter') ? get_field('swiper_slidesOffsetAfter') : 0 ?>;
        if(offset == 'containerDefault'){
          offset = (windowWidth - 1328 + 64 ) / 2
        }else if(offset == 'containerNarrow'){
          offset = (windowWidth - 800 + 64 ) / 2
        }
        return (offset > 32 ? offset : 32);
      },
      pagination: <?= get_field('pagination') ? "{el: '.swiper-pagination', type: '". get_field("type") ."'}" : 'false' ?>,
      navigation: <?= get_field('navigation') ? "{nextEl: '.slider__navigation--next', prevEl: '.slider__navigation--prev'}" : 'false' ?>,
      scrollbar: <?= get_field('scrollbar') ?  "{el: '.swiper-scrollbar'}" : 'false' ?>,
    })
  }, false);
</script>