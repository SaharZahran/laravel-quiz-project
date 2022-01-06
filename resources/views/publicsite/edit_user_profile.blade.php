@extends('publicsite.layouts.master')

@section('content')
<div class="container">
    <h1>Edit User Profile</h1>
    <div class="card-body">
        <form action="{{route('user_profile.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal ">
            @csrf
            @method('PUT')
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">User Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name" value="{{Auth::user()->name}}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class="form-control-label">Profile Image</label></div>
                <div class="col col-md-9"> <img src="{{asset('assets/public_images/'.Auth::user()->image)}}" alt="user image" class="user-profile-image">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="" class="form-control-label">Change Profile Image</label>
                </div>
                <div class="col col-md-9">
                    <label>
                        <input type="radio" class="checkbox" name="image" value="bt1.png">
                        <div class="avatar">
                            <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt1.png')}}" id="avatar-1" alt="">
                        </div>
                    </label>
                    <label>
                        <input type="radio" class="checkbox" name="image" value="bt2.png">
                        <div class="avatar">
                            <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt2.png')}}" id="avatar-2" alt="">
                        </div>
                    </label>
                    <label>
                        <input type="radio" class="checkbox" name="image" value="bt3.png">
                        <div class="avatar">
                            <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt3.png')}}" id="avatar-3" alt="">
                        </div>
                    </label>
                    <label>
                        <input type="radio" class="checkbox" name="image" value="bt4.png">
                        <div class="avatar">
                            <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt4.png')}}" id="avatar-4" alt="">
                        </div>
                    </label>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="text-input" value="{{Auth::user()->email}}" class="form-control" name="email">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="text-input" value="{{Auth::user()->password}}" class="form-control" name="password">
                </div>
            </div>
            <input type="hidden" name="role_type" value="admin">
            <button type="submit" class="btn btn-sahar">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
        </form>
    </div>
</div>
@endsection