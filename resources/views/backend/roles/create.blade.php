@extends('backend.layouts.app')

@section('title', 'Create A New Role')

@section('content')
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Role</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add a role
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post">
                                            @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger">{{ $error }}</p>
                                            @endforeach
                                            @if (session('status'))
                                            <div class="alert alert-success">
                                            {{ session('status') }}
                                            </div>
                                            @endif
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                            <div class="form-group">
                                                <label>Role name</label>
                                                <input class="form-control" name="name" placeholder="Enter text">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
@endsection
