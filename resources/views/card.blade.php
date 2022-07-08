@extends('layouts.base')

@section('title-page')
    Single card
@endsection

@section('main-content')
<main class="main_card">
    <section class="section_card">
        <div class="top_card">
            <div class="container">
                <div class="cont_img">
                    <span class="genre">comic book</span>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <a href="/#" class="gallery">View gallery</a>
                </div>
            </div>
        </div>
        <div class="middle_card">
            <div class="container">
                <div class="row">
                    <div class="col left">
                        <h1>{{$comic['title']}}</h1>
                        <div class="cta">
                            <button class="purchase">
                                <div class="price">
                                    <span>U.S. Price:</span>  {{$comic['price']}}
                                </div>
                                <span class="status">available</span>
                            </button>
                            <button class="availability">Check Availability <i class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                    <div class="col right">
                        <h5>advertisement</h5>
                        <img src="{{asset('img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_card">
            <div class="container">
                <div class="row">
                    <div class="col left">
                        <h4>Talent</h4>
                        <div class="artby">
                            <span>Art by:</span>
                            <p>
                                @foreach($comic['artists'] as $key => $artist) 
                                <a href="/#">{{$artist}}</a>
                                    @if ($key + 1 != count($comic['artists']))
                                    ,
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="writtenby">
                            <span>Written by:</span>
                        </div>
                    </div>
                    <div class="col right"></div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection