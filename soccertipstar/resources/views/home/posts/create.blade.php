@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-body pad">
                        <form method="POST" action="/post" style="margin-top: 5px;">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                  
                                    <div class="col-xs-4">
                                        <div class="btn-group pull-right">
                                            <button type="submit" class="btn btn-success pull-left btn-small btn-flat"
                                                value="publish" name="submit">publish</button>
                                            <button type="submit" class="btn btn-info pull-left btn-small btn-flat"
                                                style="margin-left: 1px;" value="draft" name="submit">save
                                                draft</button>
                                            <a href="/home" class="btn btn-danger pull-left btn-small btn-flat"
                                                style="margin-left: 1px;">close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="content" name="content" rows="80" cols="80"> {{ old('content') }}
                                    </textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /. Main content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <strong>Copyright &copy; 2018-2019 soccertipstar</strong> All rights
    reserved.
</footer>

@endsection
