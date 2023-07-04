{{--
  Title: Sales Made Simple
  Description: Custom text to be displayed in the hero section
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

<div class="h-full relative pointer-events-none transform scale-125 hidden">
  <h1 class="text-5xl text-center text-white font-bold h-full flex flex-col justify-center">
    <span>SALES</span>
    <span class="flex justify-center items-end gap-4">
      <div aria-flowto="topnews-1">MADE </div>
      <div class="text-left w-[280px] leading-[26.9px] font-normal text-default">
        <InnerBlocks />
      </div>
    </span>
    <span id="topnews-1">SIMPLE</span>
  </h1>
  <aside class="absolute right-0 top-0 w-8 h-full text-white">
    <div class="absolute transform -translate-x-1/2 -translate-y-1/2 -rotate-90 top-1/2 left-5 h-min w-min whitespace-nowrap flex gap-32">
      <a href="tel:{{ get_field('company_phone_number', 'options') }}">{{ get_field('company_phone_number', 'options') }}</a> 
      <a href="mailto:{{ get_field('company_e-mail_address', 'options') }}">{{ get_field('company_e-mail_address', 'options') }}</a></div>
  </aside>
</div>
