@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
                <li class="active">Add product</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Add product</h2> 
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('product.store'),
                                    'method' => 'POST',
                                    'files' => 'true',
                                    'class' => 'form-horizontal']) !!}
                        @include('admin.product._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection