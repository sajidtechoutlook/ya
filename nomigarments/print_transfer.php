<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
