<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
