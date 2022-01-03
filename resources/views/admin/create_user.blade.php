@extends('admin.layouts.master')

@section('content')
<div class="col-lg-9 create-quiz-form">
    <div class="card ">
        <div class="card-header">
            <strong>Create Admin</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Admin Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="admin name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Admin Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="text-input" name="image" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="text-input" name="email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="text-input" name="password" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="role_type" value="admin">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Create
                </button>
            </form>
        </div>
    </div>
    @endsection