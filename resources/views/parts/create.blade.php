@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Part
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li class="active">
            Part
        </li>
        <li class="active">
           Create Part
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{action('Part@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Part</label>
                  <input type="text" class="form-control" name="part" placeholder="Part">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection