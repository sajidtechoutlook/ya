<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8576E8DE8D682838AAQAAAAWAAAABIgAAACABAAAAAAAAAD/H5XhW8r5IhJt13yEth03H1ij4+bDOptfDXRX+MWvjSKXaHzR3WZJwDN4ZU0xhSOkZ1ABJ1TWAWv7E6An6TBSoFckMS/Ec16M1u+lj2eMtrm1acFcjHLLKTea+fYZQRup/HALEQA/K8MTMm6uDXeb4zb3YNz6853SkuxSAcjtaeeB6j2pP1IACzQAAAC4AAAAcBGVGFGYJA/f74uL9UVRfQVaH1bfnUaXJAPdNcMEOtYF5W8gKbZr0h4jZnKd91Y+0tpAkEo8NNlZRLraHzzLdYN5Mf5bh2yACGF6VwdcnDO2CBuoQJQ7BuepZgpsI7pC6Rfqz2lAqTPSX/HDYQDLnEEMplWMQcEoqZ1JAz26NGAWYYuBYRHVj49Jn8w/bU0n+mBFhQqy/Af4lTcmt9ZyCS2ez20Msf5lDoc8e/RGyvZIW8YrqUD/GTUAAAC4AAAAvTEfyM5uBuDe9fcxZ/nAtb+EBYPGRILt4Xl2f05Swq1/OGks7kbIP5I7crisjPUrl534S/qnYwcvTwQAEb522hVIbc12ieAduU5oORAotpk+zsYPgGRXVJKjCjMDBjnYHgrk1awzSvQe2+4gBB3WnaudDFOLx5rIHZNjFv5Lpk8eFOX55OYczEjjYEv2T36BEkS0n+a/HN6AHOx4dqUdc91bQb2gWKoORy1rPEhJSuqQCx24Imx5nzYAAADAAAAAsDKONXrvfxr3vw85eKu4M/sk+IZ7x2ngWBpIrhD7rrXnMOx2Tb5M1i5eDwJHgtEpS0zVTF7Z9ejZcMDa95BmRRHlpaO75JNih6nMHeyeAy/hK/4YdxyZtyn/xxphC9mKf1GO1Z/CPNaScCOwmZYbuNGUQLaAQIO7nmeBm1zLzcBedcIDgmwJLQ90uOlwyNexVCCky2uUM9dntRXsopsH2ELRfi0EiaEH/tMWtiMkkd1psBc9ewK+7XRDxBbfqQAiNwAAAMAAAADA/QV1SmB/nwiK3soNwmPTlJ6jlHmrxaysCUI+swJmmTYZTOhGGH50b+YXO6Pf5U35Oi6hTGburiTX4NNBysraJlavl3XkiMMnC4EOQlkJNpTV77y3vn2ha4wYCsee3sK4hAJycTYbvjZiIgULsgL9IrrVNdVoVlgR6rmvM8ENSHlrLRwI5bNd/+OidbElLP79ZhMBL0mRhcwaTaqne/6n3YSAn6rk6vMO7k/Kln0tuxxxlVT3kcm6zEghyo2EN5M4AAAAwAAAAIlrWKuZTAi6PC6OwrGhlia9CyUfrSBO1H47JnKzaEBVwYhNotCepPxEwK0tIfyaEGOB88ypNOyYgEsUDJZA3/ZbqG6gNmOgwOA1vDRrwWvsOCX3DmhVKrITcoheCfhf7rcUL+5rkLBZkvg743xpODD3G70iMf1wlWX7ekTtM6aZ6o1gt3a2yzGoS1nkdwtn6kr7uGqMlrSXKJCVBDMK9ndcEZZLTTrygACdCBajoFZ0PYeYGv1X7gqMmy4Beunm4gAAAAA=');
