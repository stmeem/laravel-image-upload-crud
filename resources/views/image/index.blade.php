@extends('image.layout')
@section('content')
    @if(session('update')!=null)
        <h1>{{ session('update') }}</h1>
    @endif

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th>Created At</th>
            <th>Updated at</th>
            <th>Action</th>
            <th>Action</th>

        </thead>

        <tbody>
        <?php $id = 1;?>
        @foreach ($images as $image)
            <tr>
                <td>{{ $id++ }}</td>
                <td><img src="{{ asset('storage/'.$image->image) }}" alt="" width="100px"></td>
                <td>{{ $image -> name}}</td>
                <td>{{ $image -> detail}}</td>
                <td>{{ $image -> created_at -> format('d/m/y') }}</td>
                <td>{{ $image -> updated_at -> format('d/m/y') }}</td>
                <td><a href='{{ route('images.edit', $image->id) }}'>Update</a></td>

                <td>
                    <form action="{{ route('images.destroy', $image->id ) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

    {{--    <div class="d-flex justify-content-center">--}}
    {{--        {{ $books->links() }}--}}
    {{--    </div>--}}
    {{--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>--}}
    {{--<script>--}}
    {{--    $(document).ready(function () {--}}
    {{--        $('#example').DataTable();--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
