@extends('admin.layouts.app')
@section('title', 'Criar usuário')

@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-50">
            Novo Usuário
        </h2>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection