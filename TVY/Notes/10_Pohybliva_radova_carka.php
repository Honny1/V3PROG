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
        <meta content="" property="og:image">
        <meta content="Zapis z hodiny TVY" property="og:description">
        <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css">
        <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js">
        </script>
    </head>
    <body>
        <div class="mui-container">
            <p>
                Pohybliv&aacute; ř&aacute;dov&aacute; č&aacute;rka
            </p>
            <ul>
                <li>
                    způsob reprezentace č&iacute;sel, kter&aacute; by byla moc mal&aacute;, nebo moc velk&aacute; pro vyj&aacute;dřen&iacute; v pevn&eacute; ř&aacute;dov&eacute; č&aacute;rce
                </li>
                <li>
                    č&iacute;sla uložena jako určit&eacute; množstv&iacute; platn&yacute;ch č&iacute;slic
                </li>
            </ul>
            <p>
                Pevn&aacute; ř&aacute;dov&aacute; č&aacute;rka
            </p>
            <p>
                _ _ _ _ _ _ _ , _ _
            </p>
            <p>
                1 2 3 4  1 2
            </p>
            <p>
                1 2  3 4 5   1
            </p>
            <p>
                0 , 0 0 5 =&gt; nelze zapsat
            </p>
            <ul>
                <li>
                    platn&aacute; č&iacute;slice * z&aacute;klad
                    <sup>
                        exponent
                    </sup>
                </li>
            </ul>
            <p>
                mantisa
            </p>
            <p>
                m		* 	Z
                <sup>
                    E
                </sup>
            </p>
            <p>
                15 285 35 047 * 10 5
            </p>
            <p>
                1,5 285 35 047 * 10 5 =&gt; 15 285 35 047
            </p>
            <p>
                1,5 285 35 047 * E 5
            </p>
            <p>
                řetězec č&iacute;sel o dan&eacute;m z&aacute;kladu se znam&eacute;nkem
            </p>
            <p>
                z&aacute;klad n&aacute;m slouž&iacute; pro v&yacute;počet exponentov&eacute; č&aacute;sti
            </p>
            <p>
                exponent na
            </p>
            <p>
                z&aacute;klad reprezentace č&iacute;sla - zobrazen&iacute; re&aacute;ln&yacute;ch č&iacute;sel v poč&iacute;tači
            </p>
            <p>
                Dle d&eacute;lky z&aacute;znamu
            </p>
            <p>
                single precision = 32 bitov&eacute; re&aacute;ln&eacute; č&iacute;slo, jednoduch&aacute; přesnost
            </p>
            <p>
                32 bitů 1 bit znam&eacute;nko 8 bitů exponent 23 bitů mentisa
            </p>
            <p>
                double precision = dvojit&aacute; přesnost, 64 bitů, 1 bit znam&eacute;nko, 11 bitů exponent, 52 bitů mantisa
            </p>
            <p>
                Extended precision = roz&scaron;&iacute;řen&yacute; tvar, 80 bitů, 1 bit znam&eacute;nko, 15 bitů exponent, 64 bitů mantisa
            </p>
            <p>
                Quatro precision
            </p>
            <p>
                FP - Floating point = (-1)
                <sup>
                    S
                </sup>
                *2 exp - bias * m
            </p>
            <p>
                re&aacute;ln&eacute; č&iacute;slo	znam&eacute;nkov&yacute; bit           mentisa
            </p>
            <p>
                mantisa vždy uložena na 32 bitech, kladn&eacute; znam&eacute;nko m&aacute; v znam&eacute;nkov&eacute;m bitu 0, z&aacute;portn&eacute; 1
            </p>
            <p>
                nejvy&scaron;&scaron;&iacute; bit je 1 a nezobrazuje se, mantisa se ukl&aacute;d&aacute; od druh&eacute;ho v&yacute;znamn&eacute;ho bitu
            </p>
            <p>
                2 = b&aacute;ze, protože v&yacute;počty se prov&aacute;d&iacute; ve dvojkov&eacute; soustavě
            </p>
            <p>
                exponent je kladn&aacute; hodnota exponentu, kter&yacute; je posunut&yacute; o hodnotu bias
            </p>
            <p>
                bias = 2
                <sup>
                    ab - 1
                </sup>
                -1
            </p>
            <p>
                2
                <sup>
                    7
                </sup>
                - 1 = 127
            </p>
            <p>
                Př&iacute;klad
            </p>
            <ul>
                <li>
                    12, 5 v single precision
                </li>
            </ul>
            <p>
                -12,5 = 1100,1(2) = 1, 1001 * 2
                <sup>
                    3
                </sup>
            </p>
            <p>
                mantisa 1001
            </p>
            <p>
                exponent(8b) 3 + 127 = 130 = 10000010
            </p>
            <p>
                V&yacute;sledn&eacute; č&iacute;slo
            </p>
            <p>
                1 		10000010 	1001000...00
            </p>
            <p>
                z&aacute;porn&eacute;(1b)	exponent(8b)	mentisa(23 b)
            </p>
            <p>
                278,6 v single precision
            </p>
            <p>
                139 	0	0,6 *2 = z vrchu dolů
            </p>
            <p>
                69	1	1,2
            </p>
            <p>
                34	1	0,4
            </p>
            <p>
                17	0	0,8
            </p>
            <p>
                8	1	1,6
            </p>
            <p>
                4	0	1,2
            </p>
            <p>
                2 	0	0,4
            </p>
            <p>
                1	0	0,8
            </p>
            <p>
                0	1	1,6
            </p>
            <p>
                1,2
            </p>
            <p>
                278,6 = 100010110, 0100110011
            </p>
            <p>
                <sup>
                </sup>
            </p>
            <div class="paticka" style="text-align: center;">
                <hr>
                <p style="text-align: center; font-size: 75%; border:0%; padding:0%">
                    Copyright &copy; 2018, by Hony
                </p>
            </div>
        </div>
    </body>
</html>
