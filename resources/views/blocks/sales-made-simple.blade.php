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

<div class="h-full relative pointer-events-none transform">
  <h1 class="text-4xl tablet:text-5xl text-center text-white font-bold h-full flex flex-col justify-center items-start tablet:items-center">
    <span class="tablet:hidden">SALES</span>
    <span class="flex justify-center items-end gap-4 tablet:hidden">MADE</span>
    <span class="tablet:hidden">SIMPLE</span>


    <span class="hidden tablet:block">SALES</span>
    <span class="flex justify-center items-end gap-4">
      <div aria-flowto="topnews-1" class="hidden tablet:block">MADE </div>
      <div class="text-left w-full tablet:w-[280px] leading-[32px] tablet:transform tablet:translate-y-1 font-normal text-default">
        <InnerBlocks />
      </div>
    </span>
    <span id="topnews-1" class="hidden tablet:block">SIMPLE</span>

  </h1>
  <aside class="absolute w-full top-0 left-0 h-full text-white flex items-center">
    <div class="transform -rotate-90 -translate-y-1/2 translate-x-1/2 origin-center whitespace-nowrap inline-flex gap-32 justify-start absolute right-2 items-center">
      <a href="tel:{{ get_field('company_phone_number', 'options') }}">{{ get_field('company_phone_number', 'options') }}</a> 
      <a href="mailto:{{ get_field('company_e-mail_address', 'options') }}">{{ get_field('company_e-mail_address', 'options') }}</a></div>
  </aside>
</div>
