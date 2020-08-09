@extends('template')

@section('title')
    Lista ksiązek
@endsection

@section('content')

<div class="container">
    <table class="table">
    <tr>
        <th>Nazwa ksiązki</th>
        <th>Rok wydania</th>
        <th>Miejsce wydania</th>

    </tr>
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
    
    </table>

    </div>
    @endsection('content')






    