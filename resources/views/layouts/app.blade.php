<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampilan Web RPL</title>
</head>
<body>
    <header>
        <h2>WELCOME TO WEBSITE RPL</h2>
        <nav>
            <a href="/rpl">HOME</a>
            |
            <a href="/rpl/tentang">TENTANG</a>
            |
            <a href="/rpl/kontak">KONTAK</a>
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
        <p>&copy; <a href="#">www.mywebsite.com</a> 2022</p>
    </footer>
</body>
</html>






