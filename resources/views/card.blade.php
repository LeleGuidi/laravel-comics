@extends('layouts.base')

@section('title-page')
    Single card
@endsection

@section('main-content')
<main class="card">
    <section class="section_card">
        <div class="top_card">

        </div>
        <div class="middle_card">
            <img src="{{$comics[0]['thumb']}}" alt="{{$comics[0]['series']}}">
        </div>
        <div class="bottom_card">

        </div>
    </section>

</main>
@endsection