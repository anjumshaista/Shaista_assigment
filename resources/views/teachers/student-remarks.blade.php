@extends('layouts.main')

@section('title', 'Remarks | ' . config('app.name'))

@section('content')

    <div class="page-wrapper">
        @livewire('teachers.student-remarks')
    </div>

@endsection