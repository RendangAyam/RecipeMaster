@extends('layouts.app')


@section('content')
    <h1>Recipe</h1>
    <div class="row" style="padding: 8px;">
        @include('recipe.food.food1')
        @include('recipe.food.food2')
       
        @include('recipe.drink.drink1')
        @include('recipe.drink.drink2')
        
    </div>
    <div class="row" style="padding-bottom: 8px;">
        @include('recipe.food.food3')

        @include('recipe.drink.drink3')
    
    </div>
@endsection