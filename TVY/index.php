<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta property="og:title" content="POSt Zapisy z hodin" />
  	<meta property="og:type" content="website" />
  	<meta property="og:url" content="https://www.buchticka.eu/POSt/" />
  	<meta property="og:image" content="https://www.buchticka.eu/POSt/background.jpg" />
  	<meta property="og:description" content="Ještě dnes se můžete na učit na POSt s TODA" />
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <style type="text/css">
    body{
    	background-color: #424242;
    	color: white;
    }
    

</style>
    <title>POSt</title>
    </head>
    <body>
    	<center><h1>POSt Zapisy z hodin</h1><center>
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
	echo "<table style='width:100%'>";
	for ($i = 0; $i < count($download); $i++){
		echo "<tr><th><center><h3><a href='" . $url_notes[$i] . "' target='_blank'>" .  $notes[$i] . "</a></h3><center></th><th><center><h3><a href='" . $url_download[$i] . "' target='_blank'>".  $download[$i] . "</a></h3><center></th></tr>";
	}	
  	echo "</table>";
}

?>
<?php
	$filter = array("php","htm", "html", "docx");
	$pages = scanDirectories(".");
	for ($i = 0; $i < count($pages); $i++) {
		$info = new SplFileInfo($pages[$i]);
		$file_type=$info->getExtension();
		if (in_array($file_type, $filter, true) and $pages[$i] != "./index.php" and !startsWith($pages[$i], './Source')) {
			if(startsWith(getFileText($pages[$i]), 'Stáhnout')){
  				$url_download[] = $pages[$i];
  				$download[] = getFileText($pages[$i]);
  			}else{
  				$url_notes[] = $pages[$i];
  				$notes[] = getFileText($pages[$i]);
  			}
        }
	}
	renderTable($download,$url_download,$notes,$url_notes);
?>

 <div style="text-align: center;">
   <hr><p style="text-align: center; font-size: 75%; border:0%; padding:0%"> Copyright &copy; 2018, Hony</p>
   </div>

 </body>
</html>
