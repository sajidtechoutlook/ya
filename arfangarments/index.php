<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAADoAAAAC0Lnfnm4qYploykOB47M12yE7KxUmqQvZwHo+22uv8GL3NazTxx4JxqDAzPObbyb0+MBALMJp2+RBe+eqV1LcH6v3HlFIz5bf+o6N2w+ZiLjgk6vMbgdmzQkc2JYJJBnW0lXcPLWaP7WWkA7M6OViXahk86n5XdS3OCmNvnpVuVLig1zqug6ygltRkU2hbUGSaTlP/LHjnsQiI/vPfTCz2t/VesmzjZw0NMrzbS60S1K5b9c7hJY+N356pjtYYthut7/Z346ZsgcoOk4qMVLQHySV//U5mpqeLtBWwVYLznlnTnxPdN2PTUAAADQAAAA9C+4+hiIgAr6Au6dNoVJXl6O1VhV/1Q1wiiT7mO2CvtWlDblWCjS3DmZsU+GPZkCdBflTDtNF2feEkzjmnkuQDWcJu2+jyWgZ4SQkxZzu2y8C19MxeDWZPDsO5n0bRoNsbI+o9hO5D+Gh43HQF8qlQecdda9YjKYlly/6VaLn8CxlavuLVjpUMIxG+WC0DyWA+vn7BTaMAglZEIdNhDYCZSiayvY0PaVcYBqfHokjIYbUVZEkH3mAjivCt0DTsxwrVAo2dD1H6zmhkq9w1wKfzYAAADYAAAAajg5t4y0j4E6Jbp4Uc85sPUB47ohzzsfBcEC4ueY00ycH/6WcA55Kp4FSoZREZCWwAnX3kStgf+6V0HgvTKPt1hm1G4QSqnQNaRk55EmoCc+3zOOqRNsq5sZqgE3YyyIAongFuEcdKzYH+ky29aJZ1OWyAbGHAaJrU43t6qfqpTmy9TKT16Yqmd78UjWW8Vg1Yj0W9l5aUgTH9o8jHEkY3QIi/7jWy1MmOTV5F795X4TmH1+bXlMk6IdAC/4RVnrDWNyuknXGo5JwNKSBjCEAAhz2go43sXVNwAAANAAAADYXhzShu6voR34B+yd5bGo4QAUuGCqFILu9m+HqEHGtI2Ryg1WyGKR1SJ4IU4tbSQvwOIdrNsE7AhZ9/Mx1JrACdCjDVawYwYGw09GgLJbDojFSYzDeEcvIiqJ3T23Ojw8yw2xdAOmc0e9dHwFj7XCLswotSxw707ro+8d7xPlvpY7xdQHuwpAbmsNX0LnPxeFq2TVXrTXNHBtlUP44ktXihCS/+ZCrL7ryiOmhd3ogUiY0hVkiSz/DtI94QBjboxZQjlKUMpqQLtSNcseQv4tOAAAANAAAADcTIwSbAej5tab7QoQnbHzn/HgwT3c1vnqfhHy7SQWztpgB/1o1PFhn6lPFu+eYgfSy0WzzaVaEQQ0dfn7S1rj1aS5CuxdujiIZGcCbeofFfdqfRuckDXRhkhO33iivdSou+eJQWsgGOZj0HiRFwwsrPjJ6868eOevPe2wBuUQux8cqLsCdBSLyVLjHHV3YWg0ic4lS5lkRLrhh1oZ1y+PZgkQznY4jjOv7C4DdL2DfEu7rhBQrrsWtEHigFPyBRrSLGO/ym/AAzOe+o6Mm8xYAAAAAA==');
