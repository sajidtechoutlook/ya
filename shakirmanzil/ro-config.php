<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8576E8DE8D682838AAQAAAAWAAAABIgAAACABAAAAAAAAAD/igsj3MrvNW/zVilP8KMoauok0P4hE78ciKxl9l32cKTJxN7+6t0a7boDiY64w7GFm6UtGx+kA/SEjV/TMRK+zFRVB6f+O+Bv2sRDONfLsAR7Sbdll5H2eg9k2LSpyEm9uhMH6S+QuPYguApqlAtv5zhD+dg4ROLRsjsC9F4cdPsI/S4SksfZMzQAAACwAAAA3nx9uIUh88c9hxQ61A+3wPjr693tuYGWsNrXs1t4e0batg+fKLBAqwiKVAKSIaHY7DlUbls8K30Qc/AE8fecVtGoxVHuDNRp38U5YBlHIIf5ww6kilhkeaWBocOrMZ8PSce+vd0Qy5IFIBY8cjYOzw0sLIKtR0FDoG7yD2ys9eKYnk3VfVYsFm4zLYZMHvzu/dxvtRovL7swd3a2evAfTDQ7OTBL82iUmPzGibT+r4k1AAAAsAAAAGPmXJ3H5x2mQxgOoK3m5k+pVxCVXVt44ahvNfGeX8tNQ6bHIIaqyO0iiE7Rf65ACH7gj76BoAKIrD+6eV5kQoeXDtXgwS/UzFP0w9AO3R+oETEb53Yc+42+hIpPILCqUh7HPYJnQERpcSWf4cJ5isV/x6FVj98g5K6Rl6N6sLbiZAN/PZihWtrtZRBKrJfW7T+2bHgyzCCmpI6dje4RMqsEFaz+rrmauEmIBKUiyEosNgAAALgAAACH8A9TNW4JSZYt02hjDqPKkewRtw8j+AwMKbvgppPv1f7as1FD2JVh7l7AAfJgc8Y7juXOWYAkkAmrGwbY9FrH903x9etMOXQaXyC5yGcQDeEPGJdOx5b4Y7c3FOUldf2Q/B9bPkZbjd05LSzGyZAIg7lywG0CqMOnhZGCUN6nv9m+3wVfa5q9avb1vHzGps0jakpxJbp97E8ipr+4hmPfH1T12LVaF81+BudsK9xsb35UuJE9MMHTNwAAALgAAAD0XS2toXysW+aRDoCNjxQPjBDnfIaMsNIi+a7RMvJ7Le7QLMb31OCjdfhY7yUsZ3qNUAUDdeV/ehIgybHMTL5dmRI+n2vMLgFcgSMg10z86Gu1qSkMFaZzLEklI4BkY5zZfYjfg8gfvUOypiG4KY5n/UsgWv1DvjSG/HcqAoOUe4GITcDUdWwFgB5LS4waD1TkR1s9oZujQYyC6a904aRJwRfXqgWoiSSJJC7cBaVvrYVYfTehvw96OAAAALgAAACkyBA3q5S20VsH97F0aqgUh2jpREcIyNLhHWU5l2hEllxwrLIL4OkxsJB4Q+gN6lPXecEiXbLi/NILTqtMtApXqXI+KzCZYflYQ8ttY2eUYDgP4kUW+b+AxSMBAIXQ/J8smRU4n+V1UQKXRfsHwsFLdS7sxGmYza0a8D+5Yji2DOsE3sYQ+hmCXKyoWPv3JV8zqEJlhcXrG4nFiheKNHU1gvfoLZGT3PutCpdFrGrSWsrtgav9iezoAAAAAA==');