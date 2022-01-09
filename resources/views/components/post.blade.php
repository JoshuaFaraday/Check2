
<div class="cardNastenka m-3" style="width: 26rem; margin: 5px">
    <div class="overflow-hidden hover01">
    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
    </div>
    <div class="card-bodyNastenka">
        <a href="{{ route('addComment',$post->id) }} " class="btn btn-primary">Pridaj komentar</a>
        <div class="socials" data-postid="{{$post->id}}">
            <a href="#" class="like">{{Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1 ? 'You like this':
'Like': 'Like' }}</a>
            <a href="#" class="like">{{Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0 ? 'You dont like this':
'Dislike': 'Dislike' }}</a>

        </div>
        <div class="d-flex flex-column">
            @foreach($post->comments as $comment)
               <p> {{ $comment->text }}</p>
            @endforeach
        </div>

    </div>
</div>
