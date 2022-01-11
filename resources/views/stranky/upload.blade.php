@extends('layouts.app')
@section('content')

    <div class="container-flex">
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <form method="post" enctype="multipart/form-data" action="{{ route('uploadPost') }}">
                @csrf
                <div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Obrázok</label>
                        <input name="image" class="form-control mb-3" id="image" type="file">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Odoslať</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


@endsection
