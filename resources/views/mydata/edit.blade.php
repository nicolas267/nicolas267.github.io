@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        My Data
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
            Users
        </li>
        <li class="active">
            My Data
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        My Data
                    </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{action('Mydata@upgrade')}}" method="post" role="form">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>
                                Name
                            </label>
                            <input class="form-control" name="name" placeholder="Name" type="text" value="{{auth()->user()->name}}"/>
                        </div>
                        <div class="form-group">
                            <label>
                                Lastname
                            </label>
                            <input class="form-control" name="lastname" placeholder="Lastname" type="text" value="{{auth()->user()->lastname}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Email address
                            </label>
                            <input class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" type="email" value="{{auth()->user()->email}}"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                                Password
                            </label>
                            <input class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" type="password" value=""/>
                        </div>
                        <input name="userid" type="hidden" value="{{auth()->user()->user_id}}"/>
                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">
                                Edit
                            </button>
                        </div>
                        <!--/.col (right) -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.row -->
@endsection
