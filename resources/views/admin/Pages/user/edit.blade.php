@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>

            <form method="POST" action="{{route('admin.user.update',$user)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" id="exampleInputEmail1">


                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" id="exampleInputEmail1">

                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" value="{{$user->password}}" id="exampleInputEmail1">

                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}" id="exampleInputEmail1">


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
