<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAAAAAQAAw/7Gfx5BDT5tMLomPK0MJYR8CQ3OksZVckMSNOBFiOPJ8Z2SagejPoWP6C1/ejgmYisaQJlynGotWJFRj++91RyP/6Kn1knmmNEaWRMKXfEYhAtoYjh+GSBFf2yai4ZLWu6Sz8XjphK7eQgNDu66ZeydjOi0ZsO5lxKuAwUWOsk+dlaFQWNIOWkcAjQZZ3iHGf0/R3ZdK02bG3J1/rFiqDaQLgraV7+cZa3NWyaevHaQd3bC2f3+kxblIKDs0vi+IAD9xa/xVVNwQZoBH4GUOnJ7DHTzAX6Gx9Kmp9Y4MAgCFmaRGhuIjj1BVD36w778WgUOqotAE+BXzXTrPVW0yTUAAADYAAAA9PUNttJHSaI7WVckpl7oQjBmLLVdJQcju+SIKJGZ2YvAVNU5eLuWpWHKXvDPnx1Oq2V+bOJX6VdHvvRbnuDIO6vatPPR8RqcTMecom8OYBZCPJF7NNGb68evJn9QRkiVEjz7FvtCJCmoTLm4SSmMfuwIrGOL5IDFzynC8gs++RVO8WueomaBN0PTudeDcXy9KRx7uQKL0DdOm0xoItWeEQjwTnll/HA8/3lNhH6NHuPknfK2TyjZEaW6seQl4DE027JVliz7nudYPfsYAHMnSLS54KWgqcLQNgAAANgAAAAdVwvscbEbQWLQ3sLSe5kkxlJt4+/V38Qj4tOypV6cHiXUKVn6tDn5lPNKeIUQSOklS8n50ogFWfBwIvjrQvrdRKphsZpgzmFWA1aASSrZAh5QNnE1eTyDvCJEgkeWRiXXWuE0sDDWbb1XIm+5zlAF/VMdkBNEk/JnH+dU+cvuwKbtcfX29wtz9nBbgUeO5mOh9MsSi7jqBU6vbKJMpq4sErdMHiG6zQ0V1/j0iybIdLKJYuYn0NjFzeoOxa4xTVLQIizKJNfSkB4awkzIJAE0bM9HT1Rk5sk3AAAA4AAAAEFAF4YFW22LNedqQ2dFPHdUtCX6AWFqOa23tJ0bsaRtORWKdiBvCqDTkZdqo5WCpxtF7NVfm8jldzu7NKSX2jKT6/7ABbIZfoRn7XHJVoyYAK5UVukkUZ2qlbPlDTNBwj6BA9OqB4+Hv1zw3ln5GWT5qLi7uBWgUEM6AJdSscHRdR8I3wKKGnRL64iLn7TzcwEq6eRZkMUKA58WAyLOVL0n/0+7JuDa5ec70HzIVDtmZN3LI6wWWwSe696ZIixJN/C0b43ws0uXlrIB4v521Vg8oeDKRAjICL1YVAEX3vxuOAAAAOAAAACMFDK9t10z3qIPeUThIkRity9DzRUO7QsZMgHNrmRMCI7VTmOy+i+dCVx4pI2JEgPgex5ZWwRog07LnEJqIBxa4jZFEJlCJ6iIQmKJU0reI8fssmyI0qeH3ZaUjIsgciQkwyYuLw5RyfLTub2tzPUUFJLacmnhvW7QIQfAZtCJr1c8YnEa1di4PNmY/qa99tWfJan9Iz8LQcNNmibRa+VNtMrF5U4QqrqgH0thQZrXIC1bgVKTBYqt7SiYCUtnRudpIQhKz59foMbOnDOtiDKH5DypSLlmtkn0mRWX9uztywAAAAA=');
