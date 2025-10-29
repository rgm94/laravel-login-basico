<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Básico</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full p-2 flex flex-col gap-14 justify-center items-center">
        @if ($errors->has('error'))
            <div class="lg:w-1/4 p-2">
                <p>{{ $errors->first('error') }}</p>
            </div>
        @endif
        <form class="border rounded-md flex flex-col gap-4 p-2 lg:w-1/4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="w-full flex justify-center">
                <strong>L</strong><p>ogin</p>
            </div>

            <div class="w-full">
                <input type="email" name="email" placeholder="Introduce Email" required>
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <div class="w-full">
                <input type="password" name="password" placeholder="Introduce Contraseña" required>
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <div class="w-full">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>