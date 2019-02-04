<!DOCTYPE html>
<html>
    <head>
        <title>
   Zapis z TVY
        </title>
        <meta charset="utf-8">
        <meta content="Zapis z TVY" property="og:title">
        <meta content="website" property="og:type">
        <meta content="./" property="og:url">
        <meta content="https://buchticka.eu/V3PROG/TVY/background.jpg" property="og:image">
        <meta content="Zapis z hodiny TVY" property="og:description">
        <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css">
        <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js">
        </script>
    </head>
    <body>
        <div class="mui-container">
            <h1>
                Start poč&iacute;tače
            </h1>
            <p>
                Stisknu tlač&iacute;tko nap&aacute;jen&iacute; &ndash; PSU (Power Supply Unit) ode&scaron;le sign&aacute;l, kter&yacute; se skl&aacute;d&aacute; ze sam&yacute;ch jedniček, z&aacute;kladn&iacute; deska ho přijme a po&scaron;le zp&aacute;tky a začne t&eacute;ct proud. Časovač sč&iacute;tač po&scaron;le CPU resetovac&iacute; př&iacute;kaz (aby se mohl PC vypnout).
            </p>
            <p>
                <strong>
                    POWER GOOD (POWER OK)
                </strong>
                &ndash; sign&aacute;l, +5V, toto napět&iacute; mus&iacute; b&yacute;t př&iacute;tomno po celou dobu, co PC běž&iacute;. V&nbsp;př&iacute;padě že nap&aacute;jen&iacute; nen&iacute; &ndash; poč&iacute;tač se resetuje
            </p>
            <p>
                0,5s od stisknut&iacute; tlač&iacute;tka
            </p>
            <h2>
                POST (Power On Self Test)
            </h2>
            <ol>
                <li>
                    F&aacute;ze
                    <ul>
                        <li>
                            Obrazovka nesv&iacute;t&iacute;, testuje se CPU, radič, cache
                        </li>
                        <li>
                            Testuje se prvn&iacute;ch 64KB paměti &ndash; slouž&iacute; pro uložen&iacute; v&yacute;sledku POSTu
                        </li>
                        <li>
                            Test Chipsetu, řadič přeru&scaron;en&iacute;, přechod do Protected modu a zpět
                        </li>
                        <li>
                            Test OP do 1MB, d&aacute;le se testuj&iacute; paměti do prvn&iacute; chyby &ndash; u modern&iacute;ch PC tento krok vynech&aacute;n
                        </li>
                    </ul>
                </li>
                <li>
                    F&aacute;ze
                    <ul>
                        <li>
                            Před&aacute;v&aacute; se ř&iacute;zen&iacute; grafick&eacute; karty, ta se otestuje podle vlastn&iacute;ho BIOSu, rozsv&iacute;t&iacute; se obrazovka
                        </li>
                        <li>
                            Testuje se DMA a periferie, nastaven&iacute; vstupně v&yacute;stupn&iacute;ch adres a řadič jejich přeru&scaron;en&iacute;
                        </li>
                    </ul>
                </li>
                <li>
                    F&aacute;ze
                    <ul>
                        <li>
                            Zavaděč OS, vyzkou&scaron;&iacute; se zaveden&iacute; OS a pak se zavede
                        </li>
                        <li>
                            Najde se nult&yacute; sektor syst&eacute;mov&eacute;ho disku a tam je program pro zaveden&iacute; OS
                        </li>
                    </ul>
                </li>
            </ol>
            <ul>
                <li>
                    POST se spou&scaron;t&iacute; po resetu
                </li>
            </ul>
            <h3>
                Studen&yacute; start
            </h3>
            <ul>
                <li>
                    Provede se cel&yacute; POST
                </li>
            </ul>
            <h3>
                Tepl&yacute; start
            </h3>
            <ul>
                <li>
                    Když do&scaron;lo k&nbsp;logick&eacute; chybě
                </li>
                <li>
                    Poč&iacute;tač se nastavuje do poč&aacute;tečn&iacute;ho stavu
                </li>
                <li>
                    Vynech&aacute;vaj&iacute; se někter&eacute; testy např. periferie
                </li>
            </ul>
            <p>
                <img alt="C:\Users\Dohny\AppData\Local\Microsoft\Windows\INetCache\Content.Word\Tepl&yacute; start.png" src="data:image/png;base64,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">
            </p>
            <h1>
                UPS (Uninterruptible Power Supply/Source)
            </h1>
            <ul>
                <li>
                    = zdroj nepřeru&scaron;ovan&eacute;ho nap&aacute;jen&iacute;
                </li>
                <li>
                    Zapojen do prim&aacute;rn&iacute;ho zdroje 230V
                </li>
                <li>
                    Použ&iacute;v&aacute; se u telekomunikačn&iacute;ch zař&iacute;zen&iacute;, nemocnice, leti&scaron;tě&hellip;
                </li>
                <li>
                    Na principu akumul&aacute;toru
                </li>
            </ul>
            <h2>
                Offline UPS
            </h2>
            <ul>
                <li>
                    Jednodu&scaron;&scaron;&iacute;
                </li>
                <li>
                    Nijak neupravuje nap&aacute;jen&iacute;
                </li>
                <li>
                    Do režimu z&aacute;lohy se přepne pouze při v&yacute;padku
                </li>
                <li>
                    V&nbsp;norm&aacute;ln&iacute;m režimu je nap&aacute;jeno př&iacute;mo ze zdroje
                </li>
            </ul>
            <h2>
                Line-interactive
            </h2>
            <ul>
                <li>
                    Hybridn&iacute; technologie mezi offline a online
                </li>
                <li>
                    Energii dod&aacute;v&aacute; pouze při v&yacute;padku
                </li>
                <li>
                    V&nbsp;norm&aacute;ln&iacute;m režimu přen&aacute;&scaron;ej&iacute; na svůj vstup napět&iacute; přes kondenz&aacute;tory a filtry, stabilizov&aacute;no napět&iacute;&uml;
                </li>
            </ul>
            <h2>
                Online UPS
            </h2>
            <ul>
                <li>
                    Použ&iacute;v&aacute; nejpokročilej&scaron;&iacute; technologie
                </li>
                <li>
                    Jde vždy z&nbsp;baterie, na v&yacute;stupu konstantn&iacute; napět&iacute;
                </li>
                <li>
                    Nejdraž&scaron;&iacute;
                </li>
                <li>
                    Pro chod laboratorn&iacute;ch př&iacute;strojů
                </li>
                <li>
                    Při přepnut&iacute; na režim bypass nenast&aacute;v&aacute; ž&aacute;dn&eacute; přeru&scaron;en&iacute;
                </li>
            </ul>
            <h3>
                Bypass
            </h3>
            <ul>
                <li>
                    Př&iacute;m&eacute; připojen&iacute; vstupu a v&yacute;stupu v&nbsp;př&iacute;padě probl&eacute;mu
                </li>
            </ul>
            <h1>
                Typy z&aacute;loh
            </h1>
            <ul>
                <li>
                    &Uacute;pln&aacute; z&aacute;loha &ndash; 100% na z&aacute;ložn&iacute;m m&eacute;diu
                </li>
                <li>
                    Rozd&iacute;lov&aacute;
                    <ul>
                        <li>
                            Ukl&aacute;d&aacute; se po del&scaron;&iacute;ch intervalech
                        </li>
                        <li>
                            Ukl&aacute;d&aacute; ty soubory, kter&eacute; se změnily
                        </li>
                    </ul>
                </li>
                <li>
                    Př&iacute;růstkov&aacute; z&aacute;loha &ndash; kopie změněn&yacute;ch souborů od posledn&iacute; z&aacute;lohy
                </li>
            </ul>
            <h2>
                ABC backup
            </h2>
            <ul>
                <li>
                    Program, kter&yacute; dok&aacute;že z&aacute;lohovat jak&aacute;koli data, buď na disk nebo..??
                </li>
            </ul>
            <div class="paticka" style="text-align: center;">
                <hr>
                <p style="text-align: center; font-size: 75%; border:0%; padding:0%">
                    Copyright &copy; 2018,
                    <a href="https://buchticka.eu">
                        Buchticka.eu
                    </a>
                    Team by Hony
                </p>
            </div>
        </div>
    </body>
</html>
