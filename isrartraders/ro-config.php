<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAADQAAAAqeefvE+zMco/M07TLGYn6OPIlgY59OZ7tUWZ6N9gnK1ZcJmWd0FMD9UnsZsBNWL6J/ChmyYBMk1eDxRGl8DfsPLrR4ZqggCe+F+nsrWV35t9GcBc28vyW+WHBncUncpRL4CjRnb521q+6y0cvQ6aP5OnYuPr4xs0UEpLv49NXdC06NOS/xlOqsT8rpdZQ/ucgoYxEsstW/uO7vewW9/YbMCzDyOFIaOZaNdMe+hOE2AwD81ZT4B6kRb9aukXaPifZXdW+kiUAEWPfviSLoy4XzUAAADAAAAAwzkQ+Q2NJJ2Z+tiAqJPNSGiaCocZxft8DUmrbKZSCJqwj02AGNvycTHbeAQpUeZfwWU+Li/tW5ngfD/T7Jb8FBsfeZUogchloENbF/XA5wJD3kl/DjICoyu6d328GRO3cVh4wuPzsaoQAjclf3yPCxNqe8Ry3OIdLCv0QEBZYyGpikm47bNqGDa3WGqIQHRMIDwAz8ssbEiwGHGSD2p6r8SheJZ+bDxeGkE7vCuaFgdix33PGWSr1BYBAyZzSxeGNgAAAMgAAACP9KSGbVECKkHxO3kv90f8TKU6F1iFWVssNog1Db0foyMSKn/kMk9wt5FUoFts2/mjcrBz7HNeo8tzLzvbfer2V8udngk9YorVJ5GqjckR99i93SRJGzYS4cT5yYTLH78Cdln3H1HOI1VW0Fkw+8GgouBZTQ/Qp2GPVUDRCfb2fwBHINH31SyWdN8JyP989Ko2mPlek5Z3cJ51/AHReX9NwbhH7dobYItGR318S+LEu3TkCK/QETq5IQwVBEfylE2X4td8czISOTcAAADQAAAAuwz8U38rQHpH9E123c2sxqz8F8C76Jv7WIbN/4mFieIEeY7HG4anYuxZNXHiGH7K3xy8Bo5V+OA3FMKPlwQ78kcP1+2cVuES6QSBXeeYTr1ow/DK//jLqVab+91dMuKjQSdtGzmdZVbQirJX92KXSFJqCL/oSIHocutzIPNGqvpQY+5QP96UuexajpkeWHaz18lEiM8x8Pr55ar7ASxwWeeyhf1h9QR+twpdOouw4UkDPTqtrcaIVVQuMOeqXMQyUbTrSi/sKwM1mbclm/s8CDgAAADQAAAAmfRFwnwNkHSr1R4yv2Fw6RpdStB0rWojlpyGJc8w5X6amCNJ+ZAr400KZ/JvV69fDl+sRx6wCgoGPbwBfeuJffLST2GAJWCTbfpO+wpCR5xyQ6c5SDj5kPMbnTUFKgmrLkO7JtWtvYLP5BcWZ6gIguQ3HVtWbFdBWfH3Se31mGj0rmwqp9IQ0uPpG++2w3mZfcJVEMFDxBbX9/buhlptPBfeFkeNjz8HATkcHDRow+k4g/QOA6DkSu1QvPp9b6IHma0M+gwzwMsiOGO0Ji1WRwAAAAA=');
