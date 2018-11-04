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
                Chlazen&iacute; procesoru
            </h1>
            <ul>
                <li>
                    bez chlazen&iacute; by do&scaron;lo k přehř&aacute;t&iacute; a po&scaron;kozen&iacute;
                </li>
            </ul>
            <p>
                -	typy:
            </p>
            <ul>
                <li>
                    <ul>
                        <li>
                            pasivn&iacute; &ndash; kovov&aacute; souč&aacute;stka &ndash; z kovu, kter&aacute; m&aacute; dobrou tepelnou vodivost, t&iacute;m odv&aacute;d&iacute; teplo pryč
                        </li>
                        <li>
                            aktivn&iacute; &ndash; je zde ventil&aacute;tor, proud&iacute; zde vzduch
                        </li>
                        <li>
                            kombinovan&eacute; &ndash; často použ&iacute;van&eacute;, pasivn&iacute; chladič a na něm je ventil&aacute;tor
                        </li>
                        <li>
                            vodn&iacute; &ndash; nejdraž&scaron;&iacute;, uzavřen&aacute; soustava potrub&iacute; a v něm proud&iacute; destilovan&aacute; voda
                        </li>
                    </ul>
                </li>
            </ul>
            <h1>
                Vlastnosti procesoru vy&scaron;&scaron;&iacute;ch generac&iacute;
            </h1>
            <ul>
                <li>
                    pipelining &ndash; zřetězen&eacute; zpracov&aacute;n&iacute; strojov&yacute;ch instrukc&iacute;
                    <ul>
                        <li>
                            procesor je rozdělen na subprocesory a ty pracuj&iacute; součastně
                        </li>
                        <li>
                            každ&yacute; pracuje v dan&yacute; okamžik na jin&eacute; instrukci a jin&eacute; f&aacute;zi instrukce
                        </li>
                        <li>
                            ukl&aacute;d&aacute;n&iacute; do společn&eacute; paměti
                        </li>
                        <li>
                            instrukce je rozdělena na kroky
                        </li>
                        <li>
                            vět&scaron;inou je 5 stupňov&yacute;, ale může b&yacute;t i jin&yacute;, z&aacute;lež&iacute; na typu procesoru
                        </li>
                    </ul>
                </li>
            </ul>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <p>
                                Sub&nbsp;mikroprocesoru / časov&yacute; mžik
                            </p>
                        </td>
                        <td>
                            <p>
                                1
                            </p>
                        </td>
                        <td>
                            <p>
                                2
                            </p>
                        </td>
                        <td>
                            <p>
                                3
                            </p>
                        </td>
                        <td>
                            <p>
                                4
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                1
                            </p>
                        </td>
                        <td>
                            <p>
                                A
                            </p>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                2
                            </p>
                        </td>
                        <td>
                            <p>
                                B
                            </p>
                        </td>
                        <td>
                            <p>
                                A
                            </p>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                3
                            </p>
                        </td>
                        <td>
                            <p>
                                C
                            </p>
                        </td>
                        <td>
                            <p>
                                B
                            </p>
                        </td>
                        <td>
                            <p>
                                A
                            </p>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                4
                            </p>
                        </td>
                        <td>
                            <p>
                                D
                            </p>
                        </td>
                        <td>
                            <p>
                                C
                            </p>
                        </td>
                        <td>
                            <p>
                                B
                            </p>
                        </td>
                        <td>
                            <p>
                                A
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul>
                <li>
                    1. načten&iacute;
                </li>
                <li>
                    2. dek&oacute;dov&aacute;n&iacute;
                </li>
                <li>
                    3. proveden&iacute;
                </li>
                <li>
                    4. zaps&aacute;n&iacute; do registru
                </li>
                <li>
                    super skal&aacute;rn&iacute; procesor &ndash; způsob, jak zv&yacute;&scaron;it v&yacute;kon procesoru
                    <ul>
                        <li>
                            zvět&scaron;en počet někter&yacute;ch č&aacute;st&iacute; CPU
                        </li>
                        <li>
                            na venek se tv&aacute;ř&iacute; jako jeden procesor
                        </li>
                        <li>
                            zpracuje se v&iacute;ce strojov&yacute;ch instrukc&iacute; v jednom taktu, kter&eacute; se n&aacute;sleduj&iacute;
                        </li>
                    </ul>
                </li>
                <li>
                    v&iacute;ce j&aacute;drov&eacute; procesory &ndash; je duplikovan&eacute; cel&eacute; j&aacute;dro (řadič, registr, ALU)
                    <ul>
                        <li>
                            2 a v&iacute;ce nez&aacute;visl&yacute;ch jader
                        </li>
                        <li>
                            společn&eacute; vykon&aacute;vaj&iacute; různ&eacute; procesy a jejich vl&aacute;kna
                        </li>
                    </ul>
                </li>
                <li>
                    vl&aacute;kno &ndash; odlehčen&yacute; proces, každ&yacute; proces je tvořen v&iacute;ce vl&aacute;kny
                    <ul>
                        <li>
                            pokud operačn&iacute; syst&eacute;m vl&aacute;kna nepodporuje, tak 1 vl&aacute;kno = 1 proces
                        </li>
                        <li>
                            vl&aacute;kna sd&iacute;lej&iacute; stejnou paměť a syst&eacute;mov&eacute; zdroje
                        </li>
                        <li>
                            přep&iacute;n&aacute;n&iacute; mezi vl&aacute;kny je rychlej&scaron;&iacute; než mezi procesy
                        </li>
                        <li>
                            pokud je vl&aacute;kno nepouž&iacute;van&eacute;, tak je vypnuto a doch&aacute;z&iacute; k u&scaron;etřen&iacute; energie
                        </li>
                        <li>
                            každ&eacute; j&aacute;dro m&aacute; svůj cach a pak společn&eacute; cache pro v&scaron;echny j&aacute;dra
                        </li>
                        <li>
                            j&aacute;dra a cache jsou spojov&aacute;ny do přep&iacute;načov&eacute; sběrnice
                        </li>
                        <li>
                            pokud j&aacute;dro ře&scaron;&iacute; přeru&scaron;en&iacute;, tak na dal&scaron;&iacute; j&aacute;dra může přehr&aacute;t proces
                        </li>
                        <li>
                            každ&eacute; j&aacute;dro jsi samo ře&scaron;&iacute; přeru&scaron;en&iacute; a m&aacute; interrupt controler
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
