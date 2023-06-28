<header class="fixed w-full text-white z-50 bg-gradient-to-b from-[#0E153032]">
  <div class="container-flat flex justify-between items-center py-8 ">
    <a class="brand w-56 flex items-center gap-8" href="{{ home_url('/') }}">
      <img src="@asset('images/logo_media_army.svg')"/>
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'uppercase nav flex gap-8 tracking-[2px]', 'echo' => false]) !!}
      </nav>
    @endif

    <div class="w-56 flex justify-end items-center gap-2 text-sm">
      <img src="@asset('images/dropdown_arrow.svg')" />PL <img src="@asset('images/globe.svg')" />
    </div>
  </div>
</header>
