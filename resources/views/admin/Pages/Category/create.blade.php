@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Category</h3>
            </div>

            <form method="POST" action="{{route('admin.category.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                    </div>
                    @error('name')
                    <p class="text-danger"> {{$message}}</p>
                    @enderror()
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        <!-- /.card -->

    </div>

@endsection
