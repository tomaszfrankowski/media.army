@php($tag = "a")
@if(is_admin()) @php($tag = "div") @endif

<{{$tag}} {{ $attributes->merge(['class' => 'btn no-underline h-12 block relative mx-auto tablet:mx-6 tablet:inline-block max-w-max	 text-'. get_field("text_color") .' hover:text-'.get_field("text_color_hover"), 'role'=> 'button']) }}>
  <span class="z-10 relative top-1 !font-normal h6 transition-colors duration-1000 ease-smooth">{!! $slot !!}</span>
  <span role="presentation" class="absolute bg-blend-hard-light top-0 left-0 w-full h-full opacity-50 bg-{{ get_field('dot_color') }} block w-0 under transition-all ease-smooth duration-1000 ">
    <span class="absolute h-12 w-6 -left-6 overflow-hidden">
        <span class="absolute top-1/2 left-6 block w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 bg-{{ get_field('dot_color') }} bg-blend-hard-light mix-b rounded-full transition-all ease-smooth duration-1000"></span>
    </span>
    <span class="absolute h-12 w-6 -right-6 overflow-hidden">
        <span class="absolute top-1/2 left-0 block w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 bg-{{ get_field('dot_color') }} bg-blend-hard-light rounded-full transition-all ease-smooth duration-1000"></span>
    </span>
  </span>
</{{$tag}}>
