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
                            <input required name="image" class="form-control mb-3" id="image" type="file" value="{{old('image')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('image')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input required type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('name')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Relase date</label>
                            <input required type="number" id="relase_date" name="relase_date" class="form-control" min="1900"
                                   max="2099" step="1" value="{{old('relase_date')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('relase_date')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Platform</label>
                            <input required type="text" id="platform" class="form-control" name="platform"
                                   placeholder="PC/PS/XBOX" value="{{old('platform')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('platform')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Genre</label>
                            <input required type="text" id="genre" class="form-control" name="genre" placeholder="RPG" value="{{old('genre')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('genre')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">HW requirements</label>
                            <input required type="text" id="HW requirments" class="form-control" name="HW_requirements" value="{{old('HW_requirements')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('HW_requirements')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Rating %</label>
                            <input required type="number" id="rating" name="rating" class="form-control" min="0" max="100"
                                   step="1" value="{{old('rating')}}">
                            <div class="form-group text-danger">
                                {{$errors->first('rating')}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Description</label>
                            <textarea required class="border border-secondary p-2 w-100" id="description" rows="5"
                                      name="description" placeholder="Input length in max 100 characters"
                            >{{old('description')}}</textarea>
                            <div class="form-group text-danger">
                                {{$errors->first('description')}}
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
