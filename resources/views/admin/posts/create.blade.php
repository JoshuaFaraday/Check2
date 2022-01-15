@extends('layouts.app')
@section('content')

    <div class="container-flex">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Image</label>

                            <input required name="image"  class="form-control mb-3 col-3 mb-2" id="image" type="file" value="{{old('image')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('image')}}
                            </div>
                            <div class="d-flex flex-column">
                            Preview:
                            <img id="preview" src="{{ asset('storage/placeholder.jpg') }}" alt="preview" width="200px">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input required name="title"  class="form-control mb-3" id="title" type="text" value="{{old('title')}}">
                            <div class="form-group text-danger">
                            {{$errors->first('title')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <textarea required class="border border-secondary p-2 w-100" id="text" rows="5"
                                      name="text"
                            >{{old('text')}}</textarea>
                            <div class="form-group text-danger">
                            {{$errors->first('text')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


{{--    https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded--}}
    <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>

@endsection

