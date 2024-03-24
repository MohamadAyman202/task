<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Styles -->
    <style>
        section .container .export {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center
        }
    </style>
</head>

<body>
    <section>

        <div class="container">
            <div class="export">

                @include('inc.message')
                <a href="{{ route('pdf') }}" target="_blank" class="btn btn-primary btn-lg">Export Data</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('asset/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
