<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADAAAAALy5OsO4O6GdNKt20FfpXc/dxx12EjBBX9r3hoXzX3GMe97B3EaJnEpZP1CREnM9y9+9qifxx9i3TpU2nHl+SmO5yVq5iDhg/VaHSF3TKTp2KQltvfeUmK+g2dyBhltVj5UhwffDgnTacOWMkuVNsZDyrIUqNIQpXbrdq/0AyfZCpbzg1VJM3Y0KKXUq9ZhmUDSdT8wic/bgkC/tJJAm0YSr1+rg78FiSiJ1l9o3iO/op52WRqoRS17lY/1qDIM8aNQAAALAAAACZOfHZPDmj3KOMzKXtglvmU0MrT9wchnSJVHUXnYdpI+EMWssRCL/qPmdYTICJ8XnKX3bFMXxrMGsWA4foLIqltPblRw+GVqyL6DNM4Elc5pE45Mty6KPZah1+NxrcrYP/TCNLnUXDUPaiz37si+Hu1N8eKlMBejTBG6Akg8z3MmvimapsgB7qpujYeIXRQD2qQumMGXV7YT77qK+b/nghcRWJCJ8GMWheOwDRVuWw+jYAAAC4AAAAI1hcnfHu/69/5ZTy6xyOKejs7QbjgJD+M+UFaXXEOeTiEIAM8UO2pACojuBxB2ZAaw0bMTQIE1oFu5aMojlG8Q3Y9nELA9EEk2WD/RIpm/6CR7jpMGzRyq1BsgwnXBosnFcXMU/arHrhUXULdrffF3QKI1T3So6d+PMtfdfh8OEk/T7NCKLdvLbnDggIFpbdVRVk6bPPfRep/LNg7UMtpnNRfCcTcrj5WybCMLLuxo29RMJxip2pnzcAAADAAAAA86FODX8+i4zOc+3E/NDJDi/h+y61mZtfsWrlWq+0xst79u0R7bJdA1jdTMV7RsdJCftW17FcPgMfR7UW6y2SazmtRPwjEGd68BSMC+I/FxP6v0sZ9IGJLA9uaXFDkmkN0vDZ36PK04IF0wmfTUQUqris3ZXg2SGF+UOv4qzYi60lmhQZ//DfD4n/X/G/RsBpG0UlOGde8+Hl7sa2gJeWJzEYK8wgM8J4HKaWlnrPSaCj59orKiH/3bKwUM0FQUJaOAAAAMgAAACVGotAYh5Uz6ISxp0/Ns08PY83UWxvxneODd4qnmSGWAbwz+3Yazs6Rviybgr48W3XMb4EUaHfr2lxhHOs1+LIKIOapgQg+dQLk9xWIkApQtIMLSzFPwwJPhQ2+A/Hqtr7RHRSFEc8+QvHZbqvYFbILrbWFC312WACwWVlMn2XcpoEDwNWCBcpulH+I3HXkW0kL0ZW6o5sa/NxZuIryZlfC8cfX0WyISzCkv/Pg5jCP0fDBk6ZRHy56OORVCn7aIWbQVKobeBAQAAAAAA=');
