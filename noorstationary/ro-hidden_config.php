<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
