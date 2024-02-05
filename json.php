<?php


/*

// 伪静态

location ~* (runtime|application)/{
	return 403;
}
location / {
		rewrite  ^.*(\.json)$  /json.php?s=$1  last;   break;
}


*/
header("Content-Type: image/jpeg");
header("Refresh: 0; url=/");


if(is_file(".{$_SERVER["REQUEST_URI"]}")){
    
    echo file_get_contents(".{$_SERVER["REQUEST_URI"]}");
    
}

