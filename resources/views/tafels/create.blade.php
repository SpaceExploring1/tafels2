@extends('layouts.app')

@section('content')
    <h1>Nieuwe Tafel Aanmaken</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tafels.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Opslaan</button>
        <a href="{{ route('tafels.index') }}" class="btn btn-secondary">Annuleer</a>
    </form>
@endsection
