<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAADQAwAA9FfJto5VZ8xTZSdkLWixoFdV+ejTIkGSoeBOju1y28kc9XQ/u49Nx/BsdQ+U8jyGWnMK5W+p/uezHb0hVYCKS8I1f1M0O6CUIBsaPEEgRLA5w3Xb4nGzl1qBgsUNSv5JQMjLeBfMD+hT3XDL12Jk447E+1815eC8uKnIbCkwAm02wdx+AZxfhZ82kBk/Huj4lUv43bVDidYnvZ7sXLQ8lWYnpM0w/xvFhqF6fwgMQ23FIfLlFKDWTvWcyn9ePcht1F+MukdswcqKYVtw+FRs7GqR6zEC32YHYFRfHWfh9eTRzPPh3+PV/fq9CoZhWjrZCOIivpTuVz+hFy5tqtWcIq3ttxAIm04w3comxeBMyn5Ki0ai693KB2w2OqkdoZ3m/K9Rtrj9q/5jT8L6xnhEjsq53Bp54ybxFuB4iIiaeDR3lGrn6z1aY6bQZUeZkGUoRdkC7hQA5pzjOJaPBv5MtHzxBdplWuL8L7RJX/tCXyQg8xhKF3MiLqSqLuJh158Dp+n2qWwHgLzqUwv1B1Q6+l8qav2vZ+bg0LocD5tBVMFCmOHXdHill72lgT+TVzgZmPjc3oR9PUEJJoxl2f9IvotIfQWw1J27k9+NyB0OCa3Z6Bicr3I9Rm6JXRIumvo5PquR4M8ctBj1lj1lLmtERGrk52oIL2e+ZbWlSJyf+pHpYDiCxLzlE6Nn6PiJhIxE5puXE6aat8wgmUyctrVcx+vDaKC/gPgSrpnMEkPp23ZUu/O6p7LByn5g8IfoqebBNSO8K5golmUkY3+NZ7mH0Fz/BLBhOwqjkSGY2RuxgnX3AWLAiJiONAh4bAq7nq1bZjnV/Y8n6wk1etVuiV9DJPz5EOsDggjzGEuS8Uym0tjEijRT+q+eDz/hPWrrjaqZYsiTJmdvTSXVsgpIWwoCSm7NBEU+hlh4pghbGUT38n92t8MydM46jYuPXqT0BEu9DAt/DzMYkVQOOJFImyVd4y7sFcf3IcX42LYjNgI5pfbXYn3XW9mfQRt1UZDY63Qq/9Gm8uRrcsGmBz7z2V4Lp75enO0u+quSHH4v4LbMUxF8Ej425mu2Fx4sJnf8HF7lY/2YH7j563FwmlgMHisDVTbuEGB9tLSZzFJWSWOuMSw9V1YEafWB4BHqcxMPH9DxJHFsIy7E8btKmC/6GbzKQIk2lZTl4KqMFP1KN+eD2ztKkF/8K4WSOdIjsUPbLRBy3/dEbL1gxgtgohaNmVZn5U8Z4d7nx8OktERKbhIaDuCKgvwonBor+PuOuTtUdCynfWPfu290i+AJmVPGBrTlfjUAAADQAwAAdDrwVjnxuOZ3d9AyU5CLT9mprafESIxblM4xZNSyuFpkOlfPicePvhXlnHD0mcOLgRGK7DvLrEUx1EpKF/0ZmBo7Ow7tooDxGOr9qBb5xWWPjN8cauoq56ZXlbUVXNuMM5CHKEZs8OJ9xJQvCLHEFAHqpf7AfC5xkGJr5uOE0eiDpmPPQ9IoOadry8AunYY/AfbKiALGYDDg6/AGQe6v/JF7pkdktV9jJYso0mKQOhmk7jZooePGRcVuOK80B8oLc3IGbvNXRRgGu1Z0Z0p67VsuYH5smqAo3gr8SCrBYvS23U4VfUlXyDg9yO9IZP9QTpoamS5EQRBRbvCND5yealbG2IF/QDWySxwVrGqDjPJ0/Wb2Xk3unpTj8dD5yew6S7TWQIyvld6Zhq1Rqtbi17vbvBRAjtDVtRRGju9x8YlxORGBww3mbSJHHbM/sR0HKLJYsFbP6zQJn4sNmlHBi+MRpTza4TRkQMtT0TxbrOhvAuI1enpmkEnUo0GJpHc016pbuKaPuMU8eJUICIh/YvPiZZAO8u69ZptnfUH/JbDwOROaHt9iiByreACJS6Zd55qAl6/bj8Eieu3kkQDfO4ZO34sXch1bCuCpAsHYokNmoTNvhjM5nQEOCRBaiOPpFxU7VDnlbe7/17dyLqGPY9jL6dnIiNhShKIIhLzv/0TamjrGGYBfL4EFeI1xiKtu7M1lmQq9TcDjWsi5qaS7DNKR01wU4MW67OwcXhqhVZKNtizw5bGxeOdqdYkMprIPxslV/4aaddaOuV2Cy15zG9oPyin/hoshqCuU5Xm5hs0qQxUblLHe3nqcIKTvsXL4b7GsXDEl8pRfEs63etc49fQ4VBJHOYxsK2LYESvfkH18WzaNueSDnmWILO5/tc7aqrMHi7xmEf6i8/mWBC49Pnre8B+UsauAyND8wm83WxWZLNtTeivBPaUDcVGQJW5uiFOyuN3xNKBLoAVMa3YhDreqM+zyt7OeMsnVyIMdCsZaSJulX/x6CMeS5nNk+JWQL5l8muryc10xEkzJnuKsY0OHXT9CxZ0CIv1LtiOVDwXESHIXqniY0dqQuN4aoWZkc93RTHiqKAfqRo3V7Y+82zMNWajJbn/XXvreY42To7q5t29Kwd9QJwDEt6bFblVi7cfsecM3Kugs5JmnKOUWwisFs7V/UNPCRvCmDuGGxh3/R59Fp53wgPUN1B+HisZKUNFKjdahQFZNoqRC63yzLJ9XTev2PNwCxgOv7+CBoQ0RsaLE4XMY3wDPfWfguNczD3P7ywmsNTfd/eO5//C9UTYAAADwAwAAsaRrH7CrzqP9VqF4pyxeZGeku18GCNSR8MsEbqjlCdh3/v4uqRFwUzA+SqC0x+ApC4c7xoqx9fN8HGeTH1INqY9IvJ+BYZ/gH+lphA70jHBjkJKdOTBTDY/2TCR1P+wTLLVnNB+COiLSv88KcbhWFIiaV6zQyl1HUTP+17TpO9JWcqaaqTPFEcmISqTII0qduihFdmPdhjITA/aqRqxFD/hlilLRIUQQDcbCkuV6K801l5/wmZ9fA4c03aPVahKRsDKdLXZouONgU0lj53+T1qmRN3Fz+6NlY9DAtQDY1IU1RFGIzeAd0HZ1FC6k9gc/wKT/4kVReiSIbK0sdkfn0kI9J/ebjpZZ1sKERogm4naGx7Xa6ItzqJzok8n/8F4qonSIGkfCYGW8GR5k+pdsMAqyEAeVKfyRx+o3rK3zIqq+JOR+xFqMbZDq7w6bNPVkKVWaUAyzXIJmRoQ0Om3y+l0bLODsuDhg3V6Fci9qg06O1A/fyhLWY/P1NuoDjObdTUKROsxS8qt2QwjnM4sRicRvRwapzXj9lmJFT7rww0tBV4QInvVbd1+77f4GcXfJK0RC18qC1mz7aZ69MOk3j+0B6/zUCp2aM1rbYCnXLHBN5ih1ixhB0LdWNtLV+JFkkCdx9XKhvZ4D+kMx4KOYv6UqLWxNu14nqBzxnUGBhayGSsZ82my4fq4t+CZdEBz3fHTK9+o2kT2iiu4pQjtGQ/NOdnngDpKDJZzO24VvS5WqO43fnpJliiwP2sfbyVmc1TP1y21RgwXHp04fuD2VZvlGKcICS/vxpeaZg6tVKCU7FajpdcJadR8Da/UkqqwFmjBVrf1c/b6ckVB/2nvQBMaAwjMJspZjFv/lmIBZkFHZCG4ehN177rbqvdXzjXMiPpOENkeYTk0LG/LNhq5PzXT5cM9Wea9Gz3p/CtvAxd2gYh9zWNTk4apu9WWVskQuNUHxVjnAtKRDGbot7PHfBOo7fo9LYKUz9zBWTP8SGYnY3Hpilt8EE3wbAiC58shanO4i7AmiwhqBVKhK5gZBg3rX4a3EvoqS1HW1KQ/4Jq4PQjVn+bBcnlM+Y28z67bNJ0MQ8iAXRtHoEaYv4FW5Pemog3T7dHNONjEqRTLdGPhpbOhLuroSDvSdTBpHy6ETpC46nyqtWBj0xjN+eI8IuOF70DT8y2wP2rKSTA8H7dj2P3k2r/tkHEjeD5DO2Xj8qw+xIqoR1MnRgQVojAozKfR1DMgPt+d39wQaZvybSVmdYYgG4+uuNA3ErB76OLBXv+pbjKxiO2q6BkXbfRzkADEnFDSKJOyn1tZYt9V5uqIOmXguvzh4imeSwT55+zE8NwAAAPgDAAAEoEtZFIDXjjBSPY+c2FcNHBwDDHL4p94iZTpkmPSgm7OML2EkNoxOhfIT8Fbwuntjyft8SCVDg873opDMUJDeRP1zfuzYM9dOMdo6YINJN8zBskySJ+nyqSAIVUSRklvGD8XlNhEVNXNfAFl2rA9A1PlCBhDTilRXdvcrnEi1A45LzcORHc8z09LMR/ReMtxK9nHt2hUdCwZ+DGIuHX2BpW+0z9n7PwCwqh0xSjGGgIz/jhqJwJO2bCCan2HSvl6ndH24fFBkFwYMQQ3BsqgxGILWN4RbBnZz6PoyDdiniPctLbRBA73Km028Zr2pP9XlRXXJHcrVeYfBw5Ph9MtqoPWXyb6wdDDHT51rtwAuT3ejG4MSz8iXORmP0rddUKId47a+CjtWMiY971fKEnyyquHovRSLDIa3tADzzlULgj8aAHUQplpgV8KEDtYmnwt4IGcWXQhQIsGhM9Xmpq4qHAE3HTC34B3SyUrEIoaiQHbF+mwtM+1yZ5seIYaW8GCejhUiLjvmEUIwFHLpQehukg7riAddHV8BjUBi/5NklhHxKUdhbza9Emcw0HiSI0N4kgr+ngf86enbN1orx3GnUMRLSGZV6Qygp5LQWDTkOXkevCeA3pqu3hl8N4wGLwo4o29nQKg0UhBGf9BrEcIF7mGLIBfTFxHRbfK5LLRN9ln37mAWi0Q3NYVfk7DscyL3bd13k9TVP3nYwKaVN4u3Id8Rn+kzBjO1NfWchLjc9pcMLyXWxxBNfMOiTJFrFLUpx+SwWgMnwj5482RKyINzIApVZtn7jaTaoI0jc65TGQm4251FhKeMFP1lMFzKrHeHpGwq74ub5vNARGRI8QvQ3zBQVfvKjqmCOU/L4z2o0HGCwW2S/vCwNwDeWm4WXhcU7Wp7ThRt0fad1ddNAXzoIimYHLDBNz0hUx1bYJBYFECNY05lnQj4Zw2qpWM7xrYhYJlwkUwIlzbw9syfB++SuuCjJmrBeDJQKpL75/8VS59IfmHMRWoLNGuX+WcVDaugu9pwwi7Iqo06Q8ul8FDgTm912HC61rJJgo1BOPXQJ3hYQ7Q/9cBZ6nxu0OdlpBBd5RKx3gDovL/HveZpzT7OrAEluHH+NQF9m8+sQ9pfy1sShkSClZIA0bQd9FrDIW/UzWLbPgOnIqEXtuI0n27+WCWMGK9/i8JrnupVxtM4mKTAwboQDXlqu/BqM3nUh8733JLx1IUpQfElFmznPW3TP3MZjSNgtKYdXWr2Tf8QIjDYIU+wnql8g7tfsxj3OYDpoH8cb8+2FSMc1DIPMNUnVpV3TOnlraPf5iA90fxEwxy0jydLxQMRl+e4kE8t7fOVDpwdxdaudDgAAAD4AwAAxnaJq45bZPFqYDwbfHmWWSfrDH7omG33VbaXf51psjRYcJVZ/lGcKGsk+qxZQAh8xaNA6SvFVpx3Oo7R9U0gdxnvryK0XdHFPMSUruCYXPvgTLgXvEqeTchtoGFpL2oXCuOYSjhv3MjjBaYvRaMVcVvgCHhVfUFK009vUDjENgJplJA001k4ycLT/AN5GkA/ie9JrmWR9h1nb+mZaDCE1+j3WQr60icmDgB74Pi30fkdP1r1kfr345O4jsUb+JQm7oAlw3kaFqak1hXncw3Y+mwEkLT0A4cTrgQe4mc6iSvm4uLgIl3y/BFeNNbxXcTzio6fK71yfR0OMxLRIBmwE++Ll6LiqizFcT7M/92ndEvaPRML2je037vz+PEJvTYdTH0t2Iny9o67jM48KBYFnyizT0ZIhfEqdqxy2Z2hq48lqiwxBmZoDXo/qmfOPMA/NmgAFJvCKi9Aq0qSrsgRcktlVwDQlrG/Hj0mvQ7Bj95QKG23/o+W5CgDrcSr4b3I3HFl3JEKMtuwRjRCsZ0v5mL+m+232CROPlX0EmCBnu7k9s9Fw8Vx7itljsGhU066GEY2J/8fdBkQ11whl4iPkhaBFB9Swwouu7972LMP51MBUNpgyz23NJrpdfMwl1EAMUzT6jG9LnjJriLpVl/YwxH6VDMCAFAgUA19cqk3K4PyIKonBGpH0yJkSkL0o7ZC1IAmTeR4sEUxyhthAd1pEtPvNfC6No6t+dm8ABtCcRGZUZZfD3DOslPB57QExv0SsNwfqA35ViKDfUHRenxfUJJQaoyBzTW4vIVPluh4QsqOT+eq7PFqjpFUVCI51VwKYnHvdkzHrE81QdSewDTP6UpeRtdDaluj78waU2OpBBW4H7Q+GcLg+StAdJggfJUVMyhk7MprcmWj1op+JrcocJc4HdExZ3vkS+6hVvc6W8IXxdmqOt2mbVwoSsIDtp+S2O2I7rE95fRCmCojbsAtNhgVir4kFKdrHfxNx8z8/RURUModSqz7fC+O+ZgGRQ0BvhtUVd34e574YIaOMKpuIDnyJ3YpDomMlyESKzGJ3KX/Clm3lvnHVlQaP+LVWlo2luuG5hbEJOCZrJQ+QRcAxcSDlkW7o4tQeETnzPzDYHOzoB0SWcOs+oRSG42WNTDonmEAGHb/JzZjvc4Fq10i9rrvDIpuzTxiwz0R0k2VMsuDzEglXXgXLhMwK8dwXAiafmDC6uQkin/T0waLc3sUcwCNr2RinTTHl81y3obJSUkmVw+2ck/JP+rCisLz3d6J1VRQgB4WZ34zVUAYQiEgrypyYZC06OVh3LlsFVg/OykLbyJaNNryYWPCIvhsei7w9cu/gT5N4PEAAAAA');
