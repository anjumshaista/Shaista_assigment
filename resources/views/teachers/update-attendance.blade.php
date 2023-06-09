@extends('layouts.main')

@section('title', 'Attendance | ' . config('app.name'))

@section('content')

    <div class="page-wrapper">
        @livewire('teachers.update-attendance')
    </div>

@endsection