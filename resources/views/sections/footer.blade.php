

<footer class="relative z-40 overflow-hidden min-h-[368px]">
  <div class="absolute left-1/2 transform -translate-x-1/2 w-[656px] h-[328px]  overflow-hidden">
    <div class="w-[656px] h-[656px] absolute -top-full bg-primary rounded-full"></div> 
    <div class="absolute top-0 left-1/2">
      <div class="h-16 w-px bg-white"></div>
      <div class="transform rotate-90 -translate-x-3 origin-bottom-left mb-16  text-white text-sm uppercase">{{ __('GO UP')}}</div>
    </div>
  </div>

  <div class="container px-4 md:pt-8 max-w-screen-default flex justify-between mt-44">
    
      @if (has_nav_menu('footer_left'))
        <nav id="header-menu" class="w-1/3 group relative" aria-label="{{ wp_get_nav_menu_name('footer_left') }}" style="--menu-item-position: 43px;">
          {!! wp_nav_menu([
            'theme_location' => 'footer_left',
            'menu_class' => 'uppercase nav flex-row hidden tablet:flex',
            'item_class' => 'px-4 py-8 inline-block',
            'echo' => false
            ]) !!}
        </nav>
      @endif
      <a class="brand w-1/3 z-20 flex items-center justify-center" href="{{ home_url('/') }}">
        <img src="@asset('images/logo_media_army.svg')"/>
      </a>
    
      @if (has_nav_menu('footer_right'))
        <nav id="header-menu" class="w-1/3 group relative" aria-label="{{ wp_get_nav_menu_name('footer_right') }}" style="--menu-item-position: 43px;">
          {!! wp_nav_menu([
            'theme_location' => 'footer_right',
            'menu_class' => 'uppercase nav flex-row justify-end hidden tablet:flex',
            'item_class' => 'px-4 py-8 inline-block',
            'echo' => false
            ]) !!}
        </nav>
      @endif
  </div>
</footer>