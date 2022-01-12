@extends('layouts.app')
@section('content')

    <div class="container-flex">
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <form method="post" enctype="multipart/form-data" action="{{ route('uploadPost') }}">
                @csrf
                <div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input name="image" class="form-control mb-3" id="image" type="file">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" class="form-control mb-3" id="title" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="border border-secondary p-2 w-100" id="text" rows="5"
                                  name="text"
                        ></textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


@endsection
