@extends('backend.layouts.app')

@section('title', 'Edit users')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit users</h1>
        </div>
    </div>
        <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit users information
                        </div>
                    <div class="panel-body">
                <form class="form-horizontal" method="post">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                    @endif
                    {!! csrf_field() !!}
                    <fieldset>
                        <legend>Edit user</legend>
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Role</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="role" name="role[]" multiple>
                                    @foreach($roles as $role)
                                    <option value="{!! $role->name !!}"
                                        @if(in_array($role->name, $selectedRoles))
                                            selected="selected"
                                        @endif >{!! $role->name !!}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-2 control-label">Confirm password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
