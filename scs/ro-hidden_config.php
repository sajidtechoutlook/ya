<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
