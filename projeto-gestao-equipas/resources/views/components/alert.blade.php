@props([
    'type'=>'info'
])

@php
    $classes = match($type){
        'success'=>'alert alert-success',
        'info'=>'alert alert-info',
        'danger'=>'alert alert-danger',
        'warning'=>'alert alert-warning',
        'default'=>'alert alert-info',
    }
@endphp

<div {{$attributes->merge(['class'=>$classes])}}  role="alert">
    {{$slot}}
</div>
