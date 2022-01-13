<div class="cardNastenka m-3" style="width: 25.7rem; margin: 5px">
    <div class="overflow-hidden hover01">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
    </div>
    <div class="card-bodyNastenka">
        {{--        <a href="{{ route('addComment',$post->id) }} " class="btn btn-primary">Pridaj komentar</a>--}}
        <a href="{{ route('post',$post->id) }} " class="h3 text-light text-decoration-none">{{$post->title}}</a>
        <div class="socials d-flex justify-content-start">

            <div class="likes px-2" id="likes">
                {{$post->likes()->where('like','=','1')->count()}}
            </div>
            <div data-postid="{{$post->id}}">

                @auth()

                    @if(Auth::user()->likes()->where('post_id',$post->id)->first())
                        @if(Auth::user()->likes()->where('post_id',$post->id)->first()->like == 1)
                            <a href="#" class="text-decoration-none pr-2 like fas fa-thumbs-up text-success "></a>

                        @else
                            <a href="#" class=" text-decoration-none pr-2 like far fa-thumbs-up text-secondary"></a>
                        @endif
                    @else
                        <a href="#" class=" text-decoration-none pr-2 like far fa-thumbs-up text-secondary"></a>
                    @endif

                    @if(Auth::user()->likes()->where('post_id',$post->id)->first())
                        @if(Auth::user()->likes()->where('post_id',$post->id)->first()->like == 0)
                            <a href="#" class=" text-decoration-none like fas fa-thumbs-down text-danger"></a>
                        @else
                            <a href="#" class=" text-decoration-none like far fa-thumbs-down text-secondary"></a>
                        @endif
                    @else
                        <a href="#" class=" text-decoration-none like far fa-thumbs-down text-secondary"></a>
                    @endif
                @endauth
                @guest()
                    <a href="{{route('login')}}"
                       class=" text-decoration-none pr-2  far fa-thumbs-up text-secondary"></a>
                    <a href="{{route('login')}}"
                       class=" text-decoration-none far fa-thumbs-down text-secondary"></a>
                @endguest
            </div>
            <div class="dislikes px-2" id="dislikes">
                {{$post->likes()->where('like','=','0')->count()}}
            </div>

            <div class="ml-5">
                <a href="{{route('post',[$post->id])}}#comments"
                   class="far fa-comment text-secondary text-decoration-none"> {{$post->comments->count()}}</a>

            </div>
        </div>
    </div>
</div>
