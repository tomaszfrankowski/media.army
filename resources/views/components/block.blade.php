<section {{ $attributes->merge(['class' => 'bg-cover bg-'.$containerBackgroundColor]) }}
  @style(['background-image: url('.$containerBackgroundImage.')' => $containerBackgroundImage])
  >
  @if(!$attributes['noContainer'])
    <div class=" container<?= get_field('container_width') ?><?= get_field('container_height') ?><?= get_field('container_padding') ?>">
  @endif

  {!! $message ?? $slot !!}

  @if(!$attributes['noContainer'])
    </div>
  @endif
</section>
