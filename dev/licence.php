<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADIAAAAKCfip/enGj2q+FJlUzCsdCkKSkkwQEScRoi5qTEjF43IGB6GOn7iYf9KPAToDX/uK1L0K/4DTzsPqd9dSrmcldPWzgYfFF9dXLsUzjZ2BVf29GCnzvEMRuv9pSADqfgIiLuK5h/AX2rlMP6t1XGXtrpbhBp8arLp7428OET6Nvl1DYdG5l+BOHLkUP9x7BiZu+cI/PB9gUEHIf5E/D2h8M8lXD0WZZX8UbKYcowtnNwq9X6Mj8cDR3ApZLRJpRDD/CbWLO42V881AAAAuAAAACOZgocU/wUrYZRQuCcNlrQ0Uc9rBAcwNxUiw3hbjEUeVl8wqw0BenB9ceaDZfquSA7Yie0Db7622h3xGCjbwD/y1QZ+aQ39VkHLK6+7FqL1rTnKkE5FTqhxBvsWIBsyiJ09NyIBG1vC/Gj74VOpec1NhUTN3KXIxUsxol6dm11L0wiobtTNRjig9NhodSbqmV/1bqxIuz7WmOiaGaqK5Yv77/iFpAild7OPC3KfrNunQQjc0r1Ef+o2AAAAwAAAACq3wx9KkAtz0mnCa4JLXjW41LatGZKcluUWc8uRkgR9IvZLqP/vTOlokE9aO0Ya/aENJz3uigYuwnCjyJB2VsRDGIUvQQKIk9RSCWkDjzegt9K9BAYAKeeZfjxmibb/Uq/W+LKTWVAO+SdxEcPRTklZJtFQoc07uc8MxNsn7eoHjWumDeTpL8pstZktB3IlxZetzFBy0mBM5SSayFgu7MElQdxMaSTmHog/6/nPTIhDxpU8UqwZI33e3RsYDM8B+TcAAADAAAAASiBjs0waBmsc4YVwBpO7v99hxvpWvbcWFvyJ66oEzBBu8xvSroaaYbMfu+2gB4MqiUiIzBQHGt1GoNYiccI5tkVNV1IC+RaggtwVz2U3pNZsWgolQlz9xdGASDc5S9pUd4vrpefjdfxQm4hbBTbWP7o9wWqGV+8pHjpzPX4AFaw49iZg3WulZY2ec0kst0UWMxNy6pGqRU5SJerJ2VJXzfEhg+XVPgpCXEXfzej9Ztci6DaDHXuw2YrvPcHuhEsuOAAAAMAAAAANJvNRb5HViuWiO56jQZlhNEKVumgd4faU2+6bc6wCObY1QP89E/mKewDZZMamsDbKHZuxImcsSsoa6MiQSNnl3CKZ0wKHWfDjHmO4tse9RYq1hXboExS4xJv5Fl1GfRnXgWu0dFQ5l08cgcPIojV9FwYzlFBOV4NPfpumBONNm1t7QLJkEi53g/si3BXzVU3GJmSlIrEtWlO0c9fETEkFSpp2GYlD9A/ybl04ukmZnga6o9kabvglpGRacoMuYrIAAAAA');
