<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
