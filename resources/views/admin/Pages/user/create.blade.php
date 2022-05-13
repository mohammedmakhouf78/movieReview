@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New User</h3>
            </div>

            <form method="POST" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">

                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email">

                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">

                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">

                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image">

                        <label>Type</label>
                        <select class="form-control" name="type">
                            <option>Choose</option>
                            <option value="editor">editor</option>
                            <option value="viewer">viewer</option>
                            <option value="admin">admin</option>
                        </select>
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
