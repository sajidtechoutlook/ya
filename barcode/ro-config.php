<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAACwAAAAW2wlPFNzKfci2dhBtTNSh8AYsIrrnnsK/vTvS13kYj4oMdSDTlXnzYRhhrLvSusdBAgHckBYmrmqYlmnCQM1YKoUk2LAiYC3NcbpWIdH9ZS8I1Cq6lOLS9AmVQ97K3LpKu1o0tNzPBtOKY4kyELIrbq/VYkgeUYMcy33oK6v72mhA5CJXSVfaxvspzoAlAoFbpvbcmCFjkEPkwus920j1MSC1YzBCGyDVFEw3kKiQaY1AAAAuAAAAKsy5ogCj0NsgdxtdlSr2hOUWuCW9vXyzAZZLCA28hjn8d3LAAHm+XxxeE025KMblIq3Pm75/m7cXrAAHo4nsBaUU7HH+sXmM8/CFdW1APjox0KYMxXylANV8t0f+9B1ES7FE3jCw/IPM1gEpiGJ2I/LBi2ZWhChe6uEAptjEO652RGfWOm8YMEUfoJGx+gC1xTsSGUDNz+QVL+QPVJoLO3C28iNIE6wbB/wWpj2QYi0DdUFaJ4x7tA2AAAAuAAAADftEpmqK7er5Ygehe3UV07ZUWv1zn+RRKUrInpAY1etMe+uOSD5AqbxEqFb/0p4NijLyuSUuUm7oHjjQzFGWBjMKoDb9qV6jTKU395DMyUu9g7JHB0UvFNXM0YNKE0cT7JGLXxlckfF4gzTQ+XxcE9HUC0hXd/KmJZ0zoCDWga14JmZlhxgVn/R+L8I2Sh4stQ/7BqEaik+H7HfAaRs1YgaMVaS8ZO5b1WnVqh3jEHPAyP6Zjz7CLI3AAAAuAAAAKuIEDd3TdPfWKtXpQMLY958ugrOaNujvBncFQjZHhxlLFlhsmPnLKPZsUznTSOv1KQbFd5FPskQVir+9n3xhwoNsVmUCTVZiIJ7npjuivO1mjoo4YVyKl1bMWCLwDtc6uVsaa5U5M7vyu+bWeC0z20m/WfaQo6Gkcc+6IHMg76BCTCQ1VxXxDmjuWIu9ng6rqPB2+hNuLCN6z/FmMEjhPS4squrrLucAeGWcRl+lanHv7tlJbAzMjQ4AAAAuAAAAAIH+MHggtK01lkVBQxkZhAkOGpDU1yqP7nCi6KgZv0uuHqZBoS/pw/ar4xp8/XRed09+A9N4cGOX/FF0RJUUUXJ70HoAsZgNDosPhHsAaFqXdqhNbrUZR506Dfp2aeb7Zv75LC4R5i8YXBPTxvJhZz1VlxP5kfwA/WV/RA9XAqgjpKIrnDI5F59y3N0gFEXwD+Wq9Iuo5MNCqKIGSn0TrD908ZEvS76Nqo0B6k0PvueyD8ie5s1PWoAAAAA');
