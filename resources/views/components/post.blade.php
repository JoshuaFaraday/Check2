<div class="cardNastenka m-3" style="width: 26rem; margin: 5px">
    <div class="overflow-hidden hover01">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
    </div>
    <div class="card-bodyNastenka">
        <a href="{{ route('addComment',$post->id) }} " class="btn btn-primary">Pridaj komentar</a>
        <div class="d-flex justify-content-start">


            <div class="likes" id="likes">
                {{$post->likes()->where('like','=','1')->count()}}
            </div>
            <div class="socials" data-postid="{{$post->id}}">

                @if(Auth::user()->likes()->where('post_id',$post->id)->first())
                    @if(Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1)
                        <a href="#" class="like fas fa-thumbs-up"></a>

                    @else
                        <a href="#" class="like far fa-thumbs-up"></a>
                    @endif
                @else
                    <a href="#" class="like far fa-thumbs-up"></a>
                @endif

                @if(Auth::user()->likes()->where('post_id',$post->id)->first())
                    @if(Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0)
                        <a href="#" class="like fas fa-thumbs-down"></a>
                    @else
                        <a href="#" class="like far fa-thumbs-down"></a>
                    @endif
                @else
                    <a href="#" class="like far fa-thumbs-down"></a>
                @endif

            </div>
            <div class="dislikes" id="dislikes">
                {{$post->likes()->where('like','=','0')->count()}}
            </div>
        </div>
        <div class="d-flex flex-column">
            @foreach($post->comments as $comment)
                <p> {{ $comment->text }}</p>
            @endforeach
        </div>
    </div>
</div>
