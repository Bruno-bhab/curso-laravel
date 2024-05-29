@extends('admin.layouts.app')
@section('title', 'Criar usuário')
@section('content')
    <h1>Novo Usário</h1>

    <x-alert />
    
    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        @include('admin.users.partials.form')
    </form>
@endsection