<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
