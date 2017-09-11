@extends('layouts.front.master')

@section('content')

	<h3>Cart Items</h3>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Size</th>
			</tr>
		</thead>
		<tbody>
		@foreach($cartItems as $cartItem)
			<tr>
				<td>{{ $cartItem->name }}</td>
				<td>{{ $cartItem->price }}</td>
				<td width="100 px">
					
					{!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
				        {{-- {!! Form::text('qty', {{ $cartItem->qty }}) !!} --}}
				        {{-- {!! Form::submit('create',['class' => 'btn btn-sm btn-default' 'value' => 'ok']) !!} --}}
				        <input name="qty" type="text" value="{{ $cartItem->qty }}">
				        <input type="submit" class="btn btn-sm btn-default" value="OK">
					{!! Form::close() !!}
				</td>
				<td>{{ $cartItem->options->has('size')?$cartItem->options->size:'' }}</td>
			</tr>
		@endforeach
			<tr>
				<td></td>
				<td>Grand Total : $ {{ Cart::total() }}</td>
				<td>Items : {{ Cart::count() }}</td>
			</tr>
		</tbody>
	</table>
	<a href="" class="button">Checkout</a>
@endsection