@extends('layouts.main')

@section('title', 'Feedback | ' . config('app.name'))

@section('content')

    <div class="page-wrapper">
        @livewire('students.remarks')
    </div>

@endsection
