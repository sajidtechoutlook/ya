<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
