<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('2E7E01458D682A30AAQAAAAWAAAABIgAAACABAAAAAAAAAD/eRpi3nnOYT1E5d8F6RWEsvyYlj4t4/X/0BqMaFF6Zkm9N2nIna54ey1JB4DtlASF+KeI/RCIYOK+WPIL5bvRon7FEwwtcpd0QuIwpVaOD7csNb+kgVc+tYgLJ0Qaxx3N9xNOzm91oiJfv1aX3ZvE4fL2/oD88GnclWWVULkyUbF8gkSUksc5OTQAAACgAAAA9WjVLzBGqJwR/tX9JzyywDmaTUg2Nc5A9wTznQhnwtvkX1f6bG5pigLZWE78Lku0DG7AAb7oUP7T5nRiUyOVmSBTMckwmbiGPbqDNc++gjoXxm0uIatdVdfmifmZztuWwW/kfI+tOoUH/rZeNmGi1IgC2c9FsWXPVDJyKgDxTmfzCxY3bRQSEMG7HJkEFSBLZKrNN+aRVSk/45k6vyRKhjUAAACoAAAAEYRtv6q9MnD1WrIbH59gqdtB02oaO3suzZylP6k0SDg2prH0A5ViG9wDl+00hP30q5F+vXIMouPI4uS64GPsKbor5OqS0/Iio4KXTgZPTXD2M6AWS19pABQf3n9f+C6KJ5FA5pBKJ3KsT18hRYioFH3EFxWjmChY2OjwAXkaj19G1bcauy78qqQ2HGZszv1Zdz2DEhCEU6CdVHR8lHgJ5HeAGXyPxcHWNgAAALAAAAByb8aGGaPfq3AYkP3xhTRVV0KEKfg389gG19qQx5gmC09/nB0JMh2PJtMaUUxLRw0wyiDbjRgQKc5Dz26AZg8AmPgcpO73eFFN/Rj9mRzFu9t1sq/r2JAUmr0ke7zp6NkP4PaWqGQ7Pg5lIhHJd53n5e9cwmpksaZLEL4lM/SliD4x+ya5N2O8hLwwP7fmbfrgFJYxf9gj0Bhpj1nTBBIsvxknaogPjzzT+BnkRpnZOjcAAACoAAAA3FV45x+ylz5dGLRL6qBz5LemJyP+KPKtkamqQt0K6muFbZQu4CV/hS1wNwqDTwiX6FKumDQnwlKnYfMIaKGzQw2twQuYLBzCxbeSfiPoaW3M+yqxl5aX49ojQ3rrcn5BRyMM9WuIE2nlEwsmaGeyFO1yKSX6XuEB29AJx8reGODiF3g1hTn3lFf33Ct8dIxnEkG5DfBVrhLmP2GSFedk6p08sfnVu+bmOAAAALAAAADQ2dxqvgSy+xsBMVKfxBGNUVWybPKWakUccG63EJdZ27mwIJuR7LM0wHgNt2/E9dOAibfxj+aCCpucxMexeBydcjgK66PkQVXYkoptYOAl7mlDEaStUVQXAdvBXS0xZeyakgEVytfK79lI63BHRpaUkCn0Pt+trcY86wK5TUY0JxaPk50MopoCTFB2TLF6fni6nd60JUSroRuoQ/b0v0idB2uSDlEPN1KE1SMH1nubTAAAAAA=');
