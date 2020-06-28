@extends('includes.master')

@section('content')

    <h1>Sign up</h1>

    @include('includes.validation')

    <form method="post" action="{{route('createuser')}}">

        @csrf 

        <input type="text" name="name" placeholder="Name" value="{{old('name')}}" required><br/><br/>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required><br/><br/>
        <input type="password" name="password" placeholder="Password" required><br/><br/>
        <button type="submit">Sign up</button><br/><br/>

        <a href="/login">Sign in instead</a>

    </form>
@endsection

@section('scripts')
<script></script>

@endsection