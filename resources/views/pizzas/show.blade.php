@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <p class="type">{{$pizza->type}}</p>
    <p class="base">{{$pizza->base}}</p>

    @if($pizza->toppings)
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    @endif
    
    <form action="{{route('pizza.destroy',$pizza->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Order Complete</button>
    </form>
</div>

@endsection