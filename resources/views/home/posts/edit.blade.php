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
                        <form class="" action="/post/{{$post->id}}" method="post" enctype="multipart/form-data" style="margin-top: 5px;">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <div class="row"> <p style="margin-left:15px;" class="text-danger"> To maintain the quality of the images uploaded, Kindly use images that are atleast 750 pixels in width and 439 pixels in height. </p></div>
                                <div class="row">
                                    <div class="col-xs-7">
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Title" value="{{ old('title') ?? $post->title }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-xs-2">
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="checkbox pull-right">
                                                <label>
                                                    <input name="feature" type="checkbox" {{$post->featured==(int)1?'checked':''}}>
                                                    {{$post->featured==(int)1?'Unfeature':'Feature'.' Post'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
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
                                <textarea id="edit_content" name="content" class="post_content" rows="200" cols="80"> {{ old('content') ?? $post->content}}
                                    </textarea>
                            </div>
                           <div class="form-group">
                                <label for="image" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" id="edit-image">
                                </div>
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
