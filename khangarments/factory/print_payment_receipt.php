<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
