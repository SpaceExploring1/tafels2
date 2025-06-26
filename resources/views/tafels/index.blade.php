<!-- resources/views/tafels/index.blade.php -->
<!-- Extends the tafels.app layout, assuming it handles the overall structure -->
@extends('tafels.app')

<!-- Sets the page title to "Tafels Oefenen" -->
@section('title', 'Tafels Oefenen')

<!-- Main content section -->
@section('content')
    <div class="container mt-5 text-center mx-auto" style="max-width: 600px;">
        <!-- Heading with typing animation, styled with Tailwind and inline adjustments -->
        <h1 id="typingText" class="text-4xl text-pink-500 font-bold typing-cursor"></h1>
        <!-- Intro paragraph, initially hidden -->
        <p id="introText" class="text-lg text-green-600 mt-4" style="display: none;">
            Dit is jouw plek om tafels te oefenen. Klik op de knop hieronder om te beginnen!
        </p>
        <!-- Start button, initially hidden, styled with Bootstrap and Tailwind -->
        <a href="{{ url('/tafels') }}" id="startButton" class="btn btn-primary text-xl bg-yellow-400 hover:bg-yellow-500 mt-4" style="display: none;">
            Start met oefenen
        </a>
    </div>
@endsection