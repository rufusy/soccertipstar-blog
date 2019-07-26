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
                                <a href="/post/create" class="btn btn-block btn-flat btn-primary">New post</a>
                            </div>

                            <div class="col-xs-6 col-l-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-xs-3"></div>

                                    <div class="col-xs-6 col-l-6 col-md-6 col-sm-6 text-center">
                                        <div form-group>
                                            <select class="form-control">
                                                <option>soccer</option>
                                                <option>tennis</option>
                                                <option>volleyball</option>
                                                <option>basketball</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 text-center"></div>
                                </div>
                            </div>

                            <div class="col-xs-4 col-l-4 col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-10 text-center">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="" placeholder="search" class="form-control">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 8px;">
                            <div class="col-xs-2 col-l-2 col-md-2 col-sm-2">
                                <div class="checkbox" style="margin-left: 10px;">
                                    <label><input type="checkbox" name="topic-1-checkbox"></label>
                                </div>

                            </div>
                            <div class="col-xs-4 col-l-4 col-md-4 col-sm-4 text-center">
                                <div class="btn-group ">
                                    <button type="button"
                                        class="btn btn-default btn-flat btn-success btn-small">publish</button>
                                    <button type="button" class="btn btn-default btn-flat btn-info btn-small"
                                        style="margin-left: 1px;">draft</button>
                                    <button type="button" class="btn btn-default btn-flat btn-danger btn-small"
                                        style="margin-left: 1px;">delete</button>
                                </div>
                            </div>
                            <div class="col-xs-4 col-l-4 col-md-4 col-sm-4 text-center">
                                <ul class="pagination pagination-sm no-margin">
                                    <li><a href="#">
                                            <</a> </li> <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-2 col-l-2 col-md-2 col-sm-2">
                                <div class="row">
                                    <div class="col-xs-10 col-l-10 col-md-10 col-sm-10 text-center ">
                                        <div form-group>
                                            <select class="form-control">
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>50</option>
                                                <option>all</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label><input type="checkbox" name="topic-1-checkbox"></label>
                                    </td>
                                    <td>Topic 1</td>
                                    <td>Draft</td>
                                    <td> Rufusy</td>
                                    <td>07/07/2019</td>
                                    <div v-on:mouseover="active = !active">
                                        <td>Edit</td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>
                                        <label><input type="checkbox" name="topic-1-checkbox"></label>
                                    </td>
                                    <td>Topic 1</td>
                                    <td>Draft</td>
                                    <td> Rufusy</td>
                                    <td>07/07/2019</td>
                                    <div v-on:mouseover="active = !active">
                                        <td>Edit</td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>
                                        <label><input type="checkbox" name="topic-1-checkbox"></label>
                                    </td>
                                    <td>Topic 1</td>
                                    <td>Draft</td>
                                    <td> Rufusy</td>
                                    <td>07/07/2019</td>
                                    <div v-on:mouseover="active = !active">
                                        <td>Edit</td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>
                                        <label><input type="checkbox" name="topic-1-checkbox"></label>
                                    </td>
                                    <td>Topic 1</td>
                                    <td>Draft</td>
                                    <td> Rufusy</td>
                                    <td>07/07/2019</td>
                                    <div v-on:mouseover="active = !active">
                                        <td>Edit</td>
                                    </div>
                                </tr>
                                <tr>
                                    <td>
                                        <label><input type="checkbox" name="topic-1-checkbox"></label>
                                    </td>
                                    <td>Topic 1</td>
                                    <td>Draft</td>
                                    <td> Rufusy</td>
                                    <td>07/07/2019</td>
                                    <div v-on:mouseover="active = !active">
                                        <td>Edit</td>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
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
