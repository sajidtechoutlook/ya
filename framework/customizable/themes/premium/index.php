<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAACQAAAAE8IF9vpGyov/kkKr+vY/B/pRFHaWZkdKVZ9MDXD0SACgLRq80mfPxdLYN65Tw72d/g6Ye6OIrk1pXeLUUHD2sPueLjI3ftvXMIzFmc6zlHu03u++tPbjYECEIL76Kk3eBxgasz+IthQudYDXce4yWDQWVcPRNLbsuZo66Tj8YRV3R+gtG8hOpp4nRpO9TrLUNQAAAIAAAACJveOoSND9BvV12MfnpJZChjEVoevI8L5K94476+VFMdfisDKQ05PePFgrhaq6f1oKH3lqyC7vznQgNoZqvAeTtPLEMuPK7nMStBjd90Bq6kOAgxL1Gi+t3cASOEwe50iG4OuhOnkDRZIBuKJFNHd6RXYEpeTYuSugmLDcVyBVizYAAACQAAAAkBXRQXjWqIV49VS4PebE2t4GzSUPEoqR38On/8d3EFEE2hYmKWXAHrs4WQJ+15PWNfhNSPso7UvX07pq03TnPTEY40SXHFF+OkxGfpSRfb9TulKIj7/OlhND4j7BB+bWOjNIOVqhqGZ99an4S4HPzn1xI/Uw93qZ5xksZSRfdxJAESSeDtkmbAFGQb/UGgVGNwAAAJgAAAAVemVqNilv77/DxA5rYghGmrToIq74AbDhv8yssI6U+SV46HZRbGn2vDjrCWjMg+nCxarpTrCd3IpR6TZCJCUEF4qbYyR7wDIPxZQlqfgH4n34ou9Y0j552K/1yRaG2wVUjgnyWdI+PVFGz1SKsP3dco+kRcA5MozXGEEmlfSo8vAoow0+v1iq2binWHsoCY0MpjXxQVVzFDgAAACgAAAAgx2N/FUSQjF7gTXGIE5XaqHsjtyDM4bKKrYBd4OjKnsv8/imQfGnxv4w72f/zc3XbMmNXR+ycWOGRtQ4nayJdG8AnN/R1t+eUAhVkyBPdlZgC7eWuv0KmrRHHneNgbLnX38362Ql+v4WWI/0Mz2kuFktKpBTWofOl/FNEFoi9sIIS9HbbQUCpRFKKNqKUlNTV2a+5dpwaeaQrl8w/cSVHAAAAAA=');
