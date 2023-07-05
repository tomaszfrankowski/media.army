<section {{ $attributes->merge(['class' => 'relative  container-line bg-cover bg-center bg-'.$containerBackgroundColor]) }}
  @style(
    ['background-image: url('.$containerBackgroundImage.')' => $containerBackgroundImage,
    '--container-line-before: var(--color-'. get_field('leading_line_before')['color'] . ')' => get_field('leading_line_before'),
    '--container-line-after: var(--color-'. get_field('leading_line_after')['color'] . ')' => get_field('leading_line_after'),
  ])
  
  >
  @if(!$attributes['noContainer'])
    <div class="container tablet:px-8 px-4 <?= get_field('container_width') ?> <?= get_field('container_height') ?> <?= get_field('container_padding')['top'] ?> <?= get_field('container_padding')['bottom'] ?>">
  @endif

  {!! $message ?? $slot !!}

  @if(!$attributes['noContainer'])
    </div>
  @endif
</section>
