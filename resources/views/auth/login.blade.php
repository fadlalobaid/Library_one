{{--  <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>  --}}

{{--  <form method="POST" action="{{ route('login') }}">
    @csrf

<div class="form-floating mb-3">
    <label for="floatingInputDisabled">Email address</label>
    <input type="email" name="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" >

  </div>

<div class="form-floating mb-3">
    <label for="floatingInputDisabled">Password</label>
    <input type="password"  name="password"class="form-control" id="floatingInputDisabled" placeholder="name@example.com" >

  </div>

  <button type="submit" class="btn btn-primary" >Log in</button>

</form>  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body1">

    <h1 class="hd1">Developer:Fadl Al-Obaid</h1>
    <div class="div1">
        <form action="{{ route('login') }}" method="POST" class="fr1">
            @csrf
            <h1 class="hed1">LOGIN</h1>

            <input type="email" name="email" class="em1 md1" placeholder="Email">

            <input type="password" name="password" class="pass1 md1" placeholder="Password">
            <input type="checkbox" class="ck1"><label class="lab1">Remmber me</label>
            <button type="submit" class="sbt1">Log in</button>
        </form>
        <a href="./index2.html" class="a11">ليس لدي حساب</a>
    </div>

</body>
</html>
