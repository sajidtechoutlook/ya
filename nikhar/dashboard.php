<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAACQAAAANlxePFcbzOeH4hI6k8JOFZCKls43PEducYiJKoyxlcX0yC2Rf4wfNCB3sRIo7ZRuAelEVwYwS25n7A5EZKySmFm9gUT2r0i6IjrV+PoejEL+yL0sr1Rn8MN3kqYn/JcrxcpeRPYnraHtkJEe+6kCZ9e81FU8fRqfhhyIjwdqj7RPwBqy3TngZQkMA2l/dI0UNQAAAIgAAAAvqtQxDiarkZkInDsO3zK3tYXMPEgTCeQUqodH2mLh5w0IOG2///d4ith3rq47ujYi4HRLt5imWdhBrWYp2UAgk+VfJbQioM8LnYxJMDFrMZVcBE7+ugkuOQb+0fZZr0yFK7hi3H7qZzeA3fnInu8IkF9q4sGW4UdQrm9hQ2EICwLEV5eowAWZNgAAAJgAAAAA9gjH5fd8JtIBKkiHsXAuT4h916IWsOptZp1/JvA4dMKKBAeiO0JCH8/aDoeUB5PuMCsgbuRkRyw2ajz31/kdjEQ5k9fxL/RKopIpXrMoTWzyIQrmso2UkPcE7V+yLTIMJAmWiGx5uDAP1V/vHBynSk7e8FDCcVKRMDseYuF7yN9LE7gvtdvUi+LBD9UZNN8E9oEz/S6JCjcAAACgAAAArykJ5C2XqVmYTTFQqFA7v4tyAB9dPvYJEqIiuoKzbH7lhRas1fCvOUw1BVPh7DDyeerH+G5pohV3TKBaMFTf9kleiOTyIWkJVgvt6uTrtsLGINX0oDFEH/bgOfV3E4T295kWHx6I8YMlEnkzGKYIuzfawpM2ryTIRPWzmz/T+P6/wK/N0OSfl13+r4KJxJLiC2mgBGVCtj05R2rAKIPWKjgAAACgAAAAxoFMvdLj0PftCWHZ6vcQjfYfX0+/IXGWRZWqHLazIBmLGtamXBVl7pGt6xRZK+EnVrva/MsiO9ZCiKk59CoGmCEGAg2wW3ClzUU0RmKS7nhnj1c0tpHoAY9mrWlqjxjMp3mLFGPB/n3pExeUBKjkfG/mTsElIEHUjfgIG5b2mTS8fq0OYoVG8uTPgIBG6IwXnNe3lD/qJ4YcodufLOGAHgAAAAA=');
