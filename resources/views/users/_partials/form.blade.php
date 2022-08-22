<div class="w-full bg-white shadow-md rounded px-8 py-1">
    @csrf
    <input type="text" name="name" placeholder="Nome:" value="{{$user->name ?? old('name')}}">
    <input type="text" name="email" placeholder="Email:" value="{{$user->email ?? old('email')}}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple outline-none text-white font-bold  px-4 py-2 rounded">Enviar</button>
</div>
