@extends('layouts.layout')

@section('bodyContent')
<div class="sidenav">
    <a href="/">home</a>
    <a href="/register">Register Now</a>
    <a href="/registrars">View Registrars</a>
</div>
<main role="main" class="container">
    <div class="content">
        <h1 class="mt-5">Registrars</h1>

        @if (count($registered_users)>0)
        <div class="row">
            <table>
                <tr>name </tr>
                <tr>email</tr>
            @foreach ($registered_users as $registered_user)

                <td>{{$registered_user['name']}}</td>
                <td>{{$registered_user['email']}}</td>
                <br>

            @endforeach
            </table>
        </div>

        @else
        <p>No Post Found</p>
        @endif
    </div>
</main>

@endsection
