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
                        <form method="POST" action="{{route('role.store')}}" style="margin-top: 5px;">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="display_name"> Name (Display name) </label>
                                <input type="text" class="form-control" id="display_name" name="display_name" value="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="name"> Slug <small><em>can not be
                                            edited</em></small></label>
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>

                            <div class="form-group ">
                                <label class="control-label" for="description"> Description </label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Describe what this permission does" value="">
                            </div>
                            <input type="hidden" :value="permissionsSelected" name="permissions">

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <button class="btn btn-block btn-flat btn-primary">Edit this role</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h1 class="box-title">Permissions:</h1>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-lg-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                @foreach ($permissions as $permission)
                                                                <div class="field">
                                                                    <b-checkbox v-model="permissionsSelected"
                                                                        :native-value="{{$permission->id}}">
                                                                        {{$permission->display_name}}
                                                                        <em>({{$permission->description}})</em>
                                                                    </b-checkbox>
                                                                </div>
                                                                @endforeach
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
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


@section('scripts')
<script type="application/javascript">
    var app = new Vue({
        el: '#dashboard-app',
        data: {
            permissionsSelected: []
        }
    });

</script>
@endsection


