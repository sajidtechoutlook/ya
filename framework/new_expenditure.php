<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/S8NgBm9PxBceZk1EiMKOU+EY7yp7vhb0fXMgfBgumOZ5XEX3lavJagIOBBl8mXx/J+XOwh+HYd1cOjf9z4IuSv1x1VaAr9Y6VXZ/SpeLT4N8IpbKTlCRZSn5ipJtBMUX8l9p4AhP5U687ANCZfAHmkrpXOVwccureQGoT3Gp2mldAn6Epdc0sDQAAACoAAAAMz68Bj6UlyONKzg8n3rassHk2zF3033ENZYASVRVvi0Ra9jHBoGPrIDFTaquxvfEaTgtSPEvgQhDcfD8w4imj6Wt7YlKkuyCwg9RsdR0HKfAbR2a8IUC+wRg3pUkHTSM5dMsr0lysyZQRwBHc1RvdZu6KqazDBF/7aHcjD+kN8mn/tXqqilh4Ud+aUCkoNE249bgFbOg+OSCSvIAXVHGMFgDT0Mr7GUhNQAAAKAAAADTmVbFzrovmgFIYatag+mB5zhf2Kzqv20f2SZ/s2s1O9D7MSxkljNWHAaQwch3jB0/+yu9sXTZKVZVyNAxgNIB7QmAlEGBS+cNeGMcq/ZMj1B87UgX9HGzdF6o8y4VVXxDLeUPk5p8vtlrg1jrbb0FdubGqZwtzdRcT/yKN3Mh/fNdUX+5MrGdXVT6HtsbcOcy3exv1RBarYLUBpUqcWZ/NgAAAKgAAABekZ3VdnUaPpBiPc+oFwyVbHc/qiiPhrpMW4kltjNIkn7vK+ByI0cQRwIa6E4a1p7v+3JUnhzu2hO/KYHFJgSV/mJIS7LAsrJhh6iDQPwSAqQT8o7cIWD2JoEC0NrUvPIJW2FRypRsC///EpRnsh7myTehC9lAR1nWu1Jv0LPNfFgkOL8mvsyrS2dzeFBpQFHvNYknSGyMJada9LQR+WwzzjDYNS4LCeM3AAAAsAAAAO7i9hbF9q66O2sfX5KAuIghal2C3/Csf5idQMliWgccLlfUjnt4DAqzAKd6MJmLoJY1JyoUuaGD1z2uviXxICNkH5y39L6ku3fcGarrct8a+/IyI7cm5dHa1Z1S6XgvWOd2bwb2WA9fcF24OBUg/1bIiLN9FC6XhOaP0Zf2oBK5NTLTulnK4PFWsm2jpXdP1kgpn/cfZOTH+DAjS4uY+sIwqQmrlI9a0ByAPt0lNb30OAAAALgAAADHVYq47fAjsNWNzGCmHj/jte8e0Q3SZMmLUzVs4/lmvXDMe9vfZ4+QfNnBh96eDJUVGajPiKdDOBss8UYxlI6UWutbRvn1ja6xuU04/t5HZw2X9Pjs5KBpI+vspTBC/HrSRrGE6i2x4J678fySG+aa+BzO5fhbusiVkYEXcmu62t1EbMP/v2ZS3gSgb9lH25csJUxSawrQZQR8ELjYsuD3oHraf3Ngv/7y+5B8uLKvioedXNDksxmRAAAAAA==');
