<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
