@extends('layouts.front.master')
@section('title',"Shirts | List")
@section('content')
    <!-- products listing -->
     <!-- Latest SHirts -->
    <div class="row">
    @forelse($shirts as $shirt)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{url('images',$shirt->image)}}">
                        {{-- {!! Form::image('images',$shirt->image, null, ['width' => '160', 'height' => '160',  'alt' => 'User Image']) !!} --}}
                    </a>
                </div>
                <a href="{{Route('shirt')}}">
                    <h3>
                        {{ $shirt->name }}
                    </h3>
                </a>
                <h5>
                    $ {{ $shirt->price }}
                </h5>
                <p>
                    {{ $shirt->description }}
                </p>
            </div>
        </div>
    @empty
        <h3>No Shirts</h3>    
    @endforelse
    </div>
@endsection