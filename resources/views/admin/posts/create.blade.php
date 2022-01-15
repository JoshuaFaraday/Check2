@extends('layouts.app')
@section('content')

    <div class="container-flex">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <img id="preview" src="#" alt="preview" width="200px">
                            <input name="image" required class="form-control mb-3" id="image" type="file">
                            <div class="form-group text-danger">
                                {{$errors->first('image')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" required class="form-control mb-3" id="title" type="text">
                            {{$errors->first('title')}}
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <textarea required class="border border-secondary p-2 w-100" id="text" rows="5"
                                      name="text"
                            ></textarea>
                            {{$errors->first('text')}}
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

