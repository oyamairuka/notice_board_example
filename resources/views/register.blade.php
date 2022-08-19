<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>notice board example</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="center_container">
        <div class="contents_area">
            <h2>{{__('userRegistration')}}</h2>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="register" method="POST">
                <label for="name">{{__('userName')}}</label><br>
                <input type="text" name="name"><br>
                <label for="email">{{__('email')}}</label><br>
                <input type="text" name="email"><br>
                <label for="password">{{__('password')}}</label><br>
                <input type="text" name="password"><br>
                <label for="password_confirmation">{{__('password_confirmation')}}</label><br>
                <input type="text" name="password_confirmation"><br>
                <button type='submit'>{{__('userRegistration')}}</button>
                @csrf
            </form>
        </div>
    </div>
</body>

</html>