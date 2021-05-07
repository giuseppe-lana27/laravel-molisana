<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Molisana</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="{{asset('images/marchio-sito-test.png')}}" alt="La Molisna Logo">
                </div>
                <nav class="main-nav">
                    <ul>
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Prodotti</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                {{-- prima sezione pasta lunga --}}
                <section>
                    <h2 class="section-title">Le Lunghe</h2>
                    <div class="cards">
                        @foreach ($lunga as $pasta)
                            <div class="card">
                                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                            </div>
                        @endforeach                        
                    </div>    
                </section>
                {{-- seconda sezione pasta corta --}}
                <section>
                    <h2 class="section-title">Le Corte</h2>
                    <div class="cards">
                        @foreach ($corta as $pasta)
                            <div class="card">
                                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                            </div>
                        @endforeach                        
                    </div>    
                </section>
                {{-- terza sezione pasta cortissima --}}
                <section>
                    <h2 class="section-title">Le Corte</h2>
                    <div class="cards">
                        @foreach ($cortissima as $pasta)
                            <div class="card">
                                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                            </div>
                        @endforeach                        
                    </div>    
                </section>
            </div>            
        </main>        
        <footer></footer>        
    </body>
</html>