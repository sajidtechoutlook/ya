<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8576E8DE8D682838AAQAAAAWAAAABIgAAACABAAAAAAAAAD/H5XhW8r5IhJt13yEth03H1ij4+bDOptfDXRX+MWvjSKXaHzR3WZJwDN4ZU0xhSOkZ1ABJ1TWAWv7E6An6TBSoFckMS/Ec16M1u+lj2eMtrm1acFcjHLLKTea+fYZQRup/HALEQA/K8MTMm6uDXeb4zb3YNz6853SkuxSAcjtaeeB6j2pP1IACzQAAADwAAAATLtav+JNmCOBUPWgXli2VVHJZ92PYW8wScO5rXAIeW50z8vgLmIMg8cALl0M4Z9HMGuJYE9SNPhhk1HkpxNz/u3rR2YJNfqMwiHrby4624vGwJmUfYlMGqNbJsIlAHi/xTw9j1zBeYdOsQwfigbQvNkCXMfP5sCDS9CpuRS+PJSRe4WKrQ/4j9gp1cjHK5iJp4SavgWwudgoOrqYd7Cu2rWZHLXZcM+MgBjJIY8rPFhnqRXncJ25aJ/oAbtfoj3OQXEp0afhkxA4kGnS6SiBxZRa4McL9VsFuXRUw8rkuNe+VE51QT40BGuyr2yHskqjNQAAANAAAABrIqYd9pYsJQH65ujKSveuXEK9LwQQeJL0h+V2k7dyN7Tzekc37NQMX0iA96a4D6hFXIfJ84mTsGYvyWNBfCaDtoWsJl+hirH38HN6R5HimK6+bYE+O45lVEoEpy0ECo1wmv+RTN8h6EmYgDvIe6GRKJRgRD1AWsUD8TS3TWtiICPze3p1NdNGqVG+IWK2GsqJR58JYQ0/4kKVsVto8i4RSaeNk5aHL9C15w2MxyV9+RPPQ6NAqj+vUC9kNvIuQ25I2PY/sdqadDw3QwSnO5AuNgAAANAAAACxQobGCXxb54CDAAjQm8GAo49/U01Dn2scsMQgqaNcfQsNiW++J/oOdxkrpdchI/EbwjrlCSB9AyZE3E9+tq9LRIp0GQendNAk4WLapvvbGurAdmsc/EW6XljqFotqrI8lLyzDSkZT0e+5r9iOeF3zIPaaPDy6oNcRg97FJkzKplVG1W9PwqMlPUZ2uMYsE8Ppe9z623A0DjKkPHNATWZiqMOH2vdvHslif80WdNkDtnSdB7npMcsJ9xfgMTchR743MdTHfmM4sCfbzw1vuS6RNwAAANAAAABZ3v8wyiaZT/uinCiPao8p3r3x1YsnaaoPkQPdCn+6ZfiyuJ8U3YvWcRdMPHb2AkrEMBRbGtBC831BS79CzfMcdmRV++NjPpH9SYakGzfl92A7Rjxbq60+h8M4XC4VDKpIAHto/B9MRNkB09QER4VanXOvPcTXSLRr4oKz1N4KX5CVvbxiVrowyh0i7jungLyz9OkBKuVh6XWkcVVKoBRQwWBsLl44Lzc3YcLmmLqQiz3tjesCkJ0N55sbvUFFe3l8vDgTkBVPhQ3jhc840z2SOAAAANAAAABN/fxanNZh3KJDZCe1mSCe7mQzsBr3wfCB6Z8ZuerJg/LNB8/uaVDHhA9za95lSmmnF+lARbb/DdmyRUr00pJa7egnSPp0+DP0x+5OwnEbdlsrIZOogUZMP5AFueXD56XXt/pP8oaA58a8i/z0w8BmzMeAACSsVtF4bvk0OogEvRaO8mW1uPsPdlzfU+MluR0t+SD4/jkrNHX3fESjfayNsdli7fp1GtAJuCDXF73kSAB7e21n9OmRIg0LlFm6sC7Tdk3tmGrbLIhwOGlGvQGhAAAAAA==');
