<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
