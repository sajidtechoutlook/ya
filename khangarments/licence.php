<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('C976B6A18D6834C4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/FZYPUcri7bzr+RF0JAzPcoLco5mwPtBfuWYNA1UXhhT+4BnZxjp3A516GR9owjALvfvOloX45ewbeNBTFf43JYMUTOTo/t1t5Ssn1m2UvR2BB9dWItgHXHQvfi5AKG8tpUowwp2RSilizIinYCc/lIba5j89iuxBAt6f0ml5j/F4WAtTi3kKWzQAAADIAAAAuPdCCTjkztpE8/KlPT3zi7QFksRRc51emy4ViZizGnXAeNpKIkieTQsYIWIN6k82NA5oV2RoDCSzuTJN/KokOsmWeDYcGJU28KcJif0MUAkI7zMw5BpKLbVezvYd57ltuZIEug4wxQ+oQkOrks+qByepujglefqvacI9+Zw/4TCcHAXdJWwU6cPZ+Xsk8ES2uWaaYggV5dQ9ehdWS0PsmAfG0CYOLIuAqMf8YnxXe6Sxn1Nj6pmOlfVhGMcQIfC5BUcd+cfrWHE1AAAAuAAAAOtdJTGGIZrO+OwyLU5LJvCl0zS4gL072aKXha1XWnzknQNRxgNeWaiyO6/WYBg13APTOORtQh2Wnemw6Psb+xuV61ES/Yt0yGjuaHHLZVEIqPAVeqy/UQi/ItOrFlWEQ9E0qMz8UEsEOxQprRzN7CdqWTTmSQAf0ThUm2dqIbn7Yt3VN5+Fqs9b7GEftlTP8nGtz8W7Q2ourP6yrtDWRsJCbBQb/8eX6Jp0uOkN1t7sp9yzaoe1yT82AAAAyAAAAN47opTJp7Jkjw+wRexh6H48g70w/Gv1ch+hUqgi54jx7zowvyrgpiWVaITUu6rsnhx6H4GJqR4necGl8YnIemoNnSayE24aNBXKrNHgQ5ll6eF+2Cwf8CDvpWnjR2zlFXhaMAlcmF1Q1f5mGK1+rT8poJDYG9kMyFK94GB7g2gHXdDoyeFAXtvzix9+WxtkbT7XPZvIBXUO6BPXBFnQKhsWUREpZLG5WOZ2dMNaYPGmM3GcLr6X+pwt27Jb5R3cJrPgsBu1c87SNwAAANAAAABF4qvxHnsCAHfSTn11uovaEe32hiEcIW2uzIWzRY54hM02aTbsYP9jqpv9WjoVBDpB0TlMtyGRKcRs/CQqqvompirfHETX8TI/UZw07uHriKqxfvrRDM+79T0/gPNhjNx0Pd26NcNjJMUpKwEc+7mB4gG3vBrs2iR5/nCT1IsRK0zZ4clV/geolPRc8o1Jd8/ssib6FYKHv76MUNNO5KtdRmqo47sz/qffbSSS1KSXSHXQEIWK8PjLxIgCfo4Co+STBPU+iHWwncwtiH6pPvU+OAAAAMAAAAAWeqKtNkznfrcJIuzO1KgzLCRiUO56ZfgZsbcQK4o7TiyZhidZlwrfFtC2Rv0d/nqn+gBcelQyYf/NBtawl4SUwoVyqvcNsEwQORITbKjLPUfs0rTF8n6IE0Rmxf3SeMUozuot/yUNrbPmyAmPi/cJlHHAUl5zCHPtX/t94sySm+ik5NzGJ/iufsVhaYY4RlkB2NztSZtxFzpbuHC//vvnOHTkIkGySFMF0PIewSkMWUih2/w12sISkxskbxFLb+gAAAAA');
