<style>
    .card {
        box-shadow: 0 4px 8px rgba(0.5, 0.5, 0.5, 0.5);
        overflow: hidden;
        background-color: #2C2F33;
        border-radius: 10px;
    }

</style>
<div class="card m-3" style="width: 26rem; margin: 5px">
    <div class="overflow-hidden hover01">
    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
        <a href="{{ route('addComment',$post->id) }} " class="btn btn-primary">Pridaj komentar</a>
        <div class="d-flex flex-column">
            @foreach($post->comments as $comment)
               <p> {{ $comment->text }}</p>
            @endforeach
        </div>

    </div>
</div>
