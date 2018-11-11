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
                Virtu&aacute;ln&iacute; paměť
            </h1>
            <ul>
                <li>
                    protože operačn&iacute; paměť je vět&scaron;inou mal&aacute; pro nainstalovan&eacute; programy
                </li>
                <li>
                    proto se roz&scaron;iřuje o virtu&aacute;ln&iacute; paměť
                </li>
                <li>
                    paměť, kam procesor ukl&aacute;d&aacute; moment&aacute;lně nepotřebn&eacute; str&aacute;nky z operačn&iacute; paměti
                </li>
                <li>
                    vytv&aacute;ř&iacute; se na hardisku
                </li>
                <li>
                    Hardisk je rozdělen na framy(r&aacute;mce)
                </li>
            </ul>
            <h2>
                Swapov&aacute;n&iacute;
            </h2>
            <ul>
                <li>
                    odkl&aacute;d&aacute;n&iacute; moment&aacute;lně nepotřebn&yacute;ch dat do virtu&aacute;ln&iacute; paměti a vr&aacute;cen&iacute; do operačn&iacute; paměti, když jsou data potřeba
                </li>
                <li>
                    swapovac&iacute; prostor by měl b&yacute;t 2* vět&scaron;&iacute; než operačn&iacute; paměť
                </li>
                <li>
                    různ&eacute; operačn&iacute; syst&eacute;my přistupuj&iacute; k vytv&aacute;řen&iacute; swap paměti různě
                </li>
                <li>
                    u Unixu je samostatn&yacute; logick&yacute; disk, kter&yacute; je určen pouze pro swapovan&iacute;
                </li>
                <li>
                    u windows je nefragmentovan&yacute; datov&yacute; soubor, jeho velikost je nastaviteln&aacute;
                </li>
                <li>
                    swapovat je pouze po str&aacute;nk&aacute;ch
                </li>
                <li>
                    ve str&aacute;nkovac&iacute;ch tabulk&aacute;ch je vyhrazen flag o velikosti 1 bitu, kter&yacute; ř&iacute;k&aacute;, jestli je str&aacute;nka v operačn&iacute; paměti, nebo ve swapovac&iacute;m prostoru
                </li>
            </ul>
            <p>
                <strong>
                    Postup při swapov&aacute;n&iacute;
                </strong>
            </p>
            <ul>
                <li>
                    je li potřeba prostor v operačn&iacute; paměti, tak jednotka spr&aacute;vy paměti MMU (Managment memory unit),
                </li>
                <li>
                    MMU &ndash; najde str&aacute;nky, kter&eacute; nebudou v n&aacute;sleduj&iacute;ch kroc&iacute;ch použity, najde na disku voln&yacute; frame a str&aacute;nku přep&iacute;&scaron;e na disk do swapovac&iacute; prostoru
                </li>
                <li>
                    č&iacute;slo str&aacute;nky se přep&iacute;&scaron;e č&iacute;slem framu a přid&aacute; se př&iacute;slu&scaron;n&yacute; flag
                </li>
                <li>
                    chceme použ&iacute;t data ze swapu, jednotka MMU najde prostor v operačn&iacute; paměti, pokud nen&iacute; voln&yacute;, tak znova po&scaron;le nepotřebn&eacute; str&aacute;nky do swapu, pokud je volno, tak se zde přep&iacute;&scaron;&iacute; data ze swapovac&iacute;ho prostoru a přep&iacute;&scaron;e se č&iacute;slo framu č&iacute;slem str&aacute;nky a změn&iacute; se flag
                </li>
                <li>
                    <strong>
                        je to pomal&aacute; činnost
                    </strong>
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
