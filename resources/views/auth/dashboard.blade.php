<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Básico</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full flex flex-col">
        <div class="w-full flex justify-center">
            <form class="" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-red-600 text-white font-bold rounded-md p-2" type="submit">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
</body>
</html>