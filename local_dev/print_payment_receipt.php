<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
