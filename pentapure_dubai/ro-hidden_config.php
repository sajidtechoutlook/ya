<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
