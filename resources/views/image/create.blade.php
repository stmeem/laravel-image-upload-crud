@extends('image.layout')
@section('content')
    <h4>Create New Image </h4>
    <form action="{{ route('images.store') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter Name"
                   class="form-control @error('name') is-invalid @enderror">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <input type="text" name="detail" placeholder="Enter Details"
                   class="form-control @error('detail') is-invalid @enderror">
        </div>
        @error('detail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
        </div>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </div>

    </form>
@endsection
