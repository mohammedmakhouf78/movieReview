@extends('admin.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories</h3>
            <a href="{{route('admin.review.create')}}" class="btn btn-success float-right"> Create New Review</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row"><div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Review</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Product</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">User</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Edit</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Delete</th>


                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">{{$review->id}}</td>
                                    <td>{{$review->review}}</td>

                                    <td>{{$review->product->name}}</td>
                                    <td>{{$review->user->name}}</td>

                                    <td>
                                        <form method="get" action="{{route('admin.review.edit',$review)}}">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('admin.review.destroy',$review)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            {{$reviews->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
