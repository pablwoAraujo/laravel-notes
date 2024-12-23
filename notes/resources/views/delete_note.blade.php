@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">

            @include('top_bar')

            <div class="p-5 text-center col card">
                <span class="mb-5 display-3"><i class="opacity-50 fa-solid fa-triangle-exclamation text-warning"></i></span>
                <h4 class="mb-3 text-info">{{ $note->title }}</h4>
                <p class="text-secondary">Are you sure you want to delete this note?</p>
                <div class="mt-3">
                    <a href="{{ route('home') }}" class="px-5 m-2 btn btn-primary"><i class="fa-solid fa-xmark me-2"></i>No</a>
                    <a href="{{ route('deleteNoteConfirm', ['id' => Crypt::encrypt($note->id)]) }}" class="px-5 m-2 btn btn-danger"><i class="fa-solid fa-trash me-2"></i>Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
