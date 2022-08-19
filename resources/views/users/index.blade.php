@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos usuarios
        <a href="{{route('users.create')}}" class="bg-blue-900 ">(+)</a>
    </h1>

    <form action="{{route('users.index')}}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Pesquisar</button>
    </form>

    <ul>
        @foreach($users as $user)
            <li>
                {{$user->name}} -
                {{$user->email}}
                | <a href="{{route('users.edit', $user->id)}}">Editar</a>
                | <a href="{{route('users.show', $user->id)}}">Detalhes</a>

            </li>
        @endforeach
    </ul>

@endsection
