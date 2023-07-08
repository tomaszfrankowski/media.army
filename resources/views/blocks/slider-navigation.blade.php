{{--
  Title: Slider Navigation (Arrows)
  Description: Display slider arrows in an external block. Remeber to set the #id of the slider in the block settings.
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

<div class="text-left">
</div>
<div class="flex justify-end w-full gap-4" id="{{ $block['id'] }}">
    <div class="slider__navigation slider__navigation--prev flex justify-center items-center select-none w-12 h-12 rounded-full   rotate-180 bg-secondary">
        <img src="@asset('images/chevron.svg')" width="9" height="18" />
    </div>
    <div class="slider__navigation slider__navigation--next flex justify-center items-center select-none w-12 h-12 rounded-full   bg-primary">
        <img src="@asset('images/chevron.svg')" width="9" height="18" />
    </div>
</div>
      
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const target = document.getElementById('{{ get_field('slider_anchor_id') }}');
    if(target == null) return;

    const navigation = document.getElementById('{{ $block['id'] }}');
    const prev = navigation.querySelector('.slider__navigation--prev');
    const next = navigation.querySelector('.slider__navigation--next');
    prev.addEventListener('click', function () {
      target.swiper.slidePrev();
    }, false);
    
    next.addEventListener('click', function () {
      target.swiper.slideNext();
      prev.classList.add('!bg-primary');
    }, false);
    
  }, false);
</script>