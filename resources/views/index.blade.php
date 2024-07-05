@extends('layout.main')

@section('content')
    <form action="/store" method="post">
        @csrf

        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" />

        <label for="username">Username</label>
        <input type="text" id="username" name="username" />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" />

        <button type="submit">Save</button>

    </form>
@endsection
