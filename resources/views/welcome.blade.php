<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DBD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="fixed w-full">
                <img src="{{ asset('background.jpg') }}" alt="backgorund">
            </div>
            <div class="absolute w-full bg-white rounded-lg bg-transparent shadow-xl md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex justify-center">
                        <img class="w-28" src="{{ asset('Lambang_Kota_Semarang.png') }}" alt="lambang">
                    </div>
                    <h1 class="text-md font-medium text-black">
                        Jika sudah memiliki akun, silahkan login. Dan jika belum memiliki akun silahkan registrasi.
                    </h1>
                    <div class="flex gap-6 justify-center">
                        <div>
                            <a class="text-black hover:bg-gray-600 font-semibold py-3 px-2 bg-gray-400 rounded-md"
                                href="{{ route('login') }}">Login</a>
                        </div>
                        <div>
                            <a class="text-black hover:bg-gray-600 font-semibold py-3 px-2 bg-gray-400 rounded-md"
                                href="{{ route('register') }}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
