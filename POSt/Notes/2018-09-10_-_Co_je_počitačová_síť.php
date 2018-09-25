<!DOCTYPE html>
<html>
<head>
<title>Co je počítačová síť? - 1.hodina</title>
<meta charset="utf-8">
<meta property="og:title" content="Co je počítačová síť? - 1.hodina" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php print($_SERVER['REQUEST_URI']); ?>" />
<meta property="og:image" content="https://buchticka.eu/V3PROG/POSt/background.jpg" />
<meta property="og:description" content="Zápis z první hodiny POSt" />
  <!-- load MUI -->
<link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
<script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>
    
</head>
<body>
	<div class="mui-container">
		<h1>Co je počítačová síť?</h1>
			<ul>
				<li>Počítačová síť se definuje jako distribuovaný výpočetní systém</li>
				<li>Počítačová síť je tvořena HW / SW</li>
				<ul>
					<li><b>HW</b> = uzly&nbsp;/&nbsp;hrany</li>
					<ul>
						<li><b>Uzel</b> = server, pracovní stanice, tiskárna, router</li>
						<ul>
							<li>zařízení které umí pracovat s daty a procesy</li>
							<li>aktivní prvek v síti, propojen hranami</li>
						</ul>
						<li><b>Vnitřní uzel</b> = slouží k provozu sítě</li>
						<ul>
							<li>zajištuje infrastrukturu sítě</li>
						</ul>
						<li><b>Koncový uzel</b></li>
						<ul>
							<li>zařízení s kterým se komunikuje</li>
						</ul>
						<li><b>Hrana</b> – opakované, přepínané, kabely</li>
						<ul>
							<li>slouží k propojení, propojují uzly</li>
						</ul>
						<li><b>Server</b> = poskytovatel</li>
						<ul>
							<li>poskytuje službu ostatním uzlům</li>
							<li>poskytuje na požádání</li>
						</ul>
						<li><b>Klient</b> – (požaduje) žádá server o službu</li>
						<li><b>Peer</b> – zároveň server i klient</li>
						<ul>
							<li>zároveň poskytuje a požaduje služby</li>
						</ul>
						<li><b>Služba</b> = činnost, kterou si koncový uzel není schopný zařídit sám, a proto o tu činnost žádá jiný koncový uzel.</li>
					</ul>
					<li><b>SW</b> – systémový OS, Firewall, antivir</li>
					<ul>
						<li>Organizačení zabezpečení – tvořena správou sítě</li>
							<ul>
								<li>uživatelské přístupy (login, přístup k datům atd …)</li>
							</ul>
					</ul>
				</ul>
			</ul>

			<h2>Způsoby fungování sítí</h2>
				<h3>Proudový přenos (streaming)</h3>
					<ul>
						<li>data jsou předávaná v jednotkách informace</li>
						<li>data nejsou sdružováná do velkých balíčkù</li>
					</ul>
				<h3>Blokový přenos</h3>
					<ul>
						<li>Data jsou rozdělena na malé bloky</li>
						<li>Každý blok je přenášen jako celek</li>
					</ul>
			<h2>Spojovaná a nespojovaná komunikace</h2>
				<p>Komunikace = přenos informací dorozumívání</p>

			<table class="mui-table mui-table--bordered">
				<thead>
					<th>Spojovaná</th>
					<th>Nespojovaná</th>
				</thead>
				<tbody>
					<tr>
						<td>Stavová komunikace <b>=></b> spojení je navázáno <b>X</b> není navázáno</td>
						<td>Beze stavová</td>
					</tr>
					<tr>
						<td>Komunikující strany <b>=></b> Navážou spojení</td>
						<td>Nenavazuje se spojení</td>
					</tr>
					<tr>
						<td>Navrhne se trasa přenosu a parametry komunikace</td>
						<td>Každý blok může dojít jinou cestou a nemusí být zachováno pořadí</td>
					</tr>
					<tr>
						<td>Komunikace probíhá proudovým přenosem</td>
						<td>Bloky dat jsou přenášené samostatně a nezávisle</td>
					</tr>
					<tr>
						<td>Při ukončení komunikace se zruší trasa</td>
						<td>Má vlastní hlavičku – adresa příjemce a odesílatele</td>
					</tr>
					<tr>
						<td>Např. telefonní hovor</td>
						<td>Např. listovní pošta, email</td>
					</tr>
					<tr>
						<td>Zachovává se pořadí informací</td>
						<td>Pří ztrátě dat se nic nestane</td>
					</tr>
				</tbody>
			</table>
			<table class="mui-table mui-table--bordered">
				<thead>
					<tr>
						<th>Spolehlivá komunikace</th>
						<th>Nespolehlivá komunikace</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Veškerá data jsou potvrzována a kontrolována</td>
						<td>Nic se nekontroluje</td>
					</tr>
				</tbody>
				</table>
		<div class="paticka" style="text-align: center;">
			<hr ><p style="text-align: center; font-size: 75%; border:0%; padding:0%"> Copyright &copy; 2018, <a href="https://buchticka.eu">Buchticka.eu</a> Team</p>
		</div>
	</div>
</body>
</html>