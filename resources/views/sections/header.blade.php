<header class="fixed w-full text-white z-50 bg-gradient-to-b from-[#0E153032]">
  <div class="container max-w-screen-default px-4 tablet:px-8 flex justify-between items-center ">
    <a class="brand w-56 h-20 tablet:h-auto flex items-center gap-8" href="{{ home_url('/') }}">
      <img src="@asset('images/logo_media_army.svg')"/>
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav id="header-menu" class="nav-primary group relative" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}" style="--menu-item-position: 43px;">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'uppercase nav flex-row hidden tracking-[2px] tablet:flex',
          'item_class' => 'px-4 py-8 inline-block',
          'echo' => false
          ]) !!}
        <div class="hidden tablet:block absolute bottom-5 w-full">
          <div id="menu-walker" class="absolute -left-1 w-2 h-2 pointer-events-none group-hover:bg-white transform translate-x-[var(--menu-item-position)] rounded-full bg-primary transition-all duration-1000 ease-smooth"></div>
        </div>
      </nav>
    @endif

    <div  class="w-56 tablet:flex justify-end group hidden ">
      <div id="menu-language-container" class="group-hover:after:opacity-100 after:transition-all after:duration-1000 after:ease-smooth group-hover:text-content relative px-2 py-2 after:h-24 after:absolute after:-top-2 text-white after:opacity-0 after:-z-10 after:w-20 after:transform after:translate-x-3 after:px-4 after:py-4 after:rounded-lg after:bg-secondary inline-block flex justify-end items-center text-sm">
        <svg width="4" height="3" viewBox="0 0 4 3" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path   d="M2 3L0.267949 3.26266e-07L3.73205 2.34249e-08L2 3Z" fill="currentColor"/>
        </svg>
        <div class="relative w-5 ml-2 mr-1 z-10">
          {!! wp_nav_menu([
            'theme_location' => 'language',
            'menu_class' => 'uppercase flex flex-col absolute top-0 transform -translate-x-4 -translate-y-3 group-hover:text-content', 
            'item_class' => 'px-4 hover:text-primary transition-all duration-1000 ease-smooth',
            'echo' => false
          ]) !!}
        </div>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.33337 8C1.33337 11.682 4.31804 14.6667 8.00004 14.6667C11.682 14.6667 14.6667 11.682 14.6667 8C14.6667 4.318 11.682 1.33333 8.00004 1.33333C4.31804 1.33333 1.33337 4.318 1.33337 8Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.66675 1.36667C8.66675 1.36667 10.6668 4 10.6668 8C10.6668 12 8.66675 14.6333 8.66675 14.6333M7.33342 14.6333C7.33342 14.6333 5.33342 12 5.33342 8C5.33342 4 7.33342 1.36667 7.33342 1.36667M1.75342 10.3333H14.2468M1.75342 5.66667H14.2468" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>

      </div>
    </div>

    <div class="flex tablet:hidden p-5 transform translate-x-5">
      =
    </div>
  </div>
</header>
