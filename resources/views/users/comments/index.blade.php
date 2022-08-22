@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">
        Comentários do Usuário {{$user->name}}
        <a href="{{route('comments.create', $user->id)}}" class="bg-blue-900 ">(+)</a>
    </h1>

    <form action="{{route('users.index')}}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Pesquisar</button>
    </form>

    <ul>
        @foreach($comments as $comment)
            <li>
                {{$comment->body}} -
                {{$comment->visible ? 'SIM' : 'NÃO'}}
                | <a href="{{route('users.edit', $user->id)}}">Editar</a>
                | <a href="{{route('users.show', $user->id)}}">Detalhes</a>

            </li>
        @endforeach
    </ul>

@endsection
