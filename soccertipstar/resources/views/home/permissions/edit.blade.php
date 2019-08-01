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
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-body pad">
                        <form method="POST" action="{{route('permission.update',  $permission->id)}}"
                            style="margin-top: 5px;">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="control-label" for="display_name"> Name (Display name) </label>
                                <input type="text" class="form-control" id="display_name" name="display_name"
                                    value="{{$permission->display_name}}">
                            </div>

                            <div class="form-group" v-if="permissionType == 'basic'">
                                <label class="control-label" for="name"> Slug small (Cannot be changed)</small></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{$permission->name}}">
                            </div>

                            <div class="form-group " v-if="permissionType == 'basic'">
                                <label class="control-label" for="description"> Description </label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{$permission->description}}"
                                    placeholder="Describe what this permission does">
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <button class="btn btn-block btn-flat btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
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
