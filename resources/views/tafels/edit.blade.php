@extends('layouts.app')

@section('content')
    <h1>Tafel Bewerken</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tafels.update', $tafel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $tafel->name) }}" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <a href="{{ route('tafels.index') }}" class="btn btn-secondary">Annuleer</a>
    </form>
@endsection
