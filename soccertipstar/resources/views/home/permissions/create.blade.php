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
                        <form method="POST" action="{{route('permission.store')}}" style="margin-top: 5px;">
                            @csrf

                            <div class="form-group">
                                <!-- <label>
                                    <input type="radio" class="" v-model="permissionType" name="permission_type"
                                        native-value="basic"> Basic Permission
                                </label>
                                <label>
                                    <input type="radio" class="" v-model="permissionType" name="permission_type"
                                        native-value="crud"> CRUD Permission
                                </label> -->


                            </div>

                            <div class="form-group">
                                <div class="radio">
                                    <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic
                                        Permission</b-radio>
                                </div>
                                <div class="radio">
                                    <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD
                                        Permission</b-radio>
                                </div>
                            </div>


                            <!-- permission = basic -->
                            <div class="form-group" v-if="permissionType == 'basic'">
                                <label class="control-label" for="display_name"> Name (Display name) </label>
                                <input type="text" class="form-control" id="display_name" name="display_name">
                            </div>

                            <div class="form-group" v-if="permissionType == 'basic'">
                                <label class="control-label" for="name"> Slug </label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group " v-if="permissionType == 'basic'">
                                <label class="control-label" for="description"> Description </label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Describe what this permission does">
                            </div>
                            <!-- /permission = basic -->

                            <!-- permission = crud -->
                            <div class="form-group" v-if="permissionType == 'crud'">
                                <label class="control-label" for="resource"> Resource </label>
                                <input type="text" class="form-control" id="resource" name="resource" v-model="resource"
                                    placeholder="The name of the resource">
                            </div>

                          
                            <div class="form-group" v-if="permissionType == 'crud'">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-lg-2">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <b-checkbox v-model="crudSelected" native-value="create">Create
                                                    </b-checkbox>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <b-checkbox v-model="crudSelected" native-value="read">Read
                                                    </b-checkbox>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <b-checkbox v-model="crudSelected" native-value="update">Update
                                                    </b-checkbox>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <b-checkbox v-model="crudSelected" native-value="delete">Delete
                                                    </b-checkbox>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="crud_selected" :value="crudSelected">

                                    <div class="col-md-10 col-sm-10 col-lg-10">
                                        <table id="" class="table table-bordered table-striped"
                                            v-if="resource.length >= 3 && crudSelected.length > 0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Description</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="item in crudSelected">
                                                    <td v-text="crudName(item)"></td>
                                                    <td v-text="crudSlug(item)"></td>
                                                    <td v-text="crudDescription(item)"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                            <!-- /permission = crud -->

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <button class="btn btn-block btn-flat btn-primary">Create Permission</button>
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


@section('scripts')
<script type="application/javascript">
 var app = new Vue({
      el: '#dashboard-app',
      data: {
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete']
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        }
      }
    });

</script>
@endsection
