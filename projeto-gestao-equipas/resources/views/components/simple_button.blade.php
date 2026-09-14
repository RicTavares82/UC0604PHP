
@props([
    'class'=>'btn-ghost-primary',
    'name'=>'Vitor Custódio',
    'value'=>45

])

<button class="btn {{$class}} my_button">
  {{$slot}}
    <p>{{$name}}</p>
    <p>{{$value}}</p>
</button>
