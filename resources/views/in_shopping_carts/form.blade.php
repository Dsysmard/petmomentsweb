{!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', 'class' => 'add-to-cart inline-block']) !!}

	<input type="hidden" name="product_id" value="{{$product->id}}"></input>
	<input type="submit" value="Agregar al Carrito" class="btn btn-info"></input>

{!! Form::close() !!}