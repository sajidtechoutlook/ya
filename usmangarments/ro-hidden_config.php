<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
