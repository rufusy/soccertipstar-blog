@extends('layouts.dashboard')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                            src="/{{$user->profile->profileImage()}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{$user->first_name.' '.$user->last_name}} </h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Total posts</b> <a class="pull-right">1,322</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>

                        <p>{{$user->profile->bio}}</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="timeline">

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal" action="/profile/{{$user->id}}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('PATCH')
                                <!-- First name-->
                                <div class="form-group">
                                    <label for="first_name" class="col-sm-2 control-label">First name</label>

                                    <div class="col-sm-10">
                                        <input type="first_name" name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            id="first_name" placeholder="First name"
                                            value="{{ old('first_name') ?? $user->first_name }}">

                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /First name-->

                                <!-- Last name-->
                                <div class="form-group">
                                    <label for="last_name" class="col-sm-2 control-label">Last name</label>

                                    <div class="col-sm-10">
                                        <input type="last_name" name="last_name"
                                            class="form-control  @error('last_name') is-invalid @enderror"
                                            id="last_name" placeholder="Last name"
                                            value="{{ old('last_name') ?? $user->last_name }}">

                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /Last name -->

                                <!-- Email-->
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Email" value="{{ old('email') ?? $user->email }}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /Email-->

                                <!-- /Mobile no-->
                                <div class="form-group">
                                    <label for="mobile_no" class="col-sm-2 control-label">Mobile no.</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="mobile_no" class="form-control" id="mobile_no"
                                            placeholder="Mobile no."
                                            value="{{ old('mobile_no') ?? $user->profile->mobile_no}}">

                                        @error('mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /mobile no-->

                                <!-- sex-->
                                <div class="form-group">
                                    <label for="sex" class="col-sm-2 control-label">Sex</label>
                                    <div class="col-sm-10">
                                        <select name="sex" id="sex" class="form-control select2" style="width: 100%;">
                                            <option value=""></option>
                                            <option @if ($user->profile->sex === 'M') selected="selected" @endif value="M">Male</option>
                                            <option @if ($user->profile->sex === 'F') selected="selected" @endif value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- sex-->
                                <!-- twitter url -->
                                <div class="form-group">
                                    <label for="twitter_url" class="col-sm-2 control-label">Twitter url</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="twitter_url"
                                            class="form-control @error('twitter_url') is-invalid @enderror"
                                            id="twitter_url" placeholder="Twitter url"
                                            value="{{ old('twitter_url') ?? $user->profile->twitter_url }}">

                                        @error('twitter_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /twitter url -->

                                <!-- facebook url -->
                                <div class="form-group">
                                    <label for="facebook_url" class="col-sm-2 control-label">Facebook url</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="facebook_url"
                                            class="form-control @error('facebook_url') is-invalid @enderror"
                                            id="facebook_url" placeholder="Facebook url"
                                            value="{{ old('facebook_url') ?? $user->profile->facebook_url }}">

                                        @error('facebook_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /facebook url -->

                                <!-- insta url -->
                                <div class="form-group">
                                    <label for="instagram_url" class="col-sm-2 control-label">instagram url</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="instagram_url"
                                            class="form-control @error('instagram_url') is-invalid @enderror"
                                            id="instagram_url" placeholder="Instagram url"
                                            value="{{ old('instagram_url') ?? $user->profile->instagram_url }}">

                                        @error('instagram_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /insta url -->

                                <!-- bio -->
                                <div class="form-group">
                                    <label for="bio" class="col-sm-2 control-label">instagram url</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control @error('bio') is-invalid @enderror"
                                            name="bio" id="bio"
                                            placeholder="">{{ old('bio') ?? $user->profile->bio }}</textarea>

                                        @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /bio -->

                                <div class="form-group">
                                    <label for="image" class="col-sm-2 control-label">Profile image</label>

                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
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
