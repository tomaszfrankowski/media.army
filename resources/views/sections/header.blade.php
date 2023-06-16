<header class="container-flat flex justify-between items-center py-8">
  <a class="brand flex items-center gap-8" href="{{ home_url('/') }}">
    <h1 class="text-2xl tracking-widest font-extralight uppercase">{!! $siteName !!}</h1><p class="uppercase mb-0">{{ get_bloginfo('description')}}</p>
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex gap-8', 'echo' => false]) !!}
    </nav>
  @endif
</header>
