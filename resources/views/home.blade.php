@extends('layouts.main')
@section('title')
    Home    
@endsection
@section('content')
    <main>
        <div class="container">
            {{-- prima sezione pasta lunga --}}
            <section>
                <h2 class="section-title">Le Lunghe</h2>
                <div class="cards">
                    @foreach ($lunga as $pasta)
                        <div class="card">
                            <a href="{{route('prodotti', ['id' => $pasta['id']] )}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
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
                            <a href="{{route('prodotti', ['id' => $pasta['id']] )}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
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
                            <a href="{{route('prodotti', ['id' => $pasta['id']] )}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
                        </div>
                    @endforeach                        
                </div>    
            </section>
            {{-- /terza sezione pasta cortissima --}}
        </div>            
    </main> 
@endsection       
       