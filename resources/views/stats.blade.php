@extends('master')
@section('content')
    <div class="hero-body"></div>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child notification is-link">
                <div class="content">
                    <statistics>
                        <b-message type="is-warning" has-icon>
                            Loading Stats...
                        </b-message>
                    </statistics>
                </div>
            </article>
        </div>
    </div>
@endsection