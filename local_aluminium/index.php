<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
