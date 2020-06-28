@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>

                    <dl class="row">
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9">{{$user->name}}</dd>

                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9">{{$user->email}}</dd>

                        <dt class="col-sm-3">Create on</dt>
                        <dd class="col-sm-9">{{$user->created_at}}</dd>

                        <dt class="col-sm-3">Last update</dt>
                        <dd class="col-sm-9">{{$user->updated_at}}</dd>
                    </dl>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
