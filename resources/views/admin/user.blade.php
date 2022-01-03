@extends('admin.layouts.master')

@section('content')
<!-- Users Table -->
<div class="row all-quizzes-table">
    <div class="col-md-12 ">
        <h3 class="title-5 m-b-35">All Users</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                </div>
            </div>
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{route('user.create')}}">
                    <i class="zmdi zmdi-plus"></i>ADD Admin</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Image</th>
                        <th>User Email</th>
                        <th>User Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->all() as $user)
                    <tr class="tr-shadow">
                        <td>{{$user->name}}</td>
                        <td><img src="{{asset('assets/public_images/'.$user->image)}}" alt=""></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role_type}}</td>
                        <td>
                            <div class="table-data-feature">
                                <form action="{{route('user.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                                <a href="{{route('user.edit', $user->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection