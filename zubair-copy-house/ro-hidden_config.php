<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
