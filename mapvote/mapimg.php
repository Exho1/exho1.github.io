<?php
	// PHP function to check 404 of map images by Tomelyr (STEAM_0:0:9136467)
	function MapImgExists($url){
		$ch = curl_init($url);    
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
		if($code == 200) {
			$exists = 'true';
		} else {
            $exists = 'false';
		}
		curl_close($ch);
		return $exists;
    }
    
	if (isset($_GET["url"])) {
		$real = 'nope';
		$mapurl = $_GET['url'];
		$real = MapImgExists($mapurl);
		echo $real;
	}
?>