<?php
include './variables.php';
include "./header.php";
?>
    <title><?php print($predmet); ?> - Zápisy z hodin</title>
    <link href="/style.css" rel="stylesheet">
    <meta property="og:title" content="<?php print($predmet); ?> - Zápisy z hodin" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php print($_SERVER['REQUEST_URI']); ?>" />
    <meta property="og:image" content="https://www.buchticka.eu/V3A/<?php print($predmet); ?>/background.jpg" />
    <meta property="og:description" content="Ještě dnes se můžete na učit na <?php print($predmet); ?> s <?php print($ucitel); ?>" />
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <style type="text/css">
      body{
        background-image: url("./background.jpg");
        /*background-position: center;
        background-repeat: repeat;
        background-size: cover;*/
        background-color: rgba(66, 66, 66, 1);
        color: rgba(255, 255, 255, 0.85);
      }a{
        color: rgba(255, 255, 255, 0.75);
        border: none;
      }
    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2871796742628923",
            enable_page_level_ads: true
        });
    </script>    
</head>
<body style="background-color: transparent; font-family: Trebuchet MS; min-width: 600px">
  <div style="background-color: transparent; text-align: center;" class="mui-container">
      <div style="background-color: rgba(122, 122, 122, 0.95); " class="mui-panel">
    	 <h1 style="text-align: center;">Zápisy z hodin <?php print($predmet3p); ?></h1>
<?php
function scanDirectories($rootDir, $allData=array()) {
   
    $invisibleFileNames = array(".", "..", ".htaccess", ".htpasswd");
    $dirContent = scandir($rootDir);
    foreach($dirContent as $key => $content) {
        $path = $rootDir.'/'.$content;
        if(!in_array($content, $invisibleFileNames)) {
            if(is_file($path) && is_readable($path)) {
                $allData[] = $path;
            }elseif(is_dir($path) && is_readable($path)) {
                $allData = scanDirectories($path, $allData);
            }
        }
    }
    return sort($allData);
}
?>

<?php 
function endsWith($haystack, $needle){
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    	}
    return (substr($haystack, -$length) === $needle);
	}
function startsWith($haystack, $needle){
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}
function getFileText($patch) {
	$string=$patch;
    if(endsWith($patch, '.docx') and startsWith($patch, './Download')){
		$info = new SplFileInfo($patch);
        $file_type=$info->getExtension();
        $string="";
		$string=$string . "Stáhnout: ";
 		$string=$string . basename($patch, "." . $file_type);
	}else{
        $info = new SplFileInfo($patch);
        $file_type=$info->getExtension();
		$string="";
 		$string=$string . basename($patch, "." . $file_type);
	}
  return str_replace("_","&nbsp;",$string);
}
?>
<?php
function renderTable($download, $url_download, $notes, $url_notes){
	echo "<table style='text-align: center; width:100%; ' class='mui-table mui-table-bordered'>
          <thead>
            <th style='text-align: center; '>Název kapitoly</th>
            <th style='text-align: center; width: 60px; '>Stáhnout</th>
          </thead>
          <tbody>\n";
	for ($i = 0; $i < count($download); $i++){
		//echo '<tr><td style="text-align: center; "><a href="' . $url_notes[$i] . '" target="_blank">' .  $notes[$i] . '</a></td><td style="text-align: center; "><a href="' . $url_download[$i] . '" target="_blank">'.  $download[$i] . '</a></td></tr>';
    echo "<tr>
    <td style='text-align: center; '><a href='" . $url_notes[$i] . "' target='_blank'>" .  $notes[$i] . "</a></td>
    <td style='text-align: center; width: 60px; '><a href='" . $url_download[$i] . "' target='_blank'><img src='download.png' width='30px'></a></td>
    </tr>";
	}	
  echo '  </tbody>
        </table>';
}

?>
<?php
	$filter = array("php","htm", "html", "docx", "doc");
	$pages = scanDirectories(".");
	for ($i = 0; $i < count($pages); $i++) {
		$info = new SplFileInfo($pages[$i]);
		$file_type=$info->getExtension();
		if (in_array($file_type, $filter, true) and $pages[$i] != "./index.php" and !startsWith($pages[$i], './Source')) {
			if(startsWith(getFileText($pages[$i]), 'Stáhnout')){
  				$url_download[] = $pages[$i];
  				$download[] = str_replace('Stáhnout:', '', getFileText($pages[$i]));
  			}else{
  				$url_notes[] = $pages[$i];
  				$notes[] = getFileText($pages[$i]);
  			}
        }
	}
	if ($url_download!=NULL and $url_notes!=NULL and $download!=NULL and $notes!=NULL) {
		renderTable($download,$url_download,$notes,$url_notes);
	}
?>

          <div style="text-align: center;">
            <hr><p style="text-align: center; font-size: 75%; border:0%; padding:0%"> Copyright &copy; 2018, By Hony & Lukyn</p> 
          </div>
        </center>
      </center>
    </div>
  </div>
 </body>
</html>
