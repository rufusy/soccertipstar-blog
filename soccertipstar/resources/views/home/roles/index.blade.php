@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-xs-2">
                                <a href="{{route('role.create')}}" class="btn btn-block btn-flat btn-primary">New
                                    role</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            @foreach ($roles as $role)
                            <div class="col-md-2">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <h3>{{$role->display_name}}</h3>
                                        <p>{{$role->name}}</p>
                                        <p>{{$role->description}}</p>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="{{route('role.show', $role->id)}}"
                                            class="btn btn-block btn-flat btn-primary">Details</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{route('role.edit', $role->id)}}"
                                            class="btn btn-block btn-flat btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            @endforeach
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
@endsection
