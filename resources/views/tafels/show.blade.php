@extends('layouts.app')

@section('content')
    <h1>Tafel Details</h1>

    <p><strong>ID:</strong> {{ $tafel->id }}</p>
    <p><strong>Naam:</strong> {{ $tafel->name }}</p>

    <a href="{{ route('tafels.index') }}" class="btn btn-secondary">Terug naar overzicht</a>
    <a href="{{ route('tafels.edit', $tafel->id) }}" class="btn btn-warning">Bewerk</a>
@endsection
