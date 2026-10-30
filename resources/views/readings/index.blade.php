@extends('layouts.app')

@section('title', 'Readings Home')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Readings</h1>
    <div class="mx-auto max-w-8xl min-h-120 border border-black bg-gray-100 p-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4">
            @foreach ($readings as $reading)
                <x-card :card="$reading" />
            @endforeach
            
        </div>
    </div>
@endsection
