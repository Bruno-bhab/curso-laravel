@extends('admin.layouts.app')
@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Detalhes do usuário {{ $user->name }}</h1>
    <x-alert/>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
    @endcan
@endsection