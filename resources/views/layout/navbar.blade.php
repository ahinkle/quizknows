<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <img src="{{ asset('img/quizknows.png') }}" alt="Quiz Knows Logo" width="225" height="50">
        </a>
    </div>

    <div id="navbar" class="navbar-menu">

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="bd-tw-button button is-link" href="{{ url('/stats') }}">
                            <span>
                                View Statistics
                            </span>
                        </a>
                        <a class="bd-tw-button button is-info" data-social-network="Twitter" data-social-action="tweet"
                           target="_blank" href="https://twitter.com/Quiz_Knows">
                            <span class="icon">
                                <i class="fab fa-twitter"></i>
                            </span>
                            <span>
                                Tweet
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>