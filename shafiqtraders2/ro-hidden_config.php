<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
