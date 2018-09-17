<!DOCTYPE html>
<html>
<head>
<title>Co je Počítačová síť?</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta property="og:title" content=".: The student project - Buchticka.eu  :." />
<meta property="og:type" content="" />
<meta property="og:url" content="https://buchticka.eu/" />
<meta property="og:image" content="https://www.buchticka.eu/background00.jpg" />
<meta property="og:description" content="This is the best coding team ever! :D" />
<!-- load MUI -->
<link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
<script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>
    
</head>
<body>
	<div class="mui-container">
<h1>Co je Počítačová síť?</h1>
<ul>
	<li>Počítačová síť se definuje jako distribuovaný výpočetní systém</li>
	<li>Počítačová síť je tvořena HW/SW</li>
	<ul>
		<li>HW = uzly/hrany</li>
		<ul>
			<li>Uzel = server, pracovní stanice, tiskárna, router</li>
			<ul>
				<li>zařízení které umí pracovat s daty a procesy</li>
			</ul>
			<li>Hrana – opakované, přepínané, kabely</li>
			<ul>
				<li>slouží k propojení, propojují uzly</li>
			</ul>
			<li>Uzel = aktivní prvek v síti, propojen hranami</li>
			<li>Vnitřní uzel = slouží k provozu sítì</li>
			<ul>
				<li>zajištuje infrastrukturu sítì</li>
			</ul>
			<li>Koncový uzel</li>
			<ul>
				<li>zařízení s kterým se komunikuje</li>
			</ul>
			<li>Server = poskytovatel</li>
			<ul>
				<li>poskytuje službu ostatním uzlům</li>
				<li>poskytuje na požádání</li>
			</ul>
			<li>Klient – (požaduje) žádá server o službu</li>
			<li>Peer – zároveň server i klient</li>
			<ul>
				<li>zároveň poskytuje a požaduje služby</li>
			</ul>
			<li>Služba = činnost, kterou si koncový uzel není schopný zařídit sám, a proto o tu èinnost žádá jiný koncový uzel.</li>
		</ul>
		<li>SW – systémový OS, Firewall, antivir</li>
		<ul>
			<li>Organizačení zabezpečení – tvořena správou sítě</li>
				<ul>
					<li>uživatelské přístupy (login, přístup k datúm atd …)</li>
				</ul>
		</ul>
	</ul>
</ul>

<h2>Způsoby fungování sítí</h2>
<h3>Proudový přenos (streaming)</h3>
<ul>
	<li>data jsou předávaná v jednotkách informace.</li>
	<li>data nejsou sdružováná do velkých balíèkù</li>
</ul>
<h3>Blokový přenos</h3>
<ul>
	<li>Data jsou rozdìlena na malé bloky</li>
	<li>Každý blok je přenášen jako celek</li>
</ul>
<h2>Spojovaná a nespojovaná komunikace</h2>
<p>Komunikace = přenos informací dorozumívání</p>

<table>
	<thead>
		<th>Spojovaná</th>
		<th>Nespojovaná</th>
	</thead>
	<tbody>
		<td>Stavová komunikace: spojení je navázáno X není navázáno</td>
		<td>Komunikující strany: Navážou spojení</td>
		<td>Navrhne se trasa přenosu a parametry komunikace</td>
		<td>Komunikace probíhá proudovým přenosem</td>
		<td>Při ukončení komunikace se zruší trasa</td>
	</tbody>
</table>


Např.: Telefonní hovor

Zachovává se pořadí informací

Nespojovaná
 Bloky dat jsou přenášené samostatnì a nezávisle

Každý blok mùže dojít jinou cestou a nemusí být zachováno pořadí

Nenavazuje se spojení

Má vlastní hlavièku – adresa příjemce

Adresu odesolatele

Beze stavová

Např.: listovní pošta, email

Spolehlivá komunikace
 veškerá data jsou potvrzována a kontrolována

Nespolehlivá komunikace
Nic se nekontroluje

Pří ztrátì dat se nic nestane

</body>
</html>