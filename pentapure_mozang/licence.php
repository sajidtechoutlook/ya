<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADIAAAAYsyoDvkmlJUS7LMmByV6eMuXu5tSElj+cdZ6xO0LQTbgfzh/LYxrlonqn//CfZN3w9+RavaKTNIMpjrtGj3mVK7vlWVlEUNOy1b8H8sJp5DZHfQ+GTXBGYXKiqPx/om7ZdD/TiPcQaNC9D/0gRovgDuCXCEF9QYvW5Wf62Tv0trTj51Bw/nUPBA5OhME4pksOXg8PPPFwLpBx69v6NvdsZvuAcYFPFT106zRUG63+Wjvht7krtdpcoFNFuK2iMDO1tMLhprW3zs1AAAAuAAAADiByrqc/Z+nyNOhuA5lPgwPbbqaqToOGso9lD9wKUErOnkfNkUln9Yz6APUAJA0fka7rjCkJ+ZCk1LmmlHOWVWwMRdpfGbZJ7fqfbwy6VW1RJyUd5RM4v11jbePaxMnyoCkgbgF6iTLfXJTsYliP0jbAuBNp32UGRS9oDDPRPHDUEaIlwhTJ7Ph9GCZehbSsZ98hWgLtCONr1sYbchfJMZ3ep6mKoNRWMIxlMfR8/w5P8iVWAprjqI2AAAAyAAAAIPd5KOH5GJJfC1TJrvwbhJjDDH+ulYLRdBOHYX5LNa6/XMT8zQTJyPjpBdM0d80bMkYfKKt+EWUb7U3yG3S2S+46Nkw9g8UAEpdYNFUyGsjMbnM1xDMydipSOWIsGEcEy1RzLKlW57U9cnwsJmqk/eeKxvsKXMtjgm+XtCmHuxwQLUGAZeVifg+f/9QIEAy9+2fimr+u/WepGAxhif/XNAZgKO+miDJ9J50x5IXi5euBx1Cye+R24LHRT70ESGYdyLwlbm1o7DuNwAAANAAAACVqGmtFHFdqgYQ9Sew3dTB5CpKXieraS6gvYDfF+UnUiu+/OpVh5seoP13UM/GcXVMtDzpXEZVOeQpyV46SU6Xx0drCN95TjbQtfNtfJxGTF8SfOa1PQnIvzcZw0mCCbGu6xN6q+iQMsQTg7x6ztVnP04pQE4eQiDKFB2nCgvdKMAtAqz48DzQbpjkmHI0wcYOMYhdABfPzmDPLhGGFpIu/dtBUeky5ruBtVfNXwonx420T/5BH4XO47EsqBzlQbbD6DDwI2SP7IJJjDhEH6z0OAAAANgAAAArJnX5dfuWqQFh0PeBYu/u3ZwqC1zXelNYREPvy/7JuH14DhIflYeZ+L+1yegskFOQu+ouh+7f2WhFYBJdmGyXPhkQG2p5+b9KcHRyr1IQoMx6HnI3lEoSRPK0b4u+AC7NBzru3nPC+gErccPgpPbC556g1gvY07Y5iNRe4J/rdDHOfinbgG1c9lQdRjYd+luBXakYdizI+fBjmHGeFhCnDhQkUkPzzCAWmfaev615XFaaGkaasGmY6Od78aD5JKmMoeJkBL8kR5C376lRkEP5yGhJ2WRmRSEAAAAA');
