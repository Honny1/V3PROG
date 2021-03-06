<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>
   Co je počítačová síť?
        </h1>
        <ul>
            <li>
                <strong>
                    Počítačová síť se definuje jako distribuovaný výpočetní systém
                </strong>
            </li>
        </ul>
        <h2>
            Počítačová síť je tvořena HW/SW
        </h2>
        <ul>
            <li>
                HW – uzly/hrany
                <ul>
                    <li>
                        Uzel – server, pracovní stanice, tiskárna, router
                        <br/>
                        - zařízení které umí pracovat s daty a procesy
                    </li>
                    <li>
                        Hrana – opakovač, přepínač, kabely
                        <br/>
                        - slouží k propojení, propojují uzly
                    </li>
                </ul>
            </li>
            <li>
                SW – systémový OS, Firewall, antivir
            </li>
            <li>
                Organizační zabezpečení – tvořena správou sítě
                <br/>
                - uživatelské přístupy (login, přístup k datům atd…)
            </li>
        </ul>
        <h2>
            Uzel
        </h2>
        <ul>
            <li>
                <strong>
                    aktivní prvek v síti, propojen hranami
                </strong>
            </li>
        </ul>
        <h2>
            Koncoví uzel
        </h2>
        <ul>
            <li>
                zařízení s kterým se komunikuje
            </li>
            <li>
                <strong>
                    server
                </strong>
                : poskytovatel
                <ul>
                    <li>
                        poskytuje službu ostatním uzlům
                    </li>
                    <li>
                        poskytuje na požádání
                    </li>
                </ul>
            </li>
            <li>
                <strong>
                    klient
                </strong>
                – (požaduje) žádá server o službu
            </li>
            <li>
                <strong>
                    peer
                </strong>
                – zároveň server i klient
                <ul>
                    <li>
                        zároveň poskytuje a požaduje služby
                    </li>
                </ul>
            </li>
        </ul>
        <h2>
            Služba
        </h2>
        <ul>
            <li>
                činnost, kterou si koncový uzel není schopný zařídit sám, a proto o tu činnost žádá jiný koncový uzel.
            </li>
        </ul>
        <h2>
            Vnitřní uzel
        </h2>
        <ul>
            <li>
                slouží k provozu sítě
            </li>
            <li>
                zajištuje infrastrukturu sítě
            </li>
        </ul>
        <h1>
            Způsoby fungování sítě
        </h1>
        <h2>
            Proudový přenos (streaming)
        </h2>
        <ul>
            <li>
                data jsou předávaná v jednotkách informace.
            </li>
            <li>
                Data nejsou sdružováná do velkých balíčků
            </li>
        </ul>
        <h2>
            Blokový přenos
        </h2>
        <ul>
            <li>
                Data jsou rozdělena na malé bloky
            </li>
            <li>
                Každý blok je přenášen jako celek
            </li>
        </ul>
        <h1>
            Spojovaná a nespojovaná komunikace
        </h1>
        <p>
            Komunikace: přenos informací dorozumívání
        </p>
        <h2>
            Spojovaná
        </h2>
        <ul>
            <li>
                Stavová komunikace: spojení je navázáno X není navázáno
            </li>
            <li>
                Komunikující strany: Navážou spojení
                <ul>
                    <li>
                        Navrhne se trasa přenosu a parametry komunikace
                    </li>
                    <li>
                        Komunikace probíhá
                        <strong>
                            proudovým přenosem
                        </strong>
                    </li>
                    <li>
                        Při ukončení komunikace se zruší trasa
                    </li>
                    <li>
                        Např.: Telefonní hovor
                    </li>
                    <li>
                        <strong>
                            Zachovává se pořadí informací
                        </strong>
                    </li>
                </ul>
            </li>
        </ul>
        <h2>
            Nespojovaná
        </h2>
        <ul>
            <li>
                Bloky dat jsou přenášené samostatně a nezávisle
            </li>
            <li>
                Každý blok může dojít jinou cestou a
                <strong>
                    nemusí být zachováno pořadí
                </strong>
            </li>
            <li>
                Nenavazuje se spojení
            </li>
            <li>
                Má vlastní hlavičku – adresa příjemce
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
                Beze stavová
            </li>
            <li>
                Např.: listovní pošta, email
            </li>
        </ul>
        <h2>
            Spolehlivá komunikace
        </h2>
        <ul>
            <li>
                veškerá data jsou potvrzována a kontrolována
            </li>
        </ul>
        <h2>
            Nespolehlivá komunikace
        </h2>
        <ul>
            <li>
                Nic se nekontroluje
            </li>
            <li>
                Pří ztrátě dat se nic nestane
            </li>
        </ul>
    </body>
</html>
