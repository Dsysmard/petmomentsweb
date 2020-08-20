@extends('layouts.app')

@section('content')
	<div class="big-padding text-center blue-grey white-text ">
	<h1>Tu Carrito de Compras</h1>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Produto</td>
					<td>Precio</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{$product->title}}</td>
					<td>${{$product->pricing / 100}}</td>
				</tr>
				@endforeach

				<tr>
					<td>Total</td>
					<td>$ {{$total / 100}}</td>
				</tr>

			</tbody>
		</table>
		<div class="text-right">
			@include("shopping_carts.form")
		</div>
	</div>
@endsection