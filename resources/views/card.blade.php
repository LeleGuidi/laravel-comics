@extends('layouts.base')

@section('title-page')
    Single card
@endsection

@section('main-content')
<main class="main_card">
    <section class="section_card">
        <div class="top_card">

        </div>
        <div class="middle_card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        </div>
        <div class="bottom_card">

        </div>
    </section>

</main>
@endsection