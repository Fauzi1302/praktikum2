<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempelate Blade Laravel</title>
</head>
<body>
    <header>
        <h2>WELCOME TO WEBSITE RPL</h2>
        <nav>
            <a href="/rpl">Home</a>
            |
            <a href="/rpl/tentang">Tentang</a>
            |
            <a href="/rpl/kontak">kontak</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>
    
    <h3> @yield('judul_halaman')</h3>
    @yield('konten')

    <br/>
    <br/>
    <hr/>
<footer>
     <p>&copy rivaldi hardiyansah dan Fauzi</p>
</footer>
</body>
</html>

