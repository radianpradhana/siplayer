@extends('layout.master')

@section('title', 'Add Player')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$judul}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="/player" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label for="club">Club</label>
                  <input type="text" class="form-control" id="club" name="club" placeholder="Enter Club">
                </div>
                <div class="form-group">
                  <label for="name">Position</label>
                  <input type="text" class="form-control" id="position" name="position" placeholder="Enter Name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="/player" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection