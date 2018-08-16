@extends('master')
@section('content')
    <div class="hero-body"></div>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child notification is-info">
                <div class="content">
                    <quiz-content>
                        <b-message type="is-warning" has-icon>
                            Loading Quiz...
                        </b-message>
                    </quiz-content>
                </div>
            </article>
        </div>
    </div>
    <div class="hero-body"></div>
@endsection