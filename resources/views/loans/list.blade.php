@extends('template')

@section('title')
    Lista ksiązek
@endsection

@section('content')

<div class="container">
    <table class="table">

<tr>
    <th>Nazwa ksiązki</th>
    <th>Data wypozyczenia</th>
    <th>Data planowanego zwrotu</th>
    <th>Data zwrotu</th>
    <th>Dane klienta</th>
</tr>
    @forelse($loansList as $loan)
<tr>
    <td> {{ $loan->book->name }} </td>
    <td> {{ $loan->loaned_on }} </td>
    <td> {{ $loan->estimated_on }} </td>
    <td> {{ $loan->returned_on }} </td>
    <td> {{ $loan->client }} </td>
</tr>

@isset($book->authors)
<tr>
    <td>Autorzy</td>
    <td>
        <ul>
            @foreach($book->authors as $author)
                <li>
                    {{ $author->lastname }} {{ $author->firstname }}
                </li>
            @endforeach
        </ul>
    </td>
</tr>
@endisset

</tr>

@empty
    Brak rekordów!
@endforelse
</table>

</div>
@endsection('content')