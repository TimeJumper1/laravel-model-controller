<h1>Sono la lista dei film</h1>

@foreach ($movies as $movie)
    <div >
        <div>Titolo {{ $movie->title }}</div>
        <div>titolo originale {{ $movie->original_title }}</div>
        <div> lingua originale{{ $movie->nationality }}</div>
        <div>anno di uscita {{ $movie->date}}</div>
        <div>voto {{ $movie->vote }}</div>
    </div>
@endforeach
