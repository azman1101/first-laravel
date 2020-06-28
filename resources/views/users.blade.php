@extends('includes.master')

@section('content')

    <table>
    
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>

        @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->id}} </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
        @endforeach

    </table>

@endsection