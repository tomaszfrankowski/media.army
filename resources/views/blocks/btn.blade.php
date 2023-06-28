{{--
  Title: Button
  Description: Narrow your content down
  Category: ototak-gutenberg-blocks
  Icon: admin-comments
  Keywords: button link
  Mode: preview
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsJsx: true
  SupportsMode: false
  SupportsMultiple: true
--}}

<x-btn href="{{ get_field('link')['url'] }}" target="{{ get_field('link')['target'] }}" >
    {{get_field('link')['title']}}
</x-btn>
