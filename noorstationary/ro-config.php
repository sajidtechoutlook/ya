<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAADAAAAA4/G7BVcx/ugCdx9ECtGcdQCJnRPsT+VRSOdogPlP0eerbcsA6tjtalBZjRtyhTVklGfw3s8R/DmYNw70F8JeB5994joJvCT7ZmnoeqABTwq8t4u2DZagdE1jQNFa/aJe4Hbz77ZpNM2wa/DdsEdYMlJPcr9fuvH8jQBzRBuGXRCOLcR/fmAJEtnc0rfHKnoPVuAWy9GefJsP3Ry5G2ch97MrvQadWPtKVBl4lNzE5SrzQa02EOtIiftsitiSjxz4NQAAALAAAAD8u+FYeCKy/3TTjm1qhqm+o1Fm6Ee2tFjWWgEAffp5WIbxLuRrByjUTJnCfPUuEJc114A9k72j8LiZMIqta48TZ5LQ2vgS8YFVUcpwV84p0VBhdxQoF2GP9QFbmLUJFifIhkVa+S3E69zyqIe3ClGcUZMMenIjvfmFLP1lWO9xS0NiDRGjCkPKDYIJrLIsIlZ4CtRZR2sNE8UQdKzSI7but8kPUx9+lKYvAbyZFr1IcTYAAAC4AAAAqAx3ozWodIU9+yQlaxjHHXkyLJ3MBHuk2wr+YDHwJpt0XtSKc8lWMkhKUh5uItZrozn0EhKYmMPPWim9yDE+yJ3qoBRt1+Kqwh9aU9jiWldKrYhLWXCdKqB/CUMz+Zm6K71GUBpuF8rDet21I7PAKHC+Fjpx2I4jiwX3HTj3bzU+aGVcID0sHOZxyuq2l9mx8NHDETiSXqVZgm+VpoTDT2Iy1gv2EseqQvRTCuXUo9QwSm22kM4EVTcAAADIAAAAXkNC/mJk5BgXYNm7EG+5IkNZ/ByKu5+2+q9I9Q5XHQP+i/XA8opKYvrgXxFij7OUAJN0VzX2Vu8Ev3s4JIIhTQTqpNSNpiSTTrTbZsOuNP/KrRS1S1uAtSYMKMHaOXttQafoD+xztmOQ4lG7Lh6P8xebGTzVMAnfR4WI2w4McgKDu25angZca5Hm620+e1c0BT78NdlkM1B8dLF5lU6+qjDqyvrlXUq2TpcrTACH98GQGmI++eEyBDlKEEJxyjr1ZUi7FIP0CzM4AAAAyAAAAO7Eb6VdRJF99T9UUFMQtqAFx2Q7lxLmv2cY0PBds8w/xd4ylEh6WmSluoDwoeWmX8uQlYNopJJeGMQjUwuDYScsMByR18sHmdv7HNItGY6VrdAnTjc4TA+rlRqSQhyJMRNe7/qXGyzCWvEU1/h7SBOJ6i4g3rr+YZ10prmXGQPO0hpyyYONCI9UF3B39VSpBQw7fOieGV/aXDLa+JAfbAhDU4V6Sj8k5KoDayICL+hIVA4fJDPTdI8KpzvqCwVvOusYQeGRUn4lAAAAAA==');
