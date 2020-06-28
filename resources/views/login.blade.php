@extends('includes.master')

@section('content')

    <h1>Sign in</h1>

    @include('includes.validation')
    
    <form method="post" action="{{route('login')}}">

        @csrf 

        <input type="email" name="email" placeholder="Email" required><br/><br/>
        <input type="password" name="password" placeholder="Password" required><br/><br/>
        <button type="submit">Sign in</button><br/><br/>

        <a href="/signup">Don't have an account?</a>


    </form>
@endsection