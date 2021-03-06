@extends('admin.master')

@section('page-header','Create New Partner Type')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/partnerType')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    {{-- Type --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Partner Type</label>
        <input type="text" class="form-control" name="type" placeholder="Partner Type" value="{{old('type')}}" />
        <span class="help-block"></span>
    </div>




    <input type="submit" class="btn btn-primary pull-right" value="Add"/>



</form>


@endsection

@section('display-detail','display:none')