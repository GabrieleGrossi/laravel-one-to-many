@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Insert your project's name" name="name" value="{{ old( 'name' , $project->name) }}">
                </div>

                @error('goal')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Goal
                    </label>
                    <input type="text" class="form-control" id="goal" placeholder="Insert the project's" name="goal" value="{{ old( 'goal' , $project->goal) }}">
                </div>

                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="content" class="form-label">
                        Link
                    </label>
                    <textarea class="form-control" id="link" rows="1" name="link">
                        {{ old( 'goal' , $project->goal) }}
                    </textarea>
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Image
                    </label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-sm btn-warning">
                        Update
                    </button>
                    <button type="reset" class="btn btn-sm btn-danger">
                        Reset
                    </button>
                    <a href="{{ route('admin.projects.index')}}" class="btn btn-sm btn-success">
                        Click here to back home
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection