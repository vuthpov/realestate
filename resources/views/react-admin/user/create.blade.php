@extends('admin.master')

@section('page-header','Create New User')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/storeUser')}}" method="POST" enctype="multipart/form-data">
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



  {{-- staff --}}
  <!--Class = has-success, has-error!-->
  <div class="form-group">



    <label>Staff</label>
    <select class="form-control" name="staff">

      <?php
        foreach ($staff as $s) {
            echo('<option value='.$s->staffId.'>'.$s->name.'</option>');
        }    
      ?>

    </select>
  </div>

  <div class="form-group">



    <label>Role</label>
    <select class="form-control" name="role">

      <?php
        foreach ($role as $r) {
            echo('<option value='.$r->roleId.'>'.$r->role.'</option>');
        }    
      ?>

    </select>
  </div>

  <?php
    $usernameError=($errors->has('username'))?'has-error':'';
  ?>

  {{-- username --}}
  <div class="form-group {{$usernameError}}">
    <label class="control-label" for="inputSuccess">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}" />
    <span class="help-block"></span>
  </div>

  <?php
      $passwordError=($errors->has('password'))?'has-error':'';
  ?>
  {{-- password --}}
  <div class="form-group{{ $passwordError}}">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" />
    <span class="help-block"></span>
  </div>

  <?php
      $confirmError=($errors->has('confirm'))?'has-error':'';
  ?>
  {{-- confirm --}}
  <div class="form-group {{$confirmError}}">
    <label>Confirm Password</label>

    <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" />
    <span class="help-block"></span>

  </div>










  <input type="submit" class="btn btn-primary" />

  <button class="btn btn-danger pull-right">
      <a style="color:white;" href="/system/user">Cancel</a>
  </button>

</form>


@endsection

@section('display-detail','display:none')