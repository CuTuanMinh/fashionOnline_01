@extends('backend.layouts.app')

@section('title', 'Users')

@section('content')
        <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All users</h1>
                    </div>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List of all users
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                @if ($users->isEmpty())
                                <p> There is no user.</p>
                                @else
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Join at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                            <td>{!! $user->id !!}</td>
                                            <td>
                                            <a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!}</a>
                                            </td>
                                            <td>{!! $user->email !!}</td>
                                            <td>{!! $user->created_at !!}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
@endsection
