@extends('users.layout')
@section('content')


<div class="card">
    <div class="card-header">Users Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $users->name }}</h5>
            <p class="card-text">Address : {{ $users->address }}</p>
            <p class="card-text">Mobile : {{ $users->mobile }}</p>
            <p class="card-text">Email : {{ $users->email }}</p>
        </div>

        </hr>

    </div>
</div>