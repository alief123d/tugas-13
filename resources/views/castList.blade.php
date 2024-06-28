@extends('layout.data')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title col-sm-10 py-2">Cast List</h3>
        <a href="/castList/create" class="btn btn-success col-2 fileinput-button">
            <i class="fas fa-plus"></i>
            <span>Create</span>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Cast</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $x)
                <tr>
                    <td>{{$x->id}}</td>
                    <td>{{$x->nama}}</td>
                    <td class="d-flex row">
                        <div class="col-12 d-flex row">
                            <a href="/castList/edit/{{$x->id}}" class="btn mx-2 btn-warning col-4 fileinput-button">
                                <span>Edit</span>
                            </a>
                            <form action="/castList/{{$x->id}}" method="post" class="col-4 mx-2 bg-danger">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger col-12 fileinput-button">
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection