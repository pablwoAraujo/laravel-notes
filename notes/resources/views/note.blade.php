<div class="row">
    <div class="col">
        <div class="p-4 card">
            <div class="row">
                <div class="col">
                    <h4 class="text-info">{{ $note['title'] }}</h4>
                    <small class="text-secondary"><span class="opacity-75 me-2">Created
                            at:</span><strong>{{ $note['created_at'] }}</strong></small>
                </div>
                <div class="col text-end">
                    <a href="#" class="mx-1 btn btn-outline-secondary btn-sm"><i
                            class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#" class="mx-1 btn btn-outline-danger btn-sm"><i
                            class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>
            <hr>
            <p class="text-secondary">{{$note['text']}}</p>
        </div>
    </div>
</div>
