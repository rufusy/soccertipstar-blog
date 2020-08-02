@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$user->first_name}} {{$user->last_name}}
                            <small><em>({{$user->email}})</em></small></h3>
                    </div>
                    <div class="box-body">
                        <ul>
                            {{$user->roles->count()==0?'This user has no role':''}}
                            @foreach ($user->roles as $role)
                            <li>{{$role->display_name}} ({{$role->description}})</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <div class="col-xs-6">
                <!-- Default box -->
                <div class="box">
                    <div class="register-box-body">
                        <div class="box-header with-border">
                            <h3 class="box-title">Roles</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <form action="/user/{{$user->id}}" method="post" id="user-form" name="user-form">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <div class="row">
                                            <input type="hidden" name="roles" :value="rolesSelected" />
                                            <div class="col-md-2 col-sm-2 col-lg-2">
                                                <div class="form-group">
                                                    <div class="checkbox" id="roles">
                                                        <label>
                                                            @foreach ($roles as $role)
                                                            <div class="field">
                                                                <input type="checkbox" v-model="rolesSelected"
                                                                    value="{{$role->id}}">
                                                                {{$role->display_name}}
                                                                </input>
                                                            </div>
                                                            @endforeach
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- /.col -->
                                        <div class="col-xs-4">
                                            <button type="submit" id="saveBtn" value="create"
                                                class="btn btn-primary btn-block btn-flat">Save changes</button>
                                        </div>
                                        <div class="col-xs-8"></div>

                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->>

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
            rolesSelected: {!!$user->roles->pluck('id') !!}
        }
    });

</script>
@endsection
