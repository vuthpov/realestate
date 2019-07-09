@extends('admin.master')

@section('page-header','View All Staffs')



@section('col','col-md-12')


@section('content')


<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>

            <th>Name</th>
            <th>Position</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($staff as $s)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$s->Name}}</td>
            <td>{{$s->position}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->dob}}</td>
            <td>{{$s->address}}</td>
            <td>{{$s->phone}}</td>
            <td>{{$s->email}}</td>
            <td><img src="{{url('')}}/{{$s->profile}}" alt="" class="img-fluid" width="100" height="100"></td>
            <td>Edit</td>
        </tr>
        @endforeach


    </tbody>

</table>
@endsection