@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
                <li class="active">List</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Product</h2> 
                </div>

                <div class="panel-body">
	                <ul>
	                	@forelse($products as $product)
		                	<li>
		                		<h4>Name of Product : {{ $product->name }}</h4>
		                	</li>	
		                	@empty
		                		<h3>No products</h3>
		                @endforelse
	                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection