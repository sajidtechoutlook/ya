<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADIAAAAySNn+gHiSb0W0XIm/JBR4rnLydY/zbPx1D3CxzNka9ek7+UPbRVm6S02H+slC1um+9wdtUuvj8kySRRyChSBGJsWdN6iK5N6FSMPTo3uPTB/iMiSM40rpIX3acBcYAoJYqrd23dPNl5CoRZM8e2Jkc5We9pDn8RJSTebgCUeOHovv9uDVeCpKvG6ThasRqFlBIfQpt4iByF3Y1FScvArf5MMgbNbFXJOTdCPKVdTx0n5zgLZysIQf4YlZlMyjfibBf6fCoOEDLg1AAAAuAAAAFetQWPxbURv/Puq+MTlLW/dywt3tvPmBJaHEn5hYYjiMcCTbG+lPpKkcCSPkQ9OJ4bxfFwJB4yQCD27GQdLSfwHXdzkzeZuRUEeao1TN06f/MEilcDUsbmRJ5MHg1h/dn3O+sWGjkSpZS9MqkY6Vc8dUujBxEBowPSl8ru3HdOtiUD4Sm1KKlORMnh1rJ6kkra0FdyFppsXJLLruz8ngrjBl1hELVbKlOcurZzbQAKwkbHjkXGwvC82AAAAwAAAAK83F8imDRYmFbvKIiu20kTy82eELdpPyj8M7bi3gvGS16CDneQ/rUi6JfHmtVT8Bsn+vQANi+ZDxqyPl1JY5dq+Xwjku4FJmaKsKoZpfkkg8k6Yv0Rf9mQjGia6RzLOl3PJ3JZQAbqBKfRdxvA6Gm1RzSG4MUszvKIFRSzBQX1RcgUmTSz2x00750WVZ2zS4oMm5ImJ2gWyluarSLvlBAOsfGE4wHPReNDz2eMksmSsQdFJU1Bkzm0uvIUpMZcnTzcAAADIAAAAcBR8vmNdvXvkkTItBWLEWQdUEzoJAXhizIS/RvulT+C2B3vJ108noIRYn4FIgrnV/b6zJ9kHuaVsVfz3sbLU6B7nI1jMX0Yv8KicNQsqadCG5UdUmmYM/FwxRY6vUmsdILxPy9Ig+pD6mZcw5UuA7OiZgIzEflOK+cq0z8mo5GETddYy3atikxktUXkgIQbbnfOoM99joSLJMdM0ss9WlLOFmSY6LyC3y1u6a1wkHq9NVkTjkN2JwR9WnvcuR4oQMPHRxC9n5ck4AAAA0AAAAMIcm/6zmhasCtdBWG3qKr6jP7bs+W8GyVNu8tHGnOcw/siIPVoyrpQ9O3dBkvW+ljlQo3RkrQXONuCQrMp7C3Bs/X5/2mBoAnYPi9X6GnLzyFxjUMwM1Q0vnkytCJ7JzVBSG0FcIJIXCnwfIRStwyiItPF7s6pXa3Uzb8yKAYPslIjx3Rnfo3bFtO4lDOlBv02gLFdppQYIWtgT+Mw81LU8GEW6C8Qm+v+NNb1TPuljpIpM02K0suzme/Jhh8BQ1egfY/4mZoUrENJoDUJePMQAAAAA');
