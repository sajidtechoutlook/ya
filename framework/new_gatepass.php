<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('341860788D681FFAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/G+Sar6SvyGRNn1gwExfhair33gt8oNKiXWIxxQVeCx7U2Xc1AklztbYyHOSYYRG6n6FGG2ZJ44fm9Nqw2KzBftyY612uLghUy1jy2AAe6an0X5T9NrQuqdtXkr7smsNUFoFDtSJNblmBewvS8nt56MseCnjNghj1E1MwLZzXSCLrAHStL+jx1TQAAACgAAAAXUSv9oxxSEYJnIwUcTktsxjO3dL3Nooqt7MiHddMUVDnqLU+gS9aQStSM0fRhYH0ry+xcEMAJH7004z9K6Z6wvB8Y4bMhb5P371kwpxOnR2SJft1wIu4m9SVnKZynNNnWDxBNUZwR3FcioKtVFhFDaQGE1bGPVKStAkMCCjz71YpqFscX5szQhRcjHJzN5HAEgRLT4dhnLkEYOpAioTkBTUAAACYAAAApY3u3qAkwAvupfmFauKPDAJpZEOEkEmfRilAcBb7HGwy7crB43PU9q62iHsnRbZcAKi+GZUn1QJTaiGx5q478gr6aOt0ZQ1jWhNHFemhFRi2flbLCTalkFSXUJNv9sn1/Jy4Wqsvjhv9tUowYADsH5EaI38f9W4m86U9Mo9eKKj0fkEGmluXyJNcj2x61ek8mqLzJJq6AIo2AAAAoAAAANfP5WLl6hVAws08de6JcBnpHkri5YTdTecW+uJx5kBy9lJjbBAQUXcpDOcNTgau8uyAGkjKlrsCQA7ApZUI9YDc69CAYuGNB1ZlKA71VpPUT+0RIoQ7qqEVfrybiFYjntZycGvIRBKV26YKuQe7oGZRPapSDEGF1oOBSlmaSewkESczKaMowYJLENyeuevPVAWt7YBa27g9BK1KKMMI6OM3AAAAsAAAAMa0U8Qk1nqsY2XrbeKalmr1ze61StzPSDe70boXXA+9/haHr8FvpW1romdl6mR330qIDUkC+N6rAkSziZKk5JVKHp8ZyW+SgOs+SKaoFv8kYNOJR5Dz+cIKj89FUjMSPPa6UjqdfF45ymoIoY4XqOT8rzeRTw7eVMFL+Y+cl272KGnECst/WMt8iiWuMk58cT13wl29ctSzMT8+sIgK5ZSiiDua5Ajorcw16/YjPnepOAAAALAAAABjzdsfCT/GzeqdD/Nq/aGIGwTwIIF3s+fNNkc9iTJKOCnf7PfTC/gFTcwjayQJin2Gw11AtgPfeZ5gL2H9B1eWimqotOpjZDKmMFZ4tpE2ZJrVydDxyG5lOBEtcGvUhP/kPoE+amtIyR/xQGS238+ap3mgSKbBSQANrKmct/5gKrhEsy2HLBNULzkFEoyQX0Veyhbgm0BH/Y9YqtQuWLnkuhXHzAiKEtKzIjZA4t7ODQAAAAA=');
