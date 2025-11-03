<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kwiaty</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl3.css'>
            <form action="znajdz.php" method="post">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
            <ul>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li> w Poznaniu</li>
            </ul>
        </ol>

    </aside>
    <section>
        <h2>Znajdź kwiaciarnię</h2>
        Podaj nazwę miasta:
        <input type="text" name="miasto">
        <input type="submit" value="SPRAWDŹ" onclick>
        <?php
        mysqli_connect($_SERVER, root, NULL, kwiaciarnia)
        $miasto = $_POST["miasto"]
        mysqli_query($_SERVER, SELECT 'nazwa', 'ulica' FROM `kwiaciarnie` WHERE 'miasto' = $miasto = $_POST["miasto"])


        mysqli_close($_SERVER)
        ?>
</section>
    <footer>
        <p>Stronę opracowała: 11</p>

    </footer>
</body>
</html>