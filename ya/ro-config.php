<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAADAAAAA72eOk6HgEemJ6+AEbm2wzt/5RIBQC/quVAaf+zcr/TkTRM/iQYAsuQ6bRgtuQ8bNSGe+KenbS/bt97F+WTi7LKGR3nsV42CnDrc/94EV3+g598+tS0zfsOUM8WOVm5ihrJb+FnctGjS++yIGH7Vl2r2RQ9gjycoVT0HV4vrtrxBwbh9iMUJSIkGJvvucKYtERAiEUk1zfCom55ou/UQRQlxm91bTb2p8CWreMe+GeS+KxqjHRgbwb1jVw9k9BUM6NQAAALgAAACh3LqAYcCKsxZcvrOQ50CIeGioMCVrHT19IE7Arwkcg4Jmn8K8uuJy0lkEXUrtZ4Aph8q4rsqFQRbZ/RTMqiZPZgbMqsco4/2VSkfr7T4uoAFhmxIQT1RFp6tS7EOZEMZmazYP/AJQTsALUIJjmOEc88vpJ+rqmrxKl+hfWjnn5ftLR/S6q9VvHBetV4KewjmkwiNH1qfvTjXaftSd/d+4wRQNbWBO4N4ec2frDh4OY+4GxG/mGoQ4NgAAALgAAADp6V7G3h6WO0Q9iMzuyTkXhuuujz6RtNgJ4EvarWLTTiBM4Kv0yidC+vphl+O9Z8bpMuKQoJnwoa69WrIbCYkD5PCKgFJn+sGags3+3NM09tU7Ntb4aS6xLMu7P+adWxHPKTUm+ROmmyaRN5OmOjOddlbRAclPTEDqZsZEzAOxzIm0Wmgfu1K0wk2Rlsm0AvObuIuZd/iHTkse5G1TwOKJB6USuoE3YRfw7LAfNoQqxYv1rNfgZKE0NwAAAMgAAACAxPgn/AP7ZbY/hTMnBjNaLqJcYazIcrscHjrnPgZjPhdDQk3rpXaL+WnGrHI1WFDU27DNU/Hn0HW13P221kF5VGwpn8WySzz63gd9hXCquhFNMqsCIKFaEaPItHh2CJ8yFTUfUDDaCbeGR2uvEB61f+LDvqwUFgfxgpB+G5z0plL7PHSkpNxsJJIMXVWO10WfXg427PPvykQrHp+b/vaMJinG0ECXX0tJ+WP5H4P6BV44YqbrPa0orLbbEx8PZfIdww/QeA9pxTgAAADIAAAAfEeIkkmPh9uJ/gRN/wgxYRHT5kE+wcX5W4fcYM0n4htFHmulpBbWIKk6K8QCx5DNdRYMR0RMBxxc3m6GsDDm7JQP0HYggZC9W9HWX4lClE6KXjODQTvg9+uDsM4rJsAmZS6oRaluXI1c7tT9nURvKTMVqD7T/QYpDA9uv4vA240Nv7mMZXaO1Uo/+X6o72bSCOb8jRlj/XPEcl2x/lkIlA1iPrXUxNYjrPN9OiPQY3FahIFHpiG8hS5OEShT9HoUuHO2ju6uHh0AAAAA');
