@extends('includes.master')

@section('content')

    <table>
    
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Create on</td>
                <td>Last update</td>
            </tr>
        </thead>

        @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->id}} </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            </tbody>
        @endforeach

    </table>

@endsection