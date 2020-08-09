@extends('template')

@section('title')
    Lista ksiązek
@endsection

@section('content')

<div class="container">
    @forelse($booksList as $book)
        Tu będą dane ksiązki!
    @empty
        Brak rekordów!
    @endforelse
    
</div>

@endsection('content')