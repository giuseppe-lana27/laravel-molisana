<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Molisana</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('parts.header')
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
                {{-- /prima sezione pasta lunga --}}
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
                {{-- /seconda sezione pasta corta --}}
                {{-- terza sezione pasta cortissima --}}
                <section>
                    <h2 class="section-title">Le Cortissime</h2>
                    <div class="cards">
                        @foreach ($cortissima as $pasta)
                            <div class="card">
                                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                            </div>
                        @endforeach                        
                    </div>    
                </section>
                {{-- /terza sezione pasta cortissima --}}
            </div>            
        </main>        
        <footer></footer>        
    </body>
</html>