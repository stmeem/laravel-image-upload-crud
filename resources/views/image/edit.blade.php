@extends('image.layout')
@section('content')
    <h4>Update Image </h4>
    <form action="{{ route('images.update', $image->id) }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        @method('put')

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter Name"
                   class="form-control" value={{ $image->name }}>
        </div>


        <div class="form-group">
            <input type="text" name="detail" placeholder="Enter Details"
                   class="form-control" value={{ $image->detail }}>
        </div>


        <div class="form-group">
            <input type="file" name="image" class="form-control">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Update</button>
        </div>

    </form>
@endsection
