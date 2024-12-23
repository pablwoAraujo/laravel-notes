@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">

            @include('top_bar')

            <!-- label and cancel -->
            <div class="row">
                <div class="col">
                    <p class="mb-0 display-6">NEW NOTE</p>
                </div>
                <div class="col text-end">
                    <a href="{{ route('home') }}" class="btn btn-outline-danger">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>

            <!-- form -->
            <form action="{{ route('newNoteSubmit') }}" method="post">
                @csrf
                <div class="mt-3 row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Note Title</label>
                            <input type="text" class="text-white form-control bg-primary" name="text_title"
                                value="{{ old('text_title') }}">
                            {{-- show error --}}
                            @error('text_title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Note Text</label>
                            <textarea class="text-white form-control bg-primary" name="text_note"
                                rows="5">{{ old('text_note') }}</textarea>
                            {{-- show error --}}
                            @error('text_note')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="col text-end">
                        <a href="{{ route('home') }}" class="px-5 btn btn-primary"><i
                                class="fa-solid fa-ban me-2"></i>Cancel</a>
                        <button type="submit" class="px-5 btn btn-secondary"><i
                                class="fa-regular fa-circle-check me-2"></i>Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
