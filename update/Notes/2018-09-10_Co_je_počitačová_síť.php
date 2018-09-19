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
                Co je poč&iacute;tačov&aacute; s&iacute;ť?
            </h1>
            <ul>
                <li>
                    <strong>
                        Poč&iacute;tačov&aacute; s&iacute;ť se definuje jako distribuovan&yacute; v&yacute;početn&iacute; syst&eacute;m
                    </strong>
                </li>
            </ul>
            <h2>
                Poč&iacute;tačov&aacute; s&iacute;ť je tvořena HW/SW
            </h2>
            <ul>
                <li>
                    HW &ndash; uzly/hrany
                    <ul>
                        <li>
                            Uzel &ndash; server, pracovn&iacute; stanice, tisk&aacute;rna, router
                            <br>
                            - zař&iacute;zen&iacute; kter&eacute; um&iacute; pracovat s&nbsp;daty a procesy
                        </li>
                        <li>
                            Hrana &ndash; opakovač, přep&iacute;nač, kabely
                            <br>
                            - slouž&iacute; k&nbsp;propojen&iacute;, propojuj&iacute; uzly
                        </li>
                    </ul>
                </li>
                <li>
                    SW &ndash; syst&eacute;mov&yacute; OS, Firewall, antivir
                </li>
                <li>
                    Organizačn&iacute; zabezpečen&iacute; &ndash; tvořena spr&aacute;vou s&iacute;tě
                    <br>
                    - uživatelsk&eacute; př&iacute;stupy (login, př&iacute;stup k&nbsp;datům atd&hellip;)
                </li>
            </ul>
            <h2>
                Uzel
            </h2>
            <ul>
                <li>
                    <strong>
                        aktivn&iacute; prvek v&nbsp;s&iacute;ti, propojen hranami
                    </strong>
                </li>
            </ul>
            <h2>
                Koncov&iacute; uzel
            </h2>
            <ul>
                <li>
                    zař&iacute;zen&iacute; s&nbsp;kter&yacute;m se komunikuje
                </li>
                <li>
                    <strong>
                        server
                    </strong>
                    : poskytovatel
                    <ul>
                        <li>
                            poskytuje službu ostatn&iacute;m uzlům
                        </li>
                        <li>
                            poskytuje na pož&aacute;d&aacute;n&iacute;
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>
                        klient
                    </strong>
                    &ndash; (požaduje) ž&aacute;d&aacute; server o službu
                </li>
                <li>
                    <strong>
                        peer
                    </strong>
                    &ndash; z&aacute;roveň server i klient
                    <ul>
                        <li>
                            z&aacute;roveň poskytuje a požaduje služby
                        </li>
                    </ul>
                </li>
            </ul>
            <h2>
                Služba
            </h2>
            <ul>
                <li>
                    činnost, kterou si koncov&yacute; uzel nen&iacute; schopn&yacute; zař&iacute;dit s&aacute;m, a proto o tu činnost ž&aacute;d&aacute; jin&yacute; koncov&yacute; uzel.
                </li>
            </ul>
            <h2>
                Vnitřn&iacute; uzel
            </h2>
            <ul>
                <li>
                    slouž&iacute; k&nbsp;provozu s&iacute;tě
                </li>
                <li>
                    zaji&scaron;tuje infrastrukturu s&iacute;tě
                </li>
            </ul>
            <h1>
                Způsoby fungov&aacute;n&iacute; s&iacute;tě
            </h1>
            <h2>
                Proudov&yacute; přenos (streaming)
            </h2>
            <ul>
                <li>
                    data jsou před&aacute;van&aacute; v&nbsp;jednotk&aacute;ch informace.
                </li>
                <li>
                    Data nejsou sdružov&aacute;n&aacute; do velk&yacute;ch bal&iacute;čků
                </li>
            </ul>
            <h2>
                Blokov&yacute; přenos
            </h2>
            <ul>
                <li>
                    Data jsou rozdělena na mal&eacute; bloky
                </li>
                <li>
                    Každ&yacute; blok je přen&aacute;&scaron;en jako celek
                </li>
            </ul>
            <h1>
                Spojovan&aacute; a nespojovan&aacute; komunikace
            </h1>
            <p>
                Komunikace: přenos informac&iacute; dorozum&iacute;v&aacute;n&iacute;
            </p>
            <h2>
                Spojovan&aacute;
            </h2>
            <ul>
                <li>
                    Stavov&aacute; komunikace: spojen&iacute; je nav&aacute;z&aacute;no X nen&iacute; nav&aacute;z&aacute;no
                </li>
                <li>
                    Komunikuj&iacute;c&iacute; strany: Nav&aacute;žou spojen&iacute;
                    <ul>
                        <li>
                            Navrhne se trasa přenosu a parametry komunikace
                        </li>
                        <li>
                            Komunikace prob&iacute;h&aacute;
                            <strong>
                                proudov&yacute;m přenosem
                            </strong>
                        </li>
                        <li>
                            Při ukončen&iacute; komunikace se zru&scaron;&iacute; trasa
                        </li>
                        <li>
                            Např.: Telefonn&iacute; hovor
                        </li>
                        <li>
                            <strong>
                                Zachov&aacute;v&aacute; se pořad&iacute; informac&iacute;
                            </strong>
                        </li>
                    </ul>
                </li>
            </ul>
            <h2>
                Nespojovan&aacute;
            </h2>
            <ul>
                <li>
                    Bloky dat jsou přen&aacute;&scaron;en&eacute; samostatně a nez&aacute;visle
                </li>
                <li>
                    Každ&yacute; blok může doj&iacute;t jinou cestou a
                    <strong>
                        nemus&iacute; b&yacute;t zachov&aacute;no pořad&iacute;
                    </strong>
                </li>
                <li>
                    Nenavazuje se spojen&iacute;
                </li>
                <li>
                    M&aacute; vlastn&iacute; hlavičku &ndash; adresa př&iacute;jemce
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    <ul>
                                        <li>
                                            Adresu odesolatele
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Beze stavov&aacute;
                </li>
                <li>
                    Např.: listovn&iacute; po&scaron;ta, email
                </li>
            </ul>
            <h2>
                Spolehliv&aacute; komunikace
            </h2>
            <ul>
                <li>
                    ve&scaron;ker&aacute; data jsou potvrzov&aacute;na a kontrolov&aacute;na
                </li>
            </ul>
            <h2>
                Nespolehliv&aacute; komunikace
            </h2>
            <ul>
                <li>
                    Nic se nekontroluje
                </li>
                <li>
                    Př&iacute; ztr&aacute;tě dat se nic nestane
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
