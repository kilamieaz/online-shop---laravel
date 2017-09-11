<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('price', 'Price', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('size', 'Size', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('size', ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categories', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select Category']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Image', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('create',['class' => 'btn btn-primary']) !!}
    </div>   
</div>