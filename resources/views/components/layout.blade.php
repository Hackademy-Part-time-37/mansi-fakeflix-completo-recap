<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $ciccio ?? 'Errore' }} - Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div class="wrapper overflow-hidden">
        <header class="overflow-hidden">
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <x-navbar />
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>
