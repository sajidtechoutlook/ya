<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
