<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
