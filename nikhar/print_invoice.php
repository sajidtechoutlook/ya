<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
