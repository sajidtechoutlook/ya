<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('E35DEA778D683570AAQAAAAWAAAABIgAAACABAAAAAAAAAD/DA9+72AKIMOiMn+PHFTQUXDTpeJzhjPOL2v3HX4TZ2ai67RVOkhiT1DuuZnqKUgDxph8yPyDrLbdss7MhzVgv8//6r4XkVPBiabMRoaWkfaHUeTzzZoZB9iktLlXgtU6VORrU4kXliXECYvY/uqe6Hs9Rti0acoM53CFeD6M5vsyADSrmIMwyzQAAABoAAAAz4YSwjgdnT4b70ZFaei4E7AWWJb3vsn0EYwPhXcVkUfg4I97srGvjx92P64NrTPSUra09qXdgMI7FbazlT79BtBZna745iyd+APOBhtVNZU+IHIVvvnD/YSY01zDnDgXKt6SQu8Ixq81AAAAYAAAANVa5fi8DFXwU+X3N3IboNqQKoE8jFq1gctwrcwqpH70B4eh66m4uIBPBYdbXmW4im6IZMqq+clXz/Xzz+UMC1k0gTe2ayMnKAGaCq9G0H/1JNxob5d4SZHHMO6Bu+S2sjYAAAB4AAAACouygls6oH4I8WfFEQ471zmBLXG7KPbfNLVVsqF+PMifK78zOqC1srr0sLymBh3FD2AHvSxjU0ZUpJX1AjnXc0d37oBrmA+pLy5G7uHkbiJ8BMCcHTXZzIAzzn7VqvuXug7qjlD2yp8fXGB5UIhx9mQ3jwPf6BVFNwAAAIAAAAAmqxfz56Jd9YStPBLHnEgoyZv5dkFTrfKxhkqTu/d7rXWQWFWRcc3+SqvzhV+GaYujkyQ/UhD2HmVhsdSehEKxK3U85xexrO/+kVbtNBMHddOZ74bS5ivt3UiWlbsKOQpUN2BA8+N4Bqki2NWYMAQWj03mkz1QtYgoWJzukrmdEjgAAACAAAAAoLvQInj2mh0LFos/+uAIfkRQKWRSKj6bBpafOVX0MjGBeku+nR4y3icrOfERRvqT8P0n9xI990Lo2TEL8WBlrfMU/d7O7Xkt49qkKU3By9CcUMS0+bcKgUDysBnoQyQ6MOgZpQIMCy8sLBP3kBeWiRqTFpqytQIrzTTqjjIX9noAAAAA');
