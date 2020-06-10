<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME').' Web Services Administrator Sign-in' }}</title>
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="{{ mix('vendor/tailwind.min.css')}}" rel="stylesheet">
    <script src="{{ mix('vendor/alpine.min.js') }}" defer></script>
</head>

<body class="bg-white font-family-karla h-screen">
    <div class="container mx-auto h-full flex justify-center items-center">
        <!-- Login Section -->
        <div class="bg-white shadow-md rounded px-8 flex flex-col w-full sm:w-3/4 lg:w-1/2">
            <div class="flex justify-center pt-12 space-y-0">
                <a href="/">
                    <img style="max-width: 100%;height: auto;" src="{{ asset('storage/logo_admin.png') }}" alt="Logo" />
                </a>
            </div>
            <div class="flex flex-col justify-center  my-auto pt-8 px-8">
                <h3 class="text-center text-2xl mb-4">登入</h3>
                <p class="text-center text-base mb-4">使用你的管理員帳號</p>
                <form class="flex flex-col" action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" name="email" placeholder="your@email.com"
                            value="{{ old('email')??'admin@gmail.com' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <x-alert :name="'email'" />
                    <x-alert :name="'permission'" />
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" name="password" placeholder="Password" value="123456"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <x-alert :name="'password'" />
                    <input type="submit" value="{{ __('Login') }}"
                        class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-8 pb-12">
                    <p>
                        <a href="{{ route('admin.password.request') }}" class="underline font-semibold">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>