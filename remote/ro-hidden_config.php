<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
