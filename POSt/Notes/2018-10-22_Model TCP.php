<!DOCTYPE html>
<html>
    <head>
        <title>
   Zapis z POSt
        </title>
        <meta charset="utf-8">
        <meta content="Zapis z POSt" property="og:title">
        <meta content="website" property="og:type">
        <meta content="./" property="og:url">
        <meta content="https://buchticka.eu/V3PROG/POSt/background.jpg" property="og:image">
        <meta content="Zapis z hodiny POSt" property="og:description">
        <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css">
        <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js">
        </script>
    </head>
    <body>
        <div class="mui-container">
            <h1>
                <a id="__RefHeading___Toc2716_2339991646">
                </a>
                <a id="_Toc501390093">
                </a>
                Model TCP/IP
            </h1>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <p>
                                7. Aplikačn&iacute; vrstva
                            </p>
                        </td>
                        <td rowspan="3">
                            <p>
                                4. Aplikačn&iacute; vrstva
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                6. Prezentačn&iacute; vrstva
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                5. Relačn&iacute; vrstva
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                4. Transportn&iacute; vrstva
                            </p>
                        </td>
                        <td>
                            <p>
                                3. Transportn&iacute; vrstva
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                3. S&iacute;ťov&aacute; vrstva
                            </p>
                        </td>
                        <td>
                            <p>
                                2. S&iacute;ťov&aacute; vrstva
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                2. Linkov&aacute; vrstva
                            </p>
                        </td>
                        <td rowspan="2">
                            <p>
                                1. Vrstva s&iacute;ťov&eacute;ho rozhran&iacute; (linkov&aacute;)
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                1. Fyzick&aacute; vrstva
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul>
                <li>
                    je to s&iacute;ťov&aacute; architektura
                </li>
                <li>
                    zaji&scaron;těn&iacute; spolehlivosti je z&aacute;ležitost koncov&yacute;ch zař&iacute;zen&iacute;
                </li>
                <li>
                    protokol TCP/IP je standardem pro komunikaci v&nbsp;poč&iacute;tačov&eacute; s&iacute;ti
                </li>
                <li>
                    protokoly TCP/IP jsou veřejn&eacute; a neplat&iacute; se za ně
                </li>
            </ul>
            <h2>
                <a id="__RefHeading___Toc2718_2339991646">
                </a>
                <a id="_Toc501390094">
                </a>
                Principy, na kter&yacute;ch je TCP/IP založena
            </h2>
            <ul>
                <li>
                    možnost jednoduch&eacute;ho připojen&iacute; s&iacute;t&iacute; založen&yacute;ch na různ&yacute;ch technologi&iacute;ch
                </li>
                <li>
                    nespojovan&yacute;, bezstavov&yacute; charakter
                </li>
                <li>
                    důraz je kladen na rychlost na &uacute;kor spolehlivosti
                </li>
                <li>
                    spolehlivost zaji&scaron;ťuj&iacute; koncov&eacute; uzly
                </li>
            </ul>
            <h2>
                <a id="__RefHeading___Toc2720_2339991646">
                </a>
                <a id="_Toc501390095">
                </a>
                Nedostatky TCP/IP
            </h2>
            <ul>
                <li>
                    nen&iacute; zaji&scaron;těna dostatečn&aacute; m&iacute;ra bezpečnosti
                </li>
                <li>
                    data mohou b&yacute;t odposlouch&aacute;v&aacute;na, zneužita
                </li>
                <li>
                    původn&iacute; koncepce nepoč&iacute;t&aacute; s&nbsp;mobilitou uživatelů
                </li>
                <li>
                    nedostatek IPv4 adres
                </li>
                <li>
                    nevyhovuje medi&aacute;ln&iacute;mu přenosu &ndash; TCP/IP přen&aacute;&scaron;&iacute; data blokově
                </li>
                <li>
                    v&nbsp;koncov&yacute;ch uzlech jsou implementov&aacute;ny v&scaron;echny vrstvy
                </li>
                <li>
                    ve směrovači je 1. a 2. vrstva
                </li>
                <li>
                    komunikace prob&iacute;h&aacute; mezi stejnolehl&yacute;mi a sousedn&iacute;mi vrstvami
                </li>
            </ul>
            <p>
                Uzel				Směrovač		Uzel
                <br>
                4. Aplikačn&iacute; vrstva					4. Aplikačn&iacute; vrstva
                <br>
                3. Transportn&iacute; vrstva					3. Transportn&iacute; vrstva
                <br>
                2. S&iacute;ťov&aacute;			2. S&iacute;ťov&aacute;		2. S&iacute;ťov&aacute;
                <br>
                1. Vrstva s&iacute;ťov&eacute;ho rozhran&iacute;	1. Vrstva s&iacute;ť. roz.	1. Vrstva s&iacute;ťov&eacute;ho rozhran&iacute;
            </p>
            <h2>
                <a id="__RefHeading___Toc2722_2339991646">
                </a>
                <a id="_Toc501390096">
                </a>
                1. Vrstva s&iacute;ťov&eacute;ho rozhran&iacute;
            </h2>
            <ul>
                <li>
                    umožňuje př&iacute;stup k&nbsp;fyzick&eacute;mu m&eacute;diu
                </li>
                <li>
                    li&scaron;&iacute; se pro přenosov&eacute; m&eacute;dium
                </li>
                <li>
                    vyskytuje se zde mnoho protokolů mimo TCP/IP
                </li>
                <li>
                    v&nbsp;r&aacute;mci TCP/IP nen&iacute; specifikov&aacute;na ž&aacute;dn&yacute;mi protokoly
                </li>
                <li>
                    přen&aacute;&scaron;&iacute; bloky dat &ndash;
                    <strong>
                        r&aacute;mce (frame)
                    </strong>
                    &ndash; obsahuje hlavičku s&nbsp;MAC adresou
                </li>
                <li>
                    komunikace mezi sousedn&iacute;mi uzly
                </li>
            </ul>
            <h2>
                <a id="__RefHeading___Toc2724_2339991646">
                </a>
                <a id="_Toc501390097">
                </a>
                2. S&iacute;ťov&aacute; vrstva
            </h2>
            <ul>
                <li>
                    hled&aacute;n&iacute; cesty
                </li>
                <li>
                    přen&aacute;&scaron;&iacute; bloky dat &ndash; pakety
                </li>
                <li>
                    datagram &ndash; paket nespolehliv&eacute;ho přenosu
                </li>
                <li>
                    komunikace mezi libovoln&yacute;mi uzly v&nbsp;s&iacute;ti
                </li>
                <li>
                    nestar&aacute; se o spolehlivost přenosu
                </li>
                <li>
                    hled&aacute; nejlep&scaron;&iacute; cestu
                </li>
                <li>
                    nalezne se vhodn&aacute; cesta &rarr; paket se zabal&iacute; do r&aacute;mce &rarr; prostřednictv&iacute;m vrstvy s&iacute;ťov&eacute;ho rozhran&iacute; se před&aacute; sousedovi &rarr; vrstva s&iacute;ťov&eacute;ho rozhran&iacute; přijme, rozbal&iacute; frame &rarr; před&aacute; ho vrstvě s&iacute;ťov&eacute; &rarr; hled&aacute; se dal&scaron;&iacute; cesta
                </li>
            </ul>
            <h3>
                <a id="__RefHeading___Toc2726_2339991646">
                </a>
                <a id="_Toc501390098">
                </a>
                Protokol IP
            </h3>
            <ul>
                <li>
                    zkr. pro Internet Protocol
                </li>
                <li>
                    nespojovan&yacute;, nespolehliv&yacute; přenos
                </li>
                <li>
                    paket obsahuje hlavičku s metadaty &ndash; ř&iacute;d&iacute;c&iacute; informace
                    <ul>
                        <li>
                            adresa odes&iacute;latele
                        </li>
                        <li>
                            adresa př&iacute;jemce
                        </li>
                        <li>
                            použit&aacute; verze protokolu &ndash; IPv4 nebo IPv6
                        </li>
                        <li>
                            offset
                        </li>
                        <li>
                            TTL &ndash; Time to Live &ndash; 8 bitů
                        </li>
                        <li>
                            protokol
                        </li>
                        <li>
                            kontroln&iacute; součty
                        </li>
                    </ul>
                </li>
                <li>
                    využ&iacute;v&aacute; v&scaron;echny prostředky
                </li>
                <li>
                    pokud se mu nepovede paket doručit, m&aacute; pr&aacute;vo zpr&aacute;vu zahodit
                </li>
                <li>
                    každ&yacute; paket putuje k&nbsp;c&iacute;li jinou cestou
                </li>
                <li>
                    neopravuje chyby, po&scaron;kozen&eacute; pakety se&nbsp;zahod&iacute;
                </li>
                <li>
                    použ&iacute;v&aacute; jednoznačn&yacute; identifik&aacute;tor &ndash; IP adresa
                </li>
                <li>
                    při vzniku paketu se vytvoř&iacute; TTL
                </li>
            </ul>
            <h4>
                Fragmentace
            </h4>
            <ul>
                <li>
                    někdy je nutno paket rozdělit (fragmentovat) na men&scaron;&iacute; bloky (fragmenty)
                </li>
                <li>
                    rozděluje se ve směrovači
                </li>
                <li>
                    zpětn&aacute; defragmentace prob&iacute;h&aacute; u př&iacute;jemce
                </li>
                <li>
                    pro určen&iacute; pořad&iacute; fragmentu slouž&iacute; offset
                </li>
                <li>
                    defragmentace je možn&aacute; pokud doraz&iacute; v&scaron;echny fragmenty, pokud ne, zpr&aacute;va se zahod&iacute;
                </li>
            </ul>
            <h3>
                <a id="__RefHeading___Toc2728_2339991646">
                </a>
                <a id="_Toc501390099">
                </a>
                Protokol ICMP
            </h3>
            <ul>
                <li>
                    zkr. pro Internet Control Message Protocol
                </li>
                <li>
                    použ&iacute;v&aacute; se k&nbsp;zas&iacute;l&aacute;n&iacute; chybov&yacute;ch zpr&aacute;v
                </li>
                <li>
                    je souč&aacute;st&iacute; protokolu IP
                </li>
                <li>
                    pracuje nad protokolem IP
                </li>
                <li>
                    vygenerov&aacute;n&iacute; ICMP paketů nast&aacute;v&aacute; při
                    <ul>
                        <li>
                            zacyklen&iacute; paketů
                            <ul>
                                <li>
                                    jakmile TTL klesne na 0, směrovač paket zahod&iacute; a vy&scaron;le ICMP paket
                                </li>
                            </ul>
                        </li>
                        <li>
                            vypr&scaron;en&iacute; doby odezvy - kus zpr&aacute;vy chyběl nebo uzel nebyl dostupn&yacute;
                        </li>
                    </ul>
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
