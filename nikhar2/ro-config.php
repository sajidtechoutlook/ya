<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAAC4AAAAtQVueuWIoHbH1stAIwmi4syRgRrRTuEmZGXCHqYuecTpLbUpIs5euMJXVKtmUur3cljsLVzBYkAGGv6mNojWbCzkZIlRIe4Vdigru+cZO7MeLuRsneiq4lcpOGtQ9PInD8Po4rCoTDkkWnFCK+cppWxL0h95FcfEK9ifX/6/mlKbv/Wps75ix1cqzgveNRW6SclnFIo12giZeV9WVTCmU8yUotdDgC4GKqchxrkN9W/W1KlufqxOOzUAAACwAAAA3Hor7l+SkxTqbth2RgEOwoH33zB2WoxIZkebxAE3ggqu997/ftiHWyeQc6svM/CPEBcH4VAj+5VZbCb86Rc7tNQsI5ACEUEr3wj++lftH4J1+iZJ6DosHoBotKriEaYTz3IYbAcz5R/u0YoiswxRSOzWa+IpZgmj+0S4LAFak4MbilIjqgCsZpos+tL1bt0vvUp6o+gICKMmUGm8gL0/hjtxM/Wi/gH4tJ+1a+WUZLk2AAAAsAAAAP05+c6HKM4lKipgKmEhJg0jcDAfOfMs8HYQ7idRE8z+GjgPXLvWz3bpG7mKD1tkEQ47FIed26/l/eUc7rBXcwFwG+ONM4Eu3ee0EBUowZ09LKGrCpYwS6OgxbOxllRPaTdKjU+gLbI7rq0QeQ4z0xmjoIw9Uj0sD2QqXBdDDCtHU0v6LJyA2meGpRLJO+6ZS+U4TC8FaQis/uQGiiLNHLClBkok+whHmiI264vYASauNwAAALgAAADij9z0T82000I2Yi8ooRHTpccdbyunFpoxrZb9JFHq8Lh6yuRGlxBk6jTs9QQwmUGJ8XoYKKr8hKVFzFGCi/1wAcWryjDwmQg1h0LQsXxkynnC6P74Fs44J/FF0WHUMJhQ01F6Fk0NW1ZfbKylzNVQ0ScKbfLSO8LkA1GcfP9GCRA2EKj44LtfKp53kCe5V/QRo6mkLHaJGOyBhAWzrkLPkAdqF6FYzQ6olImT5wLy1yadU8Kxp8OqOAAAAMAAAACUgjO/ENXJIwGz1GU8zWCC4VknzvwLRArbEtmf0SPPS2UZk47l7MjLaKtSTANACtv0ZsQ2+f4HkhU93CWvklCURx/gGGi0ELUV111d134WLTOnHV4XwU3S/noFwTK/To59l3naFfe0AcgfmscMYBeUqqTOaxnkoxe12oauT9Ag+M2XA1lZhGoubs6qrzYL7m8s6Tm0unRkKMrjVxD1T6u1kz7iBOTz54bb/8MSntJYH8sL1d2rvdVhitI0YGZZzIEAAAAA');
