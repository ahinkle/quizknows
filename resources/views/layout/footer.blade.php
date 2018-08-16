<footer class="footer notification">

    <div class="content has-text-centered">
        <div class="level is-mobile">
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Tweets</p>
                    <p class="title">3,456</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Following</p>
                    <p class="title">123</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Followers</p>
                    <p class="title">456K</p>
                </div>
            </div>
        </div>
        <br>
        <p>
            <img src="{{ asset('img/quizknows.png') }}" alt="Quiz Knows Logo" width="200" height="50">
            <br><br>
            <strong>Quiz Knows</strong> by
            <a href="https://github.com/ahinkle">Andy Hinkle</a>,
            <a href="https://github.com/DaltonMcCleery">Dalton McCleery</a>,
            <a href="https://twitter.com/samkuban">and Sam Kuban</a>.
        </p>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('additional-scripts')