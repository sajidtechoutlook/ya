<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
