<!DOCTYPE html>
<html>
    <head>
        <title>
   Zapis z POSt
        </title>
        <meta charset="utf-8"/>
        <meta content="OPS" property="og:title"/>
        <meta content="website" property="og:type"/>
        <meta content="./" property="og:url"/>
        <meta content="https://buchticka.eu/background.jpg" property="og:image"/>
        <meta content="Zapis z hodiny POSt" property="og:description"/>
        <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css"/>
        <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js">
        </script>
    </head>
    <body>
        <div class="mui-container">
            <h1>
                Jak nainstalovat DOS
            </h1>
            <ol>
                <li>
                    Vložíme disketu/virtuální obraz do PC/virtuálního pc
                </li>
                <li>
                    Spustíme PC
                </li>
                <li>
                    Z diskety se načte DOS
                </li>
                <li>
                    Rozdělíme logicky disky podle potřeby uživatele pomocí příkazu
                    <strong>
                        fdisk
                    </strong>
                </li>
                <li>
                    Změny se provedou až po restartu PC (CTRL+ALT+DEL)
                </li>
                <li>
                    Naformátujeme příslušné disky pomocí příkazu
                    <strong>
                        format
                    </strong>
                    a název jednotky (C, D, F…) (např.: format c: )
                </li>
                <li>
                    Příkazem
                    <strong>
                        dir
                    </strong>
                    se zobrazí obsah složky/disku kde se nacházíme
                </li>
            </ol>
            <p>
                Budeme kopírovat soubory ze zdrojové složky DOSu (dos7_0) do nové složky na disku C:
            </p>
            <ol>
                <li>
                    <strong>
                        mkdir C:\DOS
                    </strong>
                    vytvoří složku na disku C: s názvem DOS
                </li>
                <li>
                    <strong>
                        cd DOS7_0
                    </strong>
                    vstoupí do složky DOS7_0
                </li>
                <li>
                    <strong>
                        copy . C:\DOS
                    </strong>
                    zkopírujeme vše co se nachází v složce DOS7_0 do složky C:\DOS (
                    <strong>
                        copy
                    </strong>
                    cesta k kopírovaným soubor/ům cesta kam uložit soubor/y) (
                    <strong>
                        .
                    </strong>
                    (tečka) = znamená vše ve složce ve které se nacházím)
                </li>
                <li>
                    <strong>
                        cd ..
                    </strong>
                    přesunu se o složku nahoru z DOS7_0 do A:\
                </li>
                <li>
                    <strong>
                        copy AUTOEXEC.BAT C:
                    </strong>
                    zkopíruje soubor autoexec.bat z diskety (A: ) na disk C:
                </li>
                <li>
                    <strong>
                        copy CONFIG.SYS C:
                    </strong>
                    zkopíruje soubor config.sys z diskety (A: ) na disk C:
                </li>
                <li>
                    <strong>
                        edit C:\AUTOEXEC.BAT
                    </strong>
                    otevřeme editor souboru AUTOEXEC.BAT uloženém na C:
                    <strong>
                    </strong>
                </li>
                <li>
                    upravíme cesty k souborům (patch) tak aby směřovaly na disk C: a k souborům DOSu
                </li>
            </ol>
            <p>
                <img src="data:image/png;base64,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"/>
            </p>
            <ol>
                <li>
                    <strong>
                        alt
                    </strong>
                    následně
                    <strong>
                        s
                    </strong>
                    uloží soubor a
                    <strong>
                        alt
                    </strong>
                    následně
                    <strong>
                        k
                    </strong>
                    ukončí editor (po stisku
                    <strong>
                        alt
                    </strong>
                    se dá v nabídce pohybovat šipkami)
                </li>
                <li>
                    <strong>
                        edit C:\CONFIG.SYS
                    </strong>
                    otevřeme editor souboru CONFIG.SYS uloženém na C:
                    <strong>
                    </strong>
                </li>
                <li>
                    upravíme cesty k souborům (patch) tak aby směřovaly na disk C: a k souborům DOSu
                </li>
            </ol>
            <p>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOsAAAAaCAIAAADZpjw+AAAAAXNSR0IArs4c6QAAA4RJREFUeF7tmk9vEkEUwNkphqQUA4nAgRhLwsFQ4IiJerBHY6yXRjz2Jvpx9FP0U3jmW1BiA5KIkFjspeqaMZPJzJu3b3YXsps80kt33t/fe/N2FjY4P/9QLB68qPfGz6oF/jCBvBEIer3Tk5PuaaM//swdnLfqcbyFguh2H1dr9xkFE8gpgeD12YUQ4uXD4ZdP7/UcLoNL9e/oz8hOTwrIJVtYXdF1dTGlKy2D8sqpoRiDNRKGrzWDBpIUSMYrKQOvizbIECxKklK6QLmA4L2BY6QXRbTb7fl8rrPWW9NAEy75NpOSByutDKp8dHlfXzhi2xeCCay0TcPYh6pmtq/IJXrNwEFjs1IpgLvXVUpQKxKUtGZ3DqUidC3Qmlgul0+GQ2MNN5q8sYzdiRjcj68wHrtlkSY25ihFEm/Q5BZA+2Be4AbQL0ZqxdtsO9ISi8VivV7Trdu3BrouIgl2KngbknzVXwzv9F2RYmMZQ8EegSn6IjJJpZRIXsaS7i6SBjGFUEyUSqWr2RVRYZ+UXSc2dcOKcaRxpWmbUl2eYsqqbPjB0Q4y3nZ1nd+kfVdeuBYI0JVXKGws6bMD0SJ2oxQTP1arcrlM1KFPL6JB36mc3Czdwo6aGDyh4b70UyY9ftlArpLhJzffQitH9sZAtgSiRU9T9Pv9SqVCV/DNjW7ZlrR9GUeIFAckMl2QiRUvuxhNHM8RrpV6KcG8IiOPp6XMirvfd+En0o0hoFoHOet42UR60XiUTn6KAB/aIu+qCXcL5fFoF1M/sgp7yMuOgUIjMvL/p4jDw3Kz2QQb1LVHwWOciomys8G+ByNOyFfeSfUhGsMgklEqD0N64hR6xNJSxHxppNh5lPAoMsHo3cft9uerR0/j/aKhfLhqaUxQPSZwyfUAR0kGkUHCIFoOLeB3f2nH9ZSGL9kTRPdlzGa9yxGGtlh4BcFrV5ByJTIvF3kEFLEiUiw4e3Mxm83Gz9/yexFe4Fg4IwT+fZvWarUyEg2HwQR8CYj6g7qvDsszgewQEIWD4Lh9nJ2AOBIm4EVAXH+9nkwmXjoszASyQ0A0mo1Op5OdgDgSJuBFQNz+upVvV/KHCeSRgLjZ3oTfpuUxdI6ZCYQERLF4r9frMQsmkFMCYrX6Xj46ymn0HDYTEIPBYLPZMAgmkFMCYjqdhq8I5zR6DpsJiFq19m25ZBBMIKcE/gIesTPeItxQFQAAAABJRU5ErkJggg=="/>
            </p>
            <ol>
                <li>
                    <strong>
                        alt
                    </strong>
                    následně
                    <strong>
                        s
                    </strong>
                    uloží soubor a
                    <strong>
                        alt
                    </strong>
                    následně
                    <strong>
                        k
                    </strong>
                    ukončí editor (po stisku
                    <strong>
                        alt
                    </strong>
                    se dá v nabídce pohybovat šipkami)
                </li>
                <li>
                    <strong>
                        sys C:
                    </strong>
                    přeneseme systém
                </li>
                <li>
                    <strong>
                        pomocí fdisk nastavíme C: jako aktivní oddíl
                    </strong>
                </li>
                <li>
                    vytáhneme disketu z PC
                </li>
                <li>
                    restartujeme PC (CTRL+ALT+DEL)
                </li>
            </ol>
            <h1>
                Instalace Norton Comanderu
            </h1>
            <ol>
                <li>
                    vložíme disketu s NC
                </li>
                <li>
                    <strong>
                        A:
                    </strong>
                    přesuneme se na disketu
                </li>
                <li>
                    <strong>
                        dir
                    </strong>
                    zjistíme obsah diskety
                </li>
                <li>
                    <strong>
                        cd NC
                    </strong>
                    přesuneme se do složky NC kde jsou uložené soubory Norton Comandru
                </li>
            </ol>
            <p>
                soubory překopírujeme na disk C: nebo tam kde potřebuje uživatel do nové složky NC (podle zadání na disk D: )
            </p>
            <ol>
                <li>
                    <strong>
                        mkdir D:\NC
                    </strong>
                    vytvoří složku na disku D: s názvem NC
                </li>
                <li>
                    <strong>
                        copy . D:\NC
                    </strong>
                    zkopírujeme vše co se nachází v složce NC do složky D:\NC (
                    <strong>
                        copy
                    </strong>
                    cesta k kopírovaným soubor/ům cesta kam uložit soubor/y) (
                    <strong>
                        .
                    </strong>
                    (tečka) = znamená vše ve složce ve které se nacházím)
                </li>
                <li>
                    <strong>
                        cd D:\NC
                    </strong>
                    vstoupí do složky NC na disku D:
                </li>
                <li>
                    <strong>
                        NC
                    </strong>
                    spustí Norton Comander
                </li>
            </ol>
            <p>
                Otevřeme soubor AUTOEXEC.BAT na disku C: a přidáme cestu k Norton Comanteru, aby příkaz NC fungoval všude a ne jen ve složce NC
            </p>
            <ol>
                <li>
                    <strong>
                        C:
                    </strong>
                    přejdeme do disku C:
                </li>
                <li>
                    Pomocí šipek najedeme na soubor autoexec.bat a zmáčkneme
                    <strong>
                        F4(edit)
                    </strong>
                </li>
                <li>
                    <strong>
                        Přidáme do patch cestu do složky  NC (;D:\NC)
                    </strong>
                    pozor cesty oddělujeme ;
                </li>
            </ol>
            <p>
                <img src="data:image/png;base64,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"/>
            </p>
            <ol>
                <li>
                    <strong>
                        Uložíme F2
                    </strong>
                </li>
                <li>
                    restartujeme PC (CTRL+ALT+DEL)
                </li>
                <li>
                    otestujeme příkaz
                    <strong>
                        NC
                    </strong>
                </li>
            </ol>
            <div class="paticka" style="text-align: center;">
                <hr/>
                <p style="text-align: center; font-size: 75%; border:0%; padding:0%">
                    Copyright © 2018,
                    <a href="https://buchticka.eu">
                        Buchticka.eu
                    </a>
                    Team by Hony
                </p>
            </div>
        </div>
    </body>
</html>
