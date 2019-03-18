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
        <meta content="" property="og:image">
        <meta content="Zapis z hodiny POSt" property="og:description">
        <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css">
        <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js">
        </script>
    </head>
    <body>
        <div class="mui-container">
            <h3>
                <a id="_Toc501390100">
                </a>
                <a id="__RefHeading___Toc2730_2339991646">
                </a>
                ARP
            </h3>
            <ul>
                <li>
                    zkr. pro Address Resolution Protocol
                </li>
                <li>
                    slouž&iacute; k&nbsp;překladu IP adres na MAC adresy
                </li>
                <li>
                    použ&iacute;v&aacute; se tam, kde se použ&iacute;v&aacute; broadcast
                </li>
            </ul>
            <h4>
                Broadcast
            </h4>
            <ul>
                <li>
                    v&scaron;esměrn&eacute; vys&iacute;l&aacute;n&iacute;
                </li>
                <li>
                    dotaz se po&scaron;le v&scaron;em zař&iacute;zen&iacute;m v&nbsp;s&iacute;ti a odpov&iacute; na něj uzel, kter&yacute; pozn&aacute; svoji IP adresu
                </li>
            </ul>
            <h3>
                <a id="_Toc501390101">
                </a>
                <a id="__RefHeading___Toc2732_2339991646">
                </a>
                IGMP
            </h3>
            <ul>
                <li>
                    Internet Group Management Protocol
                </li>
                <li>
                    umožňuje v&iacute;cesměrov&eacute; vys&iacute;l&aacute;n&iacute; &ndash; multicast
                </li>
                <li>
                    pakety IGMP jsou baleny do IP paketů
                </li>
                <li>
                    slouž&iacute; pro v&yacute;měnu informac&iacute; o členstv&iacute; ve skupině
                </li>
            </ul>
            <h2>
                <a id="_Toc501390102">
                </a>
                <a id="__RefHeading___Toc2734_2339991646">
                </a>
                3. Transportn&iacute; vrstva
            </h2>
            <ul>
                <li>
                    měn&iacute; charakter služeb
                </li>
            </ul>
            <h3>
                <a id="_Toc501390103">
                </a>
                <a id="__RefHeading___Toc2736_2339991646">
                </a>
                UDP
            </h3>
            <ul>
                <li>
                    User Datagram Protocol
                </li>
                <li>
                    přen&aacute;&scaron;&iacute;
                    <strong>
                        datagramy
                    </strong>
                    &ndash; pakety nespolehliv&eacute;ho přenosu
                </li>
                <li>
                    funguje nespojovaně a nespolehlivě
                </li>
                <li>
                    ztr&aacute;ty a duplicity nejsou o&scaron;etřeny
                </li>
                <li>
                    rozli&scaron;ov&aacute;n&iacute; služeb pomoc&iacute; portů
                    <ul>
                        <li>
                            HTTP &ndash; 80
                        </li>
                        <li>
                            DNS &ndash; 53
                        </li>
                        <li>
                            FTP &ndash; 20, 21
                        </li>
                    </ul>
                </li>
                <li>
                    IP adresa + č&iacute;slo portu specifikuje program
                </li>
                <li>
                    Socket &ndash; koncov&aacute; spojen&iacute; &ndash; kombinace IP adresa + č&iacute;slo portu + použit&yacute; protokol
                </li>
            </ul>
            <h3>
                <a id="_Toc501390104">
                </a>
                <a id="__RefHeading___Toc2738_2339991646">
                </a>
                TCP
            </h3>
            <ul>
                <li>
                    Transmission Control Protocol
                </li>
                <li>
                    přen&aacute;&scaron;&iacute;
                    <strong>
                        pakety
                    </strong>
                </li>
                <li>
                    spojovan&aacute;, spolehliv&aacute; komunikace
                </li>
                <li>
                    mus&iacute; se nav&aacute;zat spojen&iacute; s&nbsp;komunikačn&iacute;m partnerem
                </li>
                <li>
                    nav&aacute;z&aacute;n&iacute; m&aacute; 3 f&aacute;ze &ndash; tř&iacute;cestn&yacute; handshake
                </li>
                <li>
                    SYN &ndash; př&iacute;znak
                </li>
                <li>
                    SEQ &ndash; n&aacute;hodn&eacute; č&iacute;slo
                </li>
                <li>
                    ACK &ndash; n&aacute;hodn&eacute; č&iacute;slo
                </li>
                <li>
                    CTL &ndash; kter&eacute; kontroln&iacute; bity jsou 1
                </li>
                <li>
                    n&aacute;sleduje přenos dat
                </li>
                <li>
                    ukončen&iacute; spojen&iacute;
                </li>
                <li>
                    protokol vytv&aacute;ř&iacute; iluzi streamu
                </li>
                <li>
                    na straně odes&iacute;latele, TCP shromažďuje byty do vyrovn&aacute;vac&iacute; paměti a po naplněn&iacute; se data po&scaron;lou jako blok &ndash;
                    <strong>
                        segment
                    </strong>
                </li>
                <li>
                    každ&yacute; segment m&aacute; pořadov&eacute; č&iacute;slo
                </li>
                <li>
                    aplikace pracuje se souvisl&yacute;m datov&yacute;m tokem
                </li>
                <li>
                    TCP potvrzuje &uacute;spě&scaron;ně přijat&aacute; data
                </li>
                <li>
                    na chyby neupozorňuje
                </li>
                <li>
                    pokud klient neobdrž&iacute; potvrzen&iacute; do timeoutu, začne data odes&iacute;lat znovu
                </li>
                <li>
                    odes&iacute;latel může zač&iacute;t odes&iacute;lat dal&scaron;&iacute; data bez potvrzen&iacute; přijet&iacute; předchoz&iacute;ch dat &ndash; metoda ok&eacute;nka
                </li>
            </ul>
            <h2>
                <a id="_Toc501390105">
                </a>
                <a id="__RefHeading___Toc2740_2339991646">
                </a>
                4. Aplikačn&iacute; vrstva
            </h2>
            <ul>
                <li>
                    služby
                    <ul>
                        <li>
                            elektronick&aacute; po&scaron;ta
                        </li>
                        <li>
                            vzd&aacute;len&eacute; přihla&scaron;ov&aacute;n&iacute;
                        </li>
                        <li>
                            spr&aacute;va s&iacute;tě
                        </li>
                        <li>
                            sd&iacute;len&iacute; souborů
                        </li>
                    </ul>
                </li>
                <li>
                    protokoly služeb
                    <ul>
                        <li>
                            HTTP
                        </li>
                        <li>
                            FTP
                        </li>
                        <li>
                            WWW
                        </li>
                        <li>
                            Telnet
                        </li>
                        <li>
                            SSH
                        </li>
                        <li>
                            SMTP
                        </li>
                        <li>
                            IMAP
                        </li>
                        <li>
                            POP3
                        </li>
                        <li>
                            DNS
                        </li>
                        <li>
                            DHCP
                        </li>
                        <li>
                            &hellip;
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="paticka" style="text-align: center;">
                <hr>
                <p style="text-align: center; font-size: 75%; border:0%; padding:0%">
                    Copyright &copy; 2018, by Hony
                </p>
            </div>
        </div>
    </body>
</html>
