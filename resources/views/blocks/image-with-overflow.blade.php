{{--
  Title: Image with Overflow
  Description: Image with Overflow
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: image overflow
  Mode: preview
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsJsx: true
  SupportsMode: false
  SupportsMultiple: true
--}}

<x-block containerClass="relative tablet:grid grid-cols-12 items-center ">
    <div class="col-span-6 {{ get_field('text_side') == 'left' ? "col-start-1" : "col-start-7" }} row-start-1 z-10">
        <div class="prose bg-background tablet:py-16 pb-4 {{ get_field('text_side') == 'left' ? "tablet:pr-4" : "tablet:pl-4" }}">
            <InnerBlocks />
        </div>
    </div>
    <img src="{{ get_field('image')['url'] }}" class="col-span-8 {{ get_field('text_side') == 'left' ? "col-start-5" : "col-start-1" }} row-start-1"/>
</x-block>