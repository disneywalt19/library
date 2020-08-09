@extends('template')

@section('title')
    Lista ksiązek
@endsection

@section('content')

<div class="container">
    @isset($book)
    <table class="table">
    
        <tr>
            <td>Nazwa ksiązki</td>
            <td> {{ $book->name }} </td>
        </tr>

        <tr>
            <td>Rok wydania</td>
            <td> {{ $book->year }} </td>
        </tr>

        <tr>
            <td>Liczb stron</td>
            <td> {{ $book->pages }} </td>
        </tr>

        <tr>
            <td>Cena</td>
            <td> {{ $book->price }} </td>
        </tr>
    
    </table>
    @endisset
</div>

@endsection('content')