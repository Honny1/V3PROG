<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta property="og:title" content="POSt Zapisy z hodin" />
  	<meta property="og:type" content="website" />
  	<meta property="og:url" content="https://www.buchticka.eu/TVY/" />
  	<meta property="og:image" content="https://www.buchticka.eu/TVY/background.jpg" />
  	<meta property="og:description" content="Ještě dnes se můžete na učit na TVY s TODA" />
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <style type="text/css">
    body{
    	background-color: #424242;
    	color: white;
    }
</style>
    <title>TVY</title>
    </head>
    <body>
    	<center><h1>TVY Zapisy z hodin</h1><center>
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
    return $allData;
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
	
	if(endsWith($patch, '.htm')){
		$string="";
 		$string=$string . basename($patch, ".htm");
	}elseif(endsWith($patch, '.docx') and startsWith($patch, './Download')){
		$string="";
		$string=$string . "Stáhnout: ";
 		$string=$string . basename($patch, ".docx");
		}
  return $string;
}
?>

<?php
	$pages = scanDirectories(".");
	for ($i = 0; $i < count($pages); $i++) {
		 if($pages[$i]!="./favicon.png" and $pages[$i]!="./index.php" and $pages[$i]!="./background.jpg" and (endsWith($pages[$i], '.htm') or startsWith($pages[$i], './Download'))) {
    		echo "<center><h3><a href='" . $pages[$i] . "' target='_blank'>" .  getFileText($pages[$i]) . "</a></h3><center><br>";
    		}
	}
?>

 <div style="text-align: center;">
   <hr ><p style="text-align: center; font-size: 75%; border:0%; padding:0%"> Copyright &copy; 2018, Hony</p>
   </div>

 </body>
</html>
