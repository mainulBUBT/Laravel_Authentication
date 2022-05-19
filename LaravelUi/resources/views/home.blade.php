@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="profile">
                        <img src="media/photos/users/{{Auth::user()->photo}}" alt="">
                        <h1 class="text-center">{{Auth::user()->name}}</h1>
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td>{{Auth::user()->name}}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{Auth::user()->username}}</td>
                            </tr>
                            <tr>
                                <td>Cell</td>
                                <td>{{Auth::user()->cell}}</td>
                            </tr>
                            <tr>
                                <td>Registered</td>
                                <td>{{Auth::user()->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
