<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('BB6E62E68D68391EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/dWnDlFJ0XmOoooqALCFVn5GPSnkGBTmUMARrgMdv5eIagO3jxpC/2Vv8Ts1B5DmhZ0UMhAh3hM/ji6RH/ipNnh7Ym3Za0MZ5cjH5vuVTgU+pwTyxJH53I8aJJiLkzQrlPpzG/9YhRIuF8oqAg7QqnqL7jTfjpOA8CkwdgspJgPq1BQiwWp2/uDQAAAC4AAAAKGUGHlbRqZ4vL73Y7notRQ3Jtyp98H1bCGoFEwKHszLhKa+8tnB2uKodnRPjCViaiY/vNZ9H7NtikuPxkSsPB1cW9tkeKojTYylmI/xsiHLvM8xGELbIApSwr5dMLJaIQlrkWznPwP/lFT8mdQ4qkoJfLcviFZt2kKXmz1eM8C39pghP9sj0IH9vpOItBODbyCHiuxNB1gtKeVkGYt0JdnPsPEbWFnrtkhCSmFrDrGa7188N6JB15TUAAACoAAAA23DOLCFrBbOWZO/HZvz9XDYRNtHjjS7YhHyLcrV1HyEe2u4QoYnXqrGcbcoL1YpKDEe7O4/oMNyIprzgLHNbJ7SnLOZH7QywXVjuI6XqmZu9DeZkQXslkK2Y1qFgK8b2F2xMOk2H5j2QvE1P/f86VcV32u7DqFzKzQc6gIxRV3KPzbeKnSvUyyGErwHQMqOqmOiOdwG0k7FXSj8ykdDj3kQBDsyAvGtHNgAAALAAAADUiwBsBRWvcyYNlhDu8bDdAqZu7ubvSjG30sOa0EI0Hdd24U3ANkJMawRdF7ap45yddrXSQdv+5NqGKQYKuNYSMHg4gJmrS2cc9AQZGx6VTP0TJE/g5nI/hv1jejfXi6hRZHDazxeVIiloK7sXZU4mFojXzrRUzY1uIyZgPNivdb2SL2ZQpldMiRSH84Z8teD6qCfjtLYbKANYlMyIRxuJS2rB1nLyD2kTJCLMe7EiazcAAAC4AAAAFLpPmMsFSXc9gzOSak3PpberIhZoh43k4P4ibDhjBN0IT8bdZ5nIMfYN6pwxk5v6+uvM9ohzBrpUQN73tiuD/ItEnHMhEMiTX8U4hvERdCMK4sq6UQsgD+W0ryoBcBrDpOmFthp2XlcypOnIZf2Yh6kjJa3HrkPSQY7Xfyc7oHV5pvIgN6xvm7YBWZN0Bk8/6v3vOwvJNbOraJWo2W4CO+JpwjK2AW8f/RV/DN9nOVFjY+OZOj1/NDgAAADAAAAA9HqTomTSNUnaGfQmSxWHW61ozooJt+pTGabh19jgZBvfTTvVghQ6ecPWtpZ8lR9UcGJa6QH5ha6NJWCoEZj/2F7HRYxK0XcRtQ0Ocn1MmWjaEsvsQWlJtk/iYqqxRamFX3MvIABIf9OjqGdKk3xS6ExIpfcOx8HMzqeGWIZr5vLf9F9bq1jdJyWSvKWDWcCC+9zHvvMpyXls72Fb9jw+ZKj5Axg5D44wGyXXoFxDmhLYlHg9nx8DBIKioVci7/uTAAAAAA==');
