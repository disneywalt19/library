@extends('template')

@section('title')
    Lista ksiązek
@endsection

@section('content')

<div class="container">
    <table class="table">
    @forelse($booksList as $book)
        <tr>
                <td> {{ $book->name }} </td>
                <td> {{ $book->year }} </td>
                <td> {{ $book->publication_place }} </td>
                <td> <a href="{{ url('/books', [$book->id]) }}">Podgląd</a> </td>
                <td> <a href="{{ url('/books', [$book->id, 'edit']) }}">Edycja</a> </td>
                <td> <a href="{{ url('/books', [$book->id, 'delete']) }}">Usuń</a> </td>
        </tr>
    @empty
        Brak rekordów!
    @endforelse
    
    

    @isset($book)
   
    
        <tr>
                <td>Nazwa ksiązki</td>
                    <td> {{ $book->name }} </td>
        </tr>
        <tr>
                <td>Rok wydania</td>
                    <td> {{ $book->year }} </td>
        </tr>
        <tr>
                <td>Miejsce wydania</td>
                    <td> {{ $book->publication_place }} </td>
        </tr>
        <tr>
                <td>Liczba stron</td>
                <td> {{ $book->pages }} </td>
        </tr>
        <tr>
                <td>Cena</td>
                <td> {{ $book->price }} </td>
        </tr>
            @isset($book->isbn)
                <tr>
                    <td>Numer ISBN</td>
                    <td> {{ $book->isbn->number }} </td>
                </tr>
                <tr>
                    <td>Numer ISBN wydany przez</td>
                    <td> {{ $book->isbn->issued_by }} </td>
                </tr>
                <tr>
                    <td>Data wydania numeru ISBN</td>
                    <td> {{ $book->isbn->issued_on }} </td>
                </tr>
            @endisset


        </tr>
    
    </table>
    @endisset
</div>

@endsection('content')








<!-- @isset($book)
   
    
        <tr>
                <td>Nazwa ksiązki</td>
                    <td> {{ $book->name }} </td>
        </tr>
        <tr>
                <td>Rok wydania</td>
                    <td> {{ $book->year }} </td>
        </tr>
        <tr>
                <td>Miejsce wydania</td>
                    <td> {{ $book->publication_place }} </td>
        </tr>
        <tr>
                <td>Liczba stron</td>
                <td> {{ $book->pages }} </td>
        </tr>
        <tr>
                <td>Cena</td>
                <td> {{ $book->price }} </td>
        </tr>
            @isset($book->isbn)
                <tr>
                    <td>Numer ISBN</td>
                    <td> {{ $book->isbn->number }} </td>
                </tr>
                <tr>
                    <td>Numer ISBN wydany przez</td>
                    <td> {{ $book->isbn->issued_by }} </td>
                </tr>
                <tr>
                    <td>Data wydania numeru ISBN</td>
                    <td> {{ $book->isbn->issued_on }} </td>
                </tr>
            @endisset


        </tr>
    
    </table>
    @endisset
</div>

@endsection('content') -->