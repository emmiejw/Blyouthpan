<style>
    .carousel-item {
        position: absolute;
        opacity: 0;
        transition: opacity 0.6s ease-out;
        width: 100%;
    }

    .carousel-open:checked + .carousel-item {
        position: relative;
        opacity: 1;
    }

    .carousel-control {
        display: none;
    }

    .carousel-open:checked ~ .carousel-control {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin-bottom: 0;
        padding: 0px;
        font-size: 20px;
        position: absolute;
        bottom: 0%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    .carousel-indicators li {
        display: inline-block;
        margin-right: 0.5rem;
    }

    .carousel-bullet {
        cursor: pointer;
        text-5xl;
        color: goldenrod;
        transition: color 0.3s ease;
    }

    .carousel-bullet:hover {
        color: darkgoldenrod;
    }

    .carousel-open:checked ~ .carousel-control-prev {
        display: block;
    }

    .carousel-open:checked ~ .carousel-control-next {
        display: block;
    }
</style>

<section>
    <div class="carousel relative rounded overflow-hidden shadow-xl">
        <div class="carousel-inner relative overflow-hidden w-full">

            <!-- Slide 1 -->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <div class="card">
                    <div class="card-body p-10 m-6 bg-white text-blue-700 rounded-lg">
                        @include('partials.left-quote')
                        I brought my Son in 2022, to see if he would enjoy and cope well playing in his first team. Within 2 weeks my youngest had joined and in 2023 I started coaching, and I am just about to start my level one coaching badge. This is what the team does to you, its so welcoming and inviting, no matter your ability, your personality or anything like that, anyone and everyone is made to feel very welcome. This is a testament to Josh, Dave and James for the culture and welcoming nature of the Club, and I cannot wait for the new season to start!
                        @include('partials.right-quote')
                        Gary Bailey - Parent & trainee coach
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <div class="card">
                    <div class="card-body p-10 m-6 bg-white text-blue-700 rounded-lg">
                        @include('partials.left-quote')
                        My son joined in January 2024. He has always been a nervous lad around team sports and previously had found the idea of playing football too daunting. He is really coming out of his shell with the support from Dave and Josh. He also really enjoys it when one of the older, more experienced players helps him with his skills. Everyone is so friendly and supportive. Roll on the new season :)
                        @include('partials.right-quote')
                        Emily Wallace - Parent
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <div class="card">
                    <div class="card-body p-10 m-6 bg-white text-blue-700 rounded-lg">
                        @include('partials.left-quote')
                        This club has made my children grow in confidence both on and off the pitch! The friendly coaches find inventive ways to teach skills to children that learn differently. Match days are good fun and the players are motivated by knowing at the end of the day someone gets trophy for "Player of the day", which is such a nice touch.
                        @include('partials.right-quote')
                        Parent
                    </div>
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet mt-3">1</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet mt-3">2</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet mt-3">3</label>
                </li>
            </ol>
        </div>
    </div>
</section>
