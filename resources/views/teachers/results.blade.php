@extends('layouts.main')

@section('title', 'Results | ' . config('app.name'))

@section('content')

    <div class="page-wrapper">
        @livewire('teachers.results')
    </div>

@endsection
