@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-bodyNastenka border border-primary">
                    <form action="{{route('admin.games.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <legend>Creating new:</legend>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input name="image" class="form-control mb-3" id="image" type="file">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Relase date</label>
                            <input type="number" id="relase_date" name="relase_date" class="form-control" min="1900"
                                   max="2099" step="1">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Platform</label>
                            <input type="text" id="platform" class="form-control" name="platform"
                                   placeholder="PC/PS/XBOX">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Genre</label>
                            <input type="text" id="genre" class="form-control" name="genre" placeholder="RPG">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">HW requirements</label>
                            <input type="text" id="HW requirments" class="form-control" name="HW_requirements">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Rating %</label>
                            <input type="number" id="relase_date" name="rating" class="form-control" min="0" max="100"
                                   step="1">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Description</label>
                            <textarea class="border border-secondary p-2 w-100" id="description" rows="5"
                                      name="description"
                            ></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
