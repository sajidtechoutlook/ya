<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAADIAAAA8LDySjreYvd8V4vSRfGysZdAhSI5SZ7ZIbdBvXiHJOOlSqku8zXtuzv+NuFo6QFMGlex8Ahb4URz01AiZPPaVst4usU4kayeDOfsoQUtGpK4V5PY2XTfYYh2w9KkLgEnK6I5c2SALt9CEE7snnSfL87F4yPXBbieYoBH6Wo1Ynr9iAzfcG1za7952bIaQu/pMFIDILoR1+8CycSCk0uwkAlxU3W3QRUTrypEBLzDwyZ5q4BNqcq+peVFItU9irXM62p95mutUYs1AAAAuAAAABy/7yZOZXsM0HV5FCp2KjFcXq82vwGWDQsDq+CO6J1JEgKAsLERx2PYcnWW5ibi5Pk9LkCGcUn2paaZNBjwQNM2NAKOKzPwB4De+ea/erk0oixyiADTxBD6n9IObRVu9MOTJblwQhxkIcjzZgDtf3GY6gqL1bB3AbALwP0pt2OhdNAeig9RUFLwm0Aqw85mHMXph28bEl+jGKkdTNJb8cdX+aXJdI3fT730IvvWdoKIIWy0zfiFnGQ2AAAAwAAAAI+9ohv4G6chysFVYyVhKA+C0daMZel/kWw6T6pfqchqxKXuoEhezSWIm3EjUkZrjqyUPaD4xC1ya/Mh+V4dnx3r5WL/poOo5hUPhjHRJLrrvdGFgJbNIIWrgq6/e33bsZBDOzbcS3QIqyGIu2BsC/XY0esxOyiT78ilxE/mgle3cO+jF+bjVFHWyqTBA5KUZAWOzfuTpDZ0fMYDkkjV/dLFJODkza4KU+cAohdgr0muqc6IlYJ9R0CLadA3Na0ANTcAAADIAAAAUZP1KFwjvgDKVOuIDE6nJirT45h7uGkoUIq5E0la6kA73CpZH6MGBZXBthmGIWO3SFAoEojhmfcuiZ1FC3TV+3MiHxsS604hivLl2KL2gVZcqiTaRhnbCB4ki85JKPk+j1DdHCasb6PHfSWPiCB/u/qJ6PylGIgSQzyz0rBeX0GOtrpXx3QWJWHeMlMl4DGqqfDmIWHq2+FzG68SzUUeLSk+ZCXsl4WNlpXzjGADAsNoB3uQWys3wCGdeuCvR6K4VKw6D/BZZ4g4AAAA0AAAADr+lofAjx7RDW0yNvvrNH+/uX060+vzQ3yu2ahMTNJxAcjAtAMqWu33ubZ1+ceSNo7XQpLBe181lDxh93/qBrHfAJWlpaM0hCwHlmp8zYKh+HdJN9y7fPcQrODq7yEhe6XRQ/NXCf35ngyslOkuVfPefqn1t+evcLmTCg75JFm9sPM6bZexIK3AIVhJs17wNreGDU53IEUIdFtTIqGxR75+UBN5YK79VMHzSo+IzyCrc4tYfC1WiwBqyBQYZAgTYx3BH0zXklFsQACcGZTr9tsAAAAA');
