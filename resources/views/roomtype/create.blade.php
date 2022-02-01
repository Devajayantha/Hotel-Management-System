@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types
                <a href="{{ url('admin/roomtype') }}" class="btn btn-success float-right">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <p class="text-success"> {{ Session('success') }}</p>
            @endif
            <div class="table-responsive ">
                <form method="POST" action="{{ url('admin/roomtype') }}">
                    @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Title</th>
                            <td> <input type="text" name="title" id="" class="form-control"> </td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td> <input type="number" name="price" id="" class="form-control"> </td>
                        </tr>
                        <tr>
                            <th>Details</th>
                            <td><textarea name="detail" id="" cols="30" rows="5" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td><input type="submit" value="Submit" class="form-control btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection