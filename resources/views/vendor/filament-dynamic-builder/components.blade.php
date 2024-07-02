@extends('layouts.app')

@section('content')
    <div class="page-container">
        @foreach($components as $component)
            @if ($component)
                @include($component->view(), $component->attributes())
            @endif
        @endforeach
    </div>
@endsection
