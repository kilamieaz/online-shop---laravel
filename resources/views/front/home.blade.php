@extends('layouts.front.master')
@section('content')
           <section class="img text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to <b>IT</b>STORE Store
                </strong>
            </h2>
            <br>
            <a href="{{url('/shirts')}}"><button class="button large">Check out My Shirts</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            <b>IT</b>STORE Latest Shirts
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{ route('cart.edit',$shirt->id) }}"class="button expanded add-to-cart">
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
            @endforeach
        @empty
            <h3>No Shirts</h3>   
        @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection