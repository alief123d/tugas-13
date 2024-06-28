@extends('layout.form')

@section('content')
<form id="quickForm" action="/castList/{{$cast->id}}" method="post">
    @csrf
    @method('put')
    <!-- /.card-body -->
    <div class="card-body">
        <div class="form-group">
            <label for="inputCast">Cast name</label>
            <input type="text" name="nama" class="form-control" id="inputCast" placeholder="Enter Cast Name" value="{{$cast->nama}}">
            <label for="inputCast">Bio</label>
            <input type="text" name="bio" class="form-control" id="inputCast" placeholder="Enter bio" value="{{$cast->bio}}">
            <label for="inputCast">Umur</label>
            <input type="number" name="umur" class="form-control" id="inputCast" placeholder="Enter umur" value="{{$cast->umur}}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection