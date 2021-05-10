<header>
    <div class="container">
        <div class="logo">
            <img src="{{asset('images/marchio-sito-test.png')}}" alt="La Molisna Logo">
        </div>
        <nav class="main-nav">
            <ul>
                <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' :''}}">
                    <a href="{{route('homepage')}}">Home</a>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'prodotti' ? 'active' :''}}">
                    <a href="{{route('prodotti')}}">Prodotti</a>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' :''}}">
                    <a href="{{route('news')}}">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>