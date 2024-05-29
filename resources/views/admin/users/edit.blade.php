@extends('admin.layouts.app')
@section('title', 'Editar usuário')
@section('content')
    <h1>Editar usuário {{ $user->name }}</h1>

    
    
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('PUT')
        @include('admin.users.partials.form')
    </form>
@endsection