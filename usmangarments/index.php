<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
