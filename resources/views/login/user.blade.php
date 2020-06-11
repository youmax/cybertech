<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} Web Service</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="{{ mix('vendor/tailwind.min.css') }}" rel="stylesheet">
    <script src="{{ mix('vendor/alpine.min.js') }}" defer></script>
</head>

<body class="bg-white h-screen">
    <div class="container mx-auto px-8">
        <!-- Login Section -->
        <div class="w-full flex flex-col lg:w-5/6 mx-auto">

            <a href="/" class="my-6 px-4">
                <img src="{{ asset('storage/logo_admin.png') }}" alt="Logo" />
            </a>
            <!-- Row Layout -->
            <div class="flex flex-row">
                <div class="flex flex-col justify-start px-8 lg:w-2/5 w-full px-4">
                    <p class="text-left text-2xl text-gray-800 mb-4">Sign in</p>
                    <x-alert :name="'permission'" />
                    <form class="flex flex-col" action="{{ route('user.login') }}" method="POST">
                        @csrf
                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-md font-semibold">Email</label>
                            <input type="email" name="email" placeholder="your@email.com"
                                value="{{ old('email')??'test1@gmail.com' }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <x-alert :name="'email'" />
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-md flex font-semibold">Password
                                <a href="{{ route('user.password.request') }}"
                                    class="ml-auto text-base text-blue-600 font-normal">
                                    {{ __('messages.password.forgot') }}
                                </a>
                            </label>
                            <input type="password" name="password" placeholder="Password" value="123456"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <x-alert :name="'password'" />
                        <input type="submit" value="{{ __('messages.login') }}"
                            class="bg-blue-600 text-white font-bold text-lg hover:bg-blue-300 hover:cursor-pointer p-2 mt-6 rounded-md">
                    </form>
                    <a href="{{ route('user.register') }}" class="w-full text-base text-blue-600 my-4">
                        {{ __('messages.register') }}
                    </a>
                </div>
                <div class="hidden lg:flex flex-col w-3/5 px-4">
                    <img src="{{ asset('storage/login.png') }}" class="bg-contain bg-center" alt="">
                </div>
            </div>
            <!-- Row Layout -->
            <p class="px-4 my-8 text-sm">
                <strong>About Amazon.com Sign In </strong>
                Amazon Web Services uses information from your Amazon.com account to identify you and allow access to
                Amazon Web Services. Your use of this site is governed by our Terms of Use and Privacy Policy linked
                below. Your use of Amazon Web Services products and services is governed by the AWS Customer Agreement
                linked below unless you have entered into a separate agreement with Amazon Web Services or an AWS Value
                Added Reseller to purchase these products and services. The AWS Customer Agreement was updated on March
                31, 2017. For more information about these updates, see Recent Changes.
            </p>
            <footer class="px-4 my-4 text-sm">
                &copy; {{ now()->year }}, {{ env('APP_NAME') }}. or its affiliates. All rights reserved
            </footer>
        </div>
    </div>
</body>

</html>