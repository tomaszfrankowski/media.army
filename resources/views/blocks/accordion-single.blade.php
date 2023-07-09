{{--
  Title: Single Accordion 
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

<div class="border-b border-b-content flex items-start justify-between accordion--single">
  <div class="relative prose-headings:mt-4 accordion__content" >
    <InnerBlocks />
  </div>
  <div class="control flex-shrink-0">
    <button name="Open/Close" class="flex items-center justify-center accordion__trigger transform transition-all duration-1000 ease-smooth h-10 w-10 mt-4 inline-block">
      <img class="transform rotate-90 m-0" src="@asset('images/chevron-content.svg')" width="9" height="18" />
    </button>
  </div>
</div>