<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAADAAAAAdVsjxK+61MnIXwxZxGndIu0kJWLaHSJjmoEr2n84h+fpg1nzREu9R4mxQ2LJAv7TJwcO9cPfH/hhcegKwWQqiYqk0C++SvPdb/hi4cOG3EbtzVeTONdr7YtcTqepX68Re+DC4y64zVbOnAUf4GAcz/IHmOBWlLBT5es2vYdIAjeSpTN8kdaXA46kmhhoAWhN+RouZ4AgAcqLQgX78xjZE7e2flAzXQDZksof2BQit3PUYhtmZqcjY3XkNrWbtC6RNQAAALAAAADe2nmQG0BEi4uayFwuViB/JdEeRn7su9mSzacxTR5xucgVgZeL8qXguhYkP1l+6+H8hEF8bvQv7Bq58A2PJy+QROzb6UyB0+SSnrwspFSUrMjnSY7pSSFJVw+4Swd9CchdQBnH2fy92GuL+x0geAz82aRUlHseGTWnU+UhhURcwrH5ji3n7H2V44yffSJppAkpq+bqLpRmWTmRjtF87DvLXEZFms1gbihiRvtRWMTfNTYAAAC4AAAAoabCQFB5qWkD6OKQoIrJuKzG1XOhQ79wuLy8cPumjXiCfnJP1Q/t3r9v3s++EQIuDpGs1geNBGaAqJXLo1o5k+pzzlMWXJMnGWbJnQhjQgw1g7SigXwDzWWxG3xyqNM4dZu4ql5vHOWhdtqNQamDg6anygyyy2b7PqJc/uDMQmWgUBLUj7rFFJjMQWGRvgWGg7ZZkvz92Pj4DSJySRv1ZjFmkcQuyelnf1YhDQI8BAaR8uPWfqFlnDcAAADAAAAAv3GdYqpTNOf5lY/d57LMLtQLYGMJjhT9rUBdMj4mc/lCAMenzZlHmzg6xLpgwMWyZkEeo3dkqxehZeVOx5VpIiI4+1SSVOyMk7CxHoc2bXIQL+TD+oc9NcIHhfdZNKJPvL10N0qHxwqr/iE6H+VcXfKjhsMcNp2dyBZOhhsFodmwMwV2OP9s/W0YBER6Y+aUKxOu4Fn4ETIwvxAdap0V/Fp0Yz1bxdTMniM/aRRLlmlHrEPCPdgOO6nhTOgPKzmCOAAAAMgAAAAZpIZympQAMX9ioBm26A3g9YwQxKZYNVZzVDBb7nNCpY92AuonBSZ5LSSsrKfqsi/Yvk6CGrojhD6N9Cm0hwQIajCyQTA2mSpGb1uX16aT2zUqZQ9nRDtNaTrNhEjGjvF4WRAw/Qxj0iKZUhCtWH/jYxnx1qO8e3SDww38j8TVTqIvu3ZFZzbq0ArPENACZTLhRqBMmInvmux6xdkOREL899aaBXuSrPrdm23JwT9KVCTBB8ogCoeYTO6ZVHl7+TneLULcwSzEqgAAAAA=');
