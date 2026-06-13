<x-layout>
    <form action="/login" method="post">
        @csrf
        @error('email')
        {{ $message }}
        @enderror
        <p>Email</p>
        <input type="email" name="email" id="" class="border border-gray-950/20">
        <p>Senha</p>
        <input type="password" name="password" id="" class="border border-gray-950/20">
        <button type="submit">Entrar</button>
    </form>
</x-layout>
