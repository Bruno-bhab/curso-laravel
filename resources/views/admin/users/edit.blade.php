@extends('admin.layouts.app')
@section('title', 'Editar usuário')

@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-50">
            Editar usuário {{ $user->name }}
        </h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('admin.users.partials.form')
    </form>
@endsection