<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8FDDB8008D68350EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/E3SdVaBhvBSEcUKyKpyMT1L3cOSK9/lH7AzPDIj7JKDq0lk93vIWsHtVoRmB8YAC2wgfxuVvUGoqe/56EAvnFES3D032I+HRAmscmp44GxtCQuUd5pHY46ANoVpHtDxKJtzoEnj8hjydvQQ+UqxE0L/gEjflV6aIWNk161gD+QcM8bCCNkQPOjQAAADwAgAAsZxRIsGvTiUvxJduiwIObuShJySaLJWYbI4AX2BerZ+qHBm92HL0pUAc3onA2ipx4gzIxnZta5CzIR4ydacJuFilyFfd3yI5Y169dGkDIND5whwQXsQ/jvIz+v3G6xu+Alqtzl6vAV0q0oqocvx2pkAlPp5MvZoH4RxkwyoYGVdg4QAqg6prJ6iZ1oPSwQxlN8cU6ce4CJyhHl8gW//L4ok91nKGyWKW0owLS5zScBmSZs0We570Ato8khk+qPUqB/sFBaBsjIICQh4ztgpu9H6MsOzS1OB5gAu2Tr8qMCuHcOmHkWYPRAqB5pbIthy8wOzdgsLmELH9+8xCtC452Aa2OhWAjANhHVHShWxquDWXJFqmCeL1/nnK6MIqF72tqS1bFzRDP9mwcdP5hBm1TEsIdMJ1gSNiKwjYbiB9FgGv+8L1HeNwgF6HKUdTeOZJMTvXrTh899drv6A3f1Al5tWQpMoAHuO6Lrgg9DaAXcV2js9WmZu1y6upc25YJ1ASeNAWYEHjwO+twh5DiE48jw2b9WJk8Y3ZcGxkYVYwfd6darPl1uem5VxOWlfzPQ58GEeWdO0rl9GfZsnpOg+7JHcWxeKnmUIhelEa/KrcoCcoimBU0rsohxtz8NHzqG235LWMVwdvH76T3kJ9ff640tJan89Hu7yXuz8ourzsbUKaT2XjhZqZxCQGLvO0SL0P/gwvTSbSqsJUSy1BzC1UW19q+BNvwqSrR3+sO5qpvxAUssd698rSU4i46S9F9VPRBX68sjA4SNkEgOFZCYnEoIFLo6HFoa+4ndw0gR+vWa1nQSN0bxHXE51gUjlI/tI8axozIjPZashQpExO8p9ihUxG7wVX/jXBeUn/T/317S+HHmCQ/qEnFKcxXaQW5qVPV/cYICcQCkDiK0izpMWzvUsKqkgNlOxHhW4ymev9dInbzdTR++Uut9cdVJamjnvwS1HbcfcD3+FWE2JfMYGMssBPvQ4tzGt2zbW4GgSUK7A1AAAA8AIAANjh/xn+IKiJ1AKHg5fRKr/okS32hxPeK4DnfcWFaN7JAm8A7nvzaJZMAIt56a8I8Xptw6SpkAKkw+ce5ZrgLmQDXah6ctzukWGbKwSWojE9bGwoysnqrdS1/P53AuIeGA/fUwNAVkjb4tkBNWmICB1gm/tXL6VuAbgXoO1GpixN6/ttDIlUqxhWvHBwAvvLXNSaAjyEg8IxBu0XH+VDIthuaPWcwQFSsHcxTragKC9rkyX14+aIdt1xCe54WaL4S8/95ydvrlA2bxGxT4FWLMfxiR73gvqHfIfJ1d8p2Kn8NNibtrmuxU/o19JaCJzN/VLRZmFzhHp4x/6iiofWKAb0YgxdjJOAoE7LTA/jlamBvsYxHsnGvrVD6N0GIBOxNcAdTUqbSSid884E9qAGKlHD0gALDRjAS9rf3ukGCZ92H6Vqd4WEhcKpnYqwONru/Q+prMN9tzs7dGatyfs+UxEhmMC3xA6IqHFz8VWx8QxMcQlZ87U0auIcBvwqIu+vOY9leK55mWm3oADimOd4kOFUXHPEFnhmzjgorhwxm/eKwqckacFHCC1/n7SiQNLkZ/ao49U+/TlYJyLteKa//W8xPFISkqGVNI1NkFN7HJ0w9b241ZNUOwu7nUsSf5APY9qAiDQgyrP6/IvTeArmgcsZFuvNLTY0AWMsAQLWcoRsKiN4R4lWP2l89BQtO9X4Oi6ZlEUJIZabka8uhqLRMeEKOobBMcYeHDY1IcN/Fr/KvDqYz/JaOT1lG88rE/AvF0pp0jdup8EpNUvcwEitT3y/0b1hb6oNfxot/eHFuihfX5r8W+Se/TxfezV5pvpY/k8099/1Lb/wC+4qbW9/Txw95dniEiD1X+kedPrlBnOuMAfsd5o5r8qXPZT6JBGsXGDsUVN1X9/dYOEdubFxZnDtbx+FpOtXViCyLLMYk1IQw8H7okwhsOTxWHttWWw7pZXo4UXx3CpXHgFE2CwlBPc39btgEz77X44FLx7/dt+vNgAAAEgDAADBgduTzi6fxujm7uFeBUDTrpcO/LRXuecaesdD+TIxDhbMTWw7vdk1RCKNYVPGqwXWe3cdPPTLwyjNTgPtqY49KhXFWhkUwssWBR/+AUvNcGa2Iis/48+10uGMJMznt+ZDeVoD+Ra2HZ+BjQfl+kdycBMPJNpCDxhzmG7m3WRvAuTxit8c5Wl7B0GpdZnU6A8uXRf/Gdhu+46LetgVQSBvSq27eoAnxdgf0JGXGQn8vTenmfxhFSFqVjxPIlPSNuIlqatMwuGEChX6X1SgiTrp/lDtkqDg+HraTVmquD9MoVRS4l1azVU80gEYvEtmRK1hRXAcQ7joQDexMkPsHEKZwJIyWAzOvkLuhdbCLY2Ub7e+pVw7PDjdTCe2O6kaABmV2eFGr6+TcIjPK0ejFx2nXQ09C7Y1E0xvJP+G93fNoISivtGYPG0lA2I7E0+jqe8n44lePvHR9Gl9IK3OPkW0isRPSYPjbtIJxFLH4rSZnyEP+uoTUoF7w3uixi6wBRHf99lPCRS3rTAnuEQphIodiqE6mX+ByfFTmjul4QwDjDtj3nc7QUo1z1joPB8cYMF8LyWbuWtEu2KKWffz6TJ3DgVT50bZwWvUpKQGSus9AbToLwTo0E202HaE8hpS517oVgUb8KJ/2c0sUMI3x9dg1ji43bz0g0SAgdheyoEPKQ1m6rouB4m1GEY/X4y1on1JSWHv1lTjJQHl2/+wCxqwgKhLMH75+zpziFYa4nRqH8cM0s1aWVQ96SlUds1SLHqJ5ts9JjbwG17C0KiZMXnEpcaY4mGU3ycmtCMe1MGalpfjcY4BeyrbBdKialxVr6Tlk7cQAh9RzC0Y3vNA5M4QBZy0FmRoJ5QgDmsPO8PRyclpLUqfN47IhalwuLL9TtRh+gOZMWqFNxq2LTH6MiNIDaVTLT3iAEz9PHUzitU/Zp7/vdvDcUyw+A1EJO7UNaSNJEvJJOGVkb0srxZ4wn/obEioDHZ92kK3Vrs6wSFgP8NZ/UqOyEUUKRI1HkfPKvajO7CBJFMQrfFOAPF0V1+79733tUFw+Zn5AQVr5tmw31Ixct6WvDBdWZ5acpIl1RXZ7NQev/4X4gZpXXtCtBLUGDVxDIIfprM3AAAAGAMAAP4y9QugbbuNAwJc9qrwFCAS4s+FnmdcwlG0Qjj40tnHH999OepRuI7r8llcdabrfWsILiWfryw22L0FyAzoaRUx9i2fuLsJiq13mZf6lKuynTvz4S//4M5IRpFvSyglVjqsJ6F2ac/dDAS4t7h7+ilW3qo1P8SfZuUjwSoeF5SwHPVhlnQAyIqP1PEbZypGZcWpKpilFSnxprqyibe+serjTSSwzc3HqhfIrY8BaHtd0XuVxODL5AwDhgZERmVWDmGhiokTlUfvuyIi8hcMXDSZRpgg7eHz6bfS3VHDbfBwIs3BDK7eTvLFlKpn7AQZESTLJzyZA7Nm8C84EDgWhMGz8vki4ihhjbN1HZASAwAwKlA5nS0cFsO543dtbT9STfHgbCR85eV+KJ3cQKEYAAo7GJGxNQldlgEMfT2cL0P09tq/6QO/5wGMk0UHOj6ICraaG3dnNcshyKiMBzmbMSWZ6Q+f32KlzzfULVUb+LjA/x0hQRQicH9R9YMFjvCu4sPnZ+ZxAWCONGp02ENqB8fOMVG6R7Tq7JBWNnHX6zVtjHIiRad8IzMZyOiZv07s/tWKg5YwOn3GPFQKgx+WJJodDg0j3ppHQO17tBT7SwZjXWrNDXAx0YF1zMWpB3wtnMJy91WgwBKPC2QX3TB5a157EnFzVAKaBSXXa+wd6bzjEzKHV/VBViewXngFzyiHPkqxVncYgtrxo8IMYRrvc6pq5mm5L3u+UtkvOBfn83GVvcVkzPCCOoJOU4p+JrqF7Xe2qFNgKpnbJ42JaAMfynUqrIMMPRfe/UWwbge9R3Opc7o6CIOZ+QI/iJIbpCZGiGjPQkl+Z0LM9qQHKjjKG07IDCLdALQXcdS86p2bW6817KeqEJlaxNDFMZR6yqJ7VKLROhsttYsAcQH3aS7ZeKlUoySoRxbi7TCMCRoC3cIk2OwB2tn/v+w0qGM7H37kVJLLQw9Ehk7Ykm91ZCHpZ79ScwCbKi3+KFX5uxpi8w4Hn1ehyU9R1zvQCHyv1GMuY/Dy2MacjyTFhyks3bm/pIzmvFRK/ShuuDgAAAAYAwAAFgpGsFYEY/noP/VgTxPE1cPeKWw16xmAVFzqfj0UYmKMKI4gR/3HZjxaQdMmvs13Q42nCdlF9YS/9pYQ7Iu5JVQjKVzDx7o7PZiDsT0NK3HT4RXjsZAqS8xd+/62cZUik0vDkUogtgAW9h5CaIz1CNGjxfHsCzBsulBfkdQ1eWoZPNiZ4wa8YjiFTJt9hRFu6o1SfbezmapsWxBFP6buOn06EvKaR9FDyh2tgyElZO7gJJcuE6ceo5MBJ5f8TM7Tsy2ADEbZY3wHtob04ZtMsAfAMoozmJy976VDemBUVB2+ZceTuwhm5V1m7PT9v+3V5R1+YuZz7DyviUOx2gjWPn67L77Ly6a4tK9WoovuxWUAjgTwxHnhiJ4IVxBWreFfcDk+vJ2/XCW38vW+wMFoZzsH9CIiG+kN74DmKkgNoaZuwv+xWDVA3mdjADc7+6Bk80MwSBkdoPVwxyrKFKVPJMh3bIJCZHcim56ccBEgFPb2OuLAjAwy34yyuIukGsiUE1HOA+07Hcn7AHYMZyR44S4UfH6WXGqYtnDDeL4QLmNGnX2kMSOxIOH6UZWa+P4FS6JIbkdhOiyemtNmtLCHxgMaBp8V0NldMiTcIthOAIaA1ku5k9QkfzGbiXUbISNbM5coZKsl7KOrqAWK1s0uzgkkrDMHz7i3sDKJhDMkbruMZOE31quUaNEZr4lsQOsqh9xzclwXgKLxbiDE8tdkTIuBvR57G/4DRRbkc3U9Uef1gd7SH9on69xDZWRL+lhgq0qQ7NJhDqELEVACAIH1PUSVCJUuq6KYu9ac/24dNzSflMK4xZq4bd29IizpW0JyltBV/VVi7m65tUhDLMmqvg6ithFvaGX89wL5jjALuW2sVg/+hPQvQjBibOr/8bZPcEBRauaKd4904eq6fx7ITaOp8G4kRaMGIEbIHSq7/mx2aHZlAxdN5gWgJp4fIziVDo+nIhmCwbhxmUh5xufIMOZbfHKhsL73Mi5frBPUH2uN4xo3pLcNqCK4HWMRx3kfwoUGMhfWcJAPgFldEQOngcuWXAojAjdUAAAAAA==');
