<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
