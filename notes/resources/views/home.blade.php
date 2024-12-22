@extends('layouts.main_layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">

            @include('top_bar')

            <!-- no notes available -->
            @if(count($notes) == 0)
            <div class="mt-5 row">
                <div class="text-center col">
                    <p class="mb-5 opacity-50 display-6 text-secondary">You have no notes available!</p>
                    <a href="{{ route('new') }}" class="p-3 px-5 btn btn-secondary btn-lg">
                        <i class="fa-regular fa-pen-to-square me-3"></i>Create Your First Note
                    </a>
                </div>
            </div>

            @else
            <!-- notes are available -->
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ route('new') }}" class="px-3 btn btn-secondary">
                    <i class="fa-regular fa-pen-to-square me-2"></i>New Note
                </a>
            </div>

            @foreach($notes as $note)
            @include('note')
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
