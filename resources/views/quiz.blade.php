@extends('master')
@section('content')
    <div class="hero-body"></div>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child notification is-info">
                <div class="content">
                    <p class="title has-text-centered">Title</p>
                    <quiz-content></quiz-content>
                </div>
            </article>
        </div>
    </div>
    <div class="hero-body"></div>
@endsection