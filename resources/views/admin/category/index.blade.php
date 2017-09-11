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
	                	@if(!empty($categories))
						@forelse($categories as $category)
							<li>
								<a href="{{ route('category.show',$category->id) }}">{{ $category->name }}</a>
							</li>
							@empty
							<li><b>No data</b></li>
						@endforelse
						@endif	
	                </ul>
	                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Category</button>
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- konten modal-->
							{!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
							<div class="modal-content">
								<!-- heading modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Bagian heading modal</h4>
								</div>
								<!-- body modal -->
								<div class="modal-body">
			                        @include('admin.category._form')
								</div>
								<!-- footer modal -->
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</div>
							{!! Form::close() !!}
						</div>
					</div>

					@if(!empty($products))
		            <section>
		            	<center><h3>Products</h3></center>

		            	<table class="table table-hover">
		            		<thead>
		            			<tr>
		            				<th>Products</th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            		@forelse($products as $product)
		            			<tr>
		            				<td>{{ $product->name }}</td>
		            			</tr>
		            			@empty
		            			<tr>
		            				<td>No Data</td>
		            			</tr>
		            		@endforelse
		            		</tbody>
		            	</table>
		            </section>
		            @endif
                </div>
            </div>

        </div>
    </div>
</div>
	
		
@endsection