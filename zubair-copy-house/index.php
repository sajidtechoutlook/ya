<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
