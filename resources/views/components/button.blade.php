<a {{ $attributes->merge(['class' => 'button h-12 inline-block relative text-text', 'role'=> 'button']) }}>
  <span class="z-10 relative top-1 text-white !font-normal h6">{!! $slot !!}</span>
  <span role="presentation" class="absolute bg-blend-hard-light top-0 left-0 w-full h-full opacity-50 bg-secondary block w-0 under transition-all ease-smooth duration-1000 ">
    <span class="absolute h-12 w-6 -left-6 overflow-hidden">
        <span class="absolute top-1/2 left-6 block w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 bg-secondary bg-blend-hard-light mix-b rounded-full transition-all ease-smooth duration-1000"></span>
    </span>
    <span class="absolute h-12 w-6 -right-6 overflow-hidden">
        <span class="absolute top-1/2 left-0 block w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 bg-secondary bg-blend-hard-light rounded-full transition-all ease-smooth duration-1000"></span>
    </span>
  </span>
</a>
