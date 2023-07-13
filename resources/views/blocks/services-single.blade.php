{{--
  Title: Services Single
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

<x-block  containerClass="!static" class="!static border-b border-solid border-content my-4 py-4 last:border-b-0 group">
    <InnerBlocks />
    @if(get_field('image'))
        <img src="{{ get_field('image')['url'] }}" class="m-0 absolute left-[var(--mouse-position-x)] top-[var(--mouse-position-y)] opacity-0 group-hover:opacity-100" />
    @endif
</x-block>


