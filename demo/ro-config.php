<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAACgAAAAAZbj/lwyCRJk6bOhG6R7SNISm8P1Zoz8mRbVhufx3QzgkBYBZO0l4IejN1Xpta89KB2nR/atFitSXCrMdq6PprvJ+SEEoc0uUZ4qFKxHpOx0mhrN9JTa2kvyhzGdMvIe4cYt4jiwtuN7WtDJTFD2xhymhCDEPjW8TUC/XHnjHm0JKa1nzQAGO/HN9YRxzRC5RIJYR85FrCKom1HXOcBTUTUAAACgAAAAk7VzI/RNrcC7a94btrKaJ5IsQs4IJ9kx0XkaMfrhft9Lk95mJFD1dhpxc7fJxiK+9PyzqNu3vC4iZSeBS+Diwlepdbtr7CRrC3+DNmPUtcqe5ctYu+qvqLFShjkgvTCz/QgKTrUp6rw01gfQ2g/93mnr4ycFSNxvTMbiR31Rk89nEVHJfruBnKCsv72O2W8HbJFcY56hj0HMInI4NuI9szYAAACwAAAAPr+7zv6Cb9OU58XndvgQKuLLwRbKcYGMzRFFhvJCZytXTpMyTpemattt9BgKyw6BQ/Nyp5v13aocGFy/uwrhfV1SKrPYTyul2IuCzN3SLgldfGaObCN8CHtLUV2RJMwPhji6qCBVO+nAYt3mI90aYOtmnVL4AU7iWC8OTmedDhklgWCcBeZpfaoxgrE1ELgEWomDQ93XoJVUNs3EmugSlhxhlqeZXkSG6pk7DJNhxIM3AAAAqAAAAKuYogjPK0RzRgcy8ovXLR+DiEnyffFfwmY0yYPJC6I0yno4ljAZJHBCrWNXMgSe0U4pS1uxxBLwSYrnKaG0VYk/wADuim7zFx27VyI1cIGbBBbWPa3S9pRO3MPDaVB1u/DLFWYaaT0Vhoi2FsBIlVuxWUAZ2gx+dPQF8nxIDrNlUK4c98+5NiPq7EdKB4kC6vH7oF+6Myvt10ovvYETXzfj141qednDpTgAAACwAAAAzF7MPt3suKyhTQphABu7nFaqr5MWvbFtpbAKtLZwP5GSONd9Y4g5yUEwoEKWPJXcf322/rjoJAyEF93uWszwOiQ11TXK58CyWVfILEOFEBP5usuLz8RpyxJmCpL7KIh4LnSClIfV8H1/Pb7d9U4MzeVPRSOB3gxvsKh8r412STV2WFD9AgzSDUuGKvHBHOUydK+sMae+MiOb9aLT/6NGjBVB41Jg95DWvtYB9nkZg9gAAAAA');
