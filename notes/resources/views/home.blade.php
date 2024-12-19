@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">

                <div class="mb-3 row align-items-center">
                    <div class="col">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="Notes logo">
                        </a>
                    </div>
                    <div class="text-center col">
                        A simple <span class="text-warning">Laravel</span> project!
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end align-items-center">
                            <span class="me-3"><i
                                    class="fa-solid fa-user-circle fa-lg text-secondary me-3"></i>[username]</span>
                            <a href="#" class="px-3 btn btn-outline-secondary">
                                Logout<i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- no notes available -->
                <div class="mt-5 row">
                    <div class="text-center col">
                        <p class="mb-5 opacity-50 display-6 text-secondary">You have no notes available!</p>
                        <a href="#" class="p-3 px-5 btn btn-secondary btn-lg">
                            <i class="fa-regular fa-pen-to-square me-3"></i>Create Your First Note
                        </a>
                    </div>
                </div>

                <!-- temp -->
                <hr class="my-5">

                <!-- notes are available -->
                <div class="mb-3 d-flex justify-content-end">
                    <a href="#" class="px-3 btn btn-secondary">
                        <i class="fa-regular fa-pen-to-square me-2"></i>New Note
                    </a>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="p-4 card">
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-info">Note Title</h4>
                                    <small class="text-secondary"><span class="opacity-75 me-2">Created
                                            at:</span><strong>00/00/0000 00:00:00</strong></small>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="mx-1 btn btn-outline-secondary btn-sm"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="#" class="mx-1 btn btn-outline-danger btn-sm"><i
                                            class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </div>
                            <hr>
                            <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia
                                temporibus necessitatibus nesciunt quam repellat porro commodi autem veniam doloribus
                                nostrum magni rerum, libero ullam maxime praesentium cum velit. Recusandae, aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
