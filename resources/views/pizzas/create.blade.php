@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label class="labels" for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label class="labels" for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">margarita</option>
            <option value="hawaian">hawaian</option>
            <option value="volcano">volcano</option>
            <option value="veg supreme">veg supreme</option>
        </select>

        <label class="labels" for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="thick">thick</option>
            <option value="thin & crisp">thin and crisp</option>
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
        </select>
        <br/>

        <label>Choose additional toppings:</label>
            <label>
                <input type="checkbox" value="garlic" name="toppings[]">Garlic<br />
            </label>
            <label>
                <input type="checkbox" value="mushrooms" name="toppings[]">Mushrooms<br />
            </label>
            <label>
                <input type="checkbox" value="olives" name="toppings[]">Olives<br />
            </label>
            <label>
                <input type="checkbox" value="peppers" name="toppings[]">Peppers<br />
            </label>
            <input type="submit" value="Order Pizza" name="submit">
    </form>
</div>

@endsection