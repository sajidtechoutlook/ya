<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAACYAQAA2jT/kdAqhESk0mRDjX/njyqXzA/RqJ//lzClgHcTf3ttL88SmXXotX/UaM9kW1tRKErtoK0VnlGEbiHuQGBbNY5zRHNKKX91ssMWXzuFQs6w+GS0X3FHpSegaIMKoWq5T+m5mh9oFVd/bJ6U4qeGygXd1+VkCnswVk6a7GxyftuHhIyTt3JbBU+dqBpS934cR7uO9RAgR3i6eqZltgXxP2SIfVVgek7feOAApQ+U4Yk8mCeOvmUi4P6FmR+n7hleFX+IyMr0WR0lrn83Em8W6Gjwr7Rm1WTiJLvTwkKCqSSc/qI4oD4cTe8bB8H+AVBMXPKeU3PxK2RQzvFgMbSwURcKgISXiopqOn0xpgXW0xbfRTW1rB8V7L8qqgdDzpvCkZ4s5WWlJROEvu50iIr04arC1VvU4ugpISwl0MqK15ZvBnm/ZpToiR58y3a5Dx/ugpxWRw2SOP4sPgRhhaUvbA75yTS1xhM9q6PhEPvvRikN/pZvUnmokU1uBqwQ9CA8N9o4+djvNB7G/veR/bFHylI1nNW7y6uqNQAAAHgBAADrP86ZlFkG/9z6uKXY/PCbqSQ/54HNgVYSkSzAMHzfNa8dOucU/ugtCgkNPjKXSd5qjDt6YswI0DfuCUzr3MNqdnw/kZAWI52pNHOi68gMQbhBjsWi8MkznJc7hIiMc6mRWfDOS0VRtuCTZzf6tUMTBnGl79nNOrFmvJFjVJXJz22JIrcCFHDoQ+kAShHKf6PPpevY1EdfqjpQzsKkYGCCfjsOAO0zmq9TfphL2dHH/KdIneOFVGYQjNQ1dkku9o2o2n4P4aK79++kqNxgPS/HO9VM6OURxywEmAzRMlO1kxqYYqogTirZhchf9FdD3g5w8sBctduHt5wS+X7Q8EbLdv2DmGX0O7VxbNkoSrRayxhThOBqiQW4u+V2xLydhmmFctnYALbpFTxcwhC8949gR6p4BsfS4HFPfXXUoaWLXg/dGdQ/gE3OPQkWtKcu8XfeY3+uCi2ozMX6HPTE9RRcURbj1GHkZD1UaLEk3/XyHPAmAyVcRBHGNgAAAJABAAAMUM65MVtjhWFRvjxS4PWNQ9Iolxg/+gt9tegGGFkmYDSpXdXdwk8U29+G7ZSQb0GftSuMcSz0tQucIeUSONP5DTfpawmfKyiCohDT6tK84S8KJ59YeGT28wDj8YfwMN2dmxDYRGdBtC1ryAS25xxrA7dVbXr2DluSdm3VZ+W6k+o0OVimVQPlpjvaM+JHdmsS2oFUMOQaHDWALH1RcxlMYBz671Vg/O/EeYowesIZWR2x0eX0Ka0syswggHkRn253BUgJM9jKl1mtVOglfqJrjxfmnvO966UIVoyWy23Il2cDPoOQ3yN5hw6rE+0teIu+4lpYkiGIvrfe0BWme15q3CTEPIrn1yLt9CRK78EGhP72+3rKcHSkF6haMUif2AbAYnzKx0549A4w5oqgxVf9EECiVI7hc2WvRDMA7/PmrwmHxQkzwQo8z0aEuYmnMwYtYDz2C5wiz08FY7fwu/tNq53vYV4midu6Sh/0rfSjN/+OKARnCYg7IcQ2qP8jrgUfG+phcNk4t7ndZFc/EwdoNwAAAJgBAACmkFTmkq5CUlW9WMbl1vHdkiFiEjEVGmq6c1QPqqsslGUa6JX5kshQoM66tgw86wQ/StJwxjU9k/L6srWrgMEEmq8+apasd1z1N1LKLXB36W5Q1PVWnjrmKgtivc/dPxj0d3wwuXZWb6WqsGzuu7vGsoLCDghtAzypLblzj4GxPGUaRtTgrLyGuRTMrHWuEXuZq8eOqxFFRxYDFjRi2vgfON+lL0MOvitr8DLRGYzV7SgZ3yvVUXw0IOXtR/uke/o5TUdScpmxZznO0YG5rye3ILK7nDvwIVmwJYthrC2Eke6j6eO/U4USJPtod+OaPOcbUBUyGQZuxp+pLyHGpInmoBYxq4KuP8jpA2AJGKb+sT91GMhFVIoKeZzTr+YTxwOoX82La9EJscIuu4HAoK6yN8GUx1BDma+EZowCPCJ6v1aUf1N9zoU2f3boKsY5kdmytqGfKpi1GJgjQzOydP2d1NfVNNyrF7s5Pd0uOC0t17Lc3SA4Ldq6jqirFMuNTwEZYqfd8zuxXd43kI6QEhLmiGkUF6kZdEk4AAAAmAEAAMpfzE9RKOh5PVKELQHSFbEQJ9jBfffi4UpdC0fMEOekx3gFaEvqRrmbfL8V+EuhyMRFkmGWm5E/xJVPuCGsCFBE2VUAOfJFWJv9St//a30zebG+MyFBA46g6gdA+ezFwCZhG0x8dRBzfZh7byiC8xSR7XVEDUSWJMxJHrTdSf0zEfKacP5x3uSfQ8coAVQV15BZz6IiiVVcVTrMekWyciF5KxDamsC0kScP7sXSbqccV/hMHtnGmamhcwDS7ewnERVQun1WghzmkAzTGpSEJFcq3XyshV7t2UuNnQyzTgqLeTH4Eg6ixLrnMff2jdskaF31bjKH0ICEz5cnaH+Ixnn1p1Wo3P/oy3H2KporzqnUmTzYA3S0CHizQcJ/66P8n/e6lBkMob3wehD0QRtZxbtbGzyQUeuV66Y34YwayC3C+RbaiK4OHYy1Y/xDb7YcZr+WSODFmwlXMPbt6Hjt0tr1rYYvJhkmLGGmIFdMDHcQwJQux+3RPQNVEtkGLPuFKpMH8CI0iQuAEtaqMcY8wa8k5+SnKt4V6gAAAAA=');
