{{--
  Title: Slider
  Description: Display slider
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
    array( 'acf/slide', array(), array() ),
);
$allowed_inner_blocks = ['acf/slide'];
$slider_id = get_field('slider_id') ? get_field('slider_id') : 'slider-' . uniqid();
?>

<x-block>
  @if(get_field('swiper_menu'))
      <div class="container text-center">
        <ul class="<?= $slider_id ?>__navigation-menu mb-16 mx-auto my-0 relative list-none p-0 not-prose text-currentColor px-1 bg-secondary rounded-full inline-flex">
          <div class="walker absolute bg-background rounded-full top-1 h-[calc(100%-8px)] transition-all duration-1000 ease-smooth z-0"></div>
        </ul>
      </div>
  @endif

  <swiper-container
    id="<?= $slider_id ?>"
    loop="<?= get_field('swiper_loop') ?>"
    space-between="<?= get_field('swiper_spaceBetween') ?>"
    slides-per-view="<?= get_field('swiper_slidesPerView') ?>"
    slides-offset-before="<?= get_field('swiper_slidesOffsetBefore') ?>"
    pagination="{{ get_field('pagination') ? "true" : "false" }}"
    scrollbar="{{ get_field('scrollbar') ? "true" : "false" }}"
    navigation="{{ get_field('navigation') ? "true" : "false" }}"
  >
    <InnerBlocks renderAppender="<div>Add Slide</div>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" templateLock="false" orientation="horizontal"/>
  </swiper-container>
</x-block>


<script>
  window.addEventListener("DOMContentLoaded", (event) => {
    const swiperEl = document.querySelector('#<?= $slider_id ?>');
    const slidesOffsetBefore = <?= get_field('swiper_slidesOffsetBefore') ? get_field('swiper_slidesOffsetBefore') : 0 ?> 
    const slidesOffsetAfter = <?= get_field('swiper_slidesOffsetAfter') ? get_field('swiper_slidesOffsetAfter') : 0 ?> 

    if(typeof slidesOffsetBefore == 'string'){
      swiperEl.setAttribute('slides-offset-before', window.ototak.offset[slidesOffsetBefore]);
      window.addEventListener('resize', function(){
        swiperEl.setAttribute('slides-offset-before', window.ototak.offset[slidesOffsetBefore]);
      }, {passive: true})
    }
    if(typeof slidesOffsetAfter == 'string'){
      swiperEl.setAttribute('slides-offset-after', window.ototak.offset[slidesOffsetAfter]);
      window.addEventListener('resize', function(){
        swiperEl.setAttribute('slides-offset-after', window.ototak.offset[slidesOffsetAfter]);
      }, {passive: true})
    }

    @if(get_field('swiper_menu'))
      const navigationMenu = document.querySelector('.<?= $slider_id ?>__navigation-menu');
      const walker = navigationMenu.querySelector('.walker');
      
      swiperEl.querySelectorAll('swiper-slide').forEach(function(slide, index){
        const title = slide.dataset.title;
        const li = document.createElement('li');
        li.classList.add('text-currentColor', 'z-10');
        li.innerHTML = `<a href="#" class="text-content px-16 py-4 inline-block h6 !leading-[32px] !m-0">${title}</a>`;
        
        li.addEventListener('click', function(e){
          e.preventDefault();
          walker.style.left = `${e.target.offsetLeft}px`;
          walker.style.width = `${e.target.offsetWidth}px`;
          
          swiperEl.swiper.slideTo(index);
        })
        navigationMenu.appendChild(li);

        if(index == 0){
          walker.style.left = `${li.offsetLeft}px`;
          walker.style.width = `${li.offsetWidth}px`;
        }
      })

    @endif
  });
</script>