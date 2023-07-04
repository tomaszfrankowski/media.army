{{--
  Title: Hero
  Description: Hero to be displayed on top of the page
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: container layout padding hero
  Mode: preview
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsJsx: true
  SupportsMode: false
  SupportsMultiple: true
--}}

<x-block class="relative z-40 overflow-hidden">
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[656px] h-[328px]  overflow-hidden mix-blend-hard-light">
    <div class="w-[656px] h-[656px] bg-primary opacity-75 rounded-full"></div> 
    <div class="absolute bottom-0 left-1/2">
      <div class="transform -rotate-90 translate-x-3 origin-bottom-left mb-4  text-white text-sm uppercase">Scroll</div>
      <div class="h-16 w-px bg-white"></div>
    </div>
  </div>
  <InnerBlocks />
</x-block>
<div class="fixed top-0 left-0 w-full h-24 bg-text z-0"></div>
