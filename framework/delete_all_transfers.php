<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3AAA63F98D682BF0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/WaULBqbhw19P+hkoKY+QYLxA2o9HzWURnPPUjk85nRgtSCYcziVc0ui/H/SHHZ54jzVFPioETiQ0KJpTPvlOvv5+GGrtm2fs2DG1Qhc2+ObH9B9+KCjvvUxgfUsbuVDfnSsXvRYH0iv3mHJUtNg+VD397LF9pL9jZdqvZ1U0Ugp82YTFQn85sDQAAABoBAAAdqHV2DoMaocQHutlnyOJXKlmc1p68qSRc9NJv5Q0SYLuXmWpQhisJTo8awv3tNA1JUJHaNj/Vx3+PwV7sWSS94YWPkQe8wTtAIlUPvpe5jYrwt3siRNNQ6N5LzKtaEChq8MU0DH6U75+Ci5EBpVZjzt8NGY2W7w+30ouj7UqLJnMzDugat+f9+UyAGV2CAojIy06FgLGW1bytBvYlvj3xFX5K7u8mTPbKP9bRiFDCIuqxtHYutNfTJgDUNZlVrH8uuZGpcC1TSoKVrHeCWg4dJaQX5f2E5MOsOxei9RGavOJ13pLzRp9SYZTPmT01RqBPF97pnAwbMqgN1XjlqMFzDW22lZhfma00ShTj1qIQqMzzkXfzikZCBeS8Ag6GS1/97dF/RSt1+0iNdL8TkKY/bB3Hc85a9jKDFva9G8YbkG77OqhsF84ZGuDdMbw5qm/kE7xiT84e4aHyrEkh/liaaDPBqpS8eiC/Q8dWqFLy+8RWSgeoN0SKnYHrFihBY+FxvPtJN86resg7v3rhUUyYu1U9uka4ZFzJFrPRQ+rm75h4PtNK9F2UDF+CHWSjWfwa3Yq2hKL14KwQ8NypCkgb6r9Fbr8nUhXx5JmEk+zUdLBIfRFmmUlNZL3cDFvFYvt02uteBjni5MZHbfQLbQKN2t1M5R5cnpXflG/dtsTh4KrydhNrhjgF2R3/BZwcttjyhZY0Cc7emVxkPQVZFECgPNyeE/vaqAPMiFFAGaolRzLClz/6kmEMZtxpHmPXSuXM50zmw21qo0d3Qrl0X+sDvp/1DSWtS/iPIspzgdtnUaPiIsUVWfWW0F/EbuN3PLpTf8DNe6QEAzAda4QcwdzvvYlLBbHyF3hS6T2ab/cY43mR19QuCWE1sdBqfhI59pQOn+wKzQIt7Z2y0GS9OZ31Q0nflPCHvsjIQj3/adf+l9U6diALRXshf3PyZH8bRLHsacvdFMi5jg1ZY1+tFbmDUBvKEj3r3xzzQYhUfQ2rW6wwN+pngeA4hs/xFXjn6AhfIusMC+UkYEH+Hv/uxZHdhZjaxAEnGf5PURCHbF/nrQ4N7ULUTFlqJbl3WmTwO0wChwxaZ4KC6H/h+WpHBvcmC9k8lgo7dKye3PXMx3ZGO+UwsC5dC4qreigvTG8fq72KEi9GamBgVf71KrU0ho0T41esE51outmaFCDAqI6ETQ1h0D9eD0gWDESWCxqxnP1DpYTSSkSISNspztKdjUi4CgEkGJKGpluU7g2mGgp5m0Lh/XTfkxODd5IoE0z+s91zRjcEa3maTr8ICMxIzEB3axZyFRtZJabBzWSHCb0XwzjM+Aty2uXU5yjJ2kGyAIh+/mbfKNo6SeRPO7dXgHaQOK5omB/NIgLAOIgxhGExLqWsB/XWyr6EUVtAJdERtOxz0vAvZ7Hnyoi4jlfa3O8nK+dWZBobrD57diwu8XIv2g66H/MlXM2JlxwjJvjawUJv7gIgS6H1s2621uPTMfdr6yX25z3ifpkNQAAAGAEAAAKBxYALfT6xipK6KXFWra2VzzfCXEJxRpW/Ms3td8yOHTlx3yjgTx1C5DlrUDLrUGpi3UcuB7GgCkWLEc0kk0/M8q6NGhc5npbRNPQl4eirh6zfGndHJxJgU0qQIDIOp3OLzkJyzeYISbRyR7YOT4uF9Jnp6ajPKh+a7IIlzVY/hAdaUHeHCJr1BBd7Vu3RCzjoX9/o1LmSqNAkAPXgEUW3U88hblVUbPGwXookE8BtRvzef2q30niG7YcUrPVNNDstt+zA/jZhXNONAYgxLEZSo2r2BAefAN8gkpHmLqxp/Q1eWPQE4qyagkDKTAKzwi8wbP/Phnb7GaDGB29etJwns4POXZL4XGlntkVdUYAnq3g0AZX26uYKW1ifB7nYKSlYMSkJ9GVn6LhXP9U4NSqOpSGHzuFDNOzP7lnSLSt8v+An4yLpaYKDXLCpWmqH+fNQ+DkWGo8rUHkJeDuEbHJVaT8RP5usQORgFa0rG+7Y7JGsFY4NkPQhJYA4dfLd0HSCDrgmmxntENN++qnF4Z2fb31JnNv58FaNVpMtwoys4vf/qOGXCE4ODIHU8gLAj+yTKIJUPEEs1j5siK8woMCrMSp4WJx+poHG7Txz+5+WrzKPjX/GrvV7GjEwhoZqin0u696DxR36v/sHONZenxYRiJZ/QcacgEjFHmJmww9cMJxR8Ie62dmKNtOCCC3/vJkiFFf07BvgiHL2TiS19O4VUu4mSEFnk4+0zDfZLxwlw6i1TEZA9YFxs9bWmuA2oUhH18GW+5p6kQaOtpk8CZRHbLwK9sFybNeETBoNdXxOrs6JVHZ50Jxpar5jLXDtrmsooQg4seAUXL3WhhVpFuRMqelNZKFsx+3cFuYNQOp7aUF8JEXoxo1jG7xiDziaLrRnu7LekcDbNINy/DgD/chXiwgvNCk3cODaZFOpMRLOJtHLryxid76MGJFmKOfo/frTzk0WqvlNvyZvSA1jQGoG0JpjnQjkwqGMMvs6empjQaXJSPWrWTbX9gF9W5GXo0NiRzogLEXg/bN63URBJpjRglEHhiUwz6Ec+PbdEw72OsXvnhj3WamskLpwmUVLEUHeIF4T+hHxUR5P7vYww1MTVUF2ACpfKdTU7XuFk1vr/7Y2PPVmf4/1Fwytn59XZilEN5Zygeq1YDGk/6am9fgPxlX7ZfyoYvzGtqcBkERLAqGEHVWwP4OiD2hWPGniGi9OccXDlYKIxcJMHP1YMu8ls1usSBhXhbyuAyZhmzlBnWGc6KY/wgEdE97SAUn2pJgCTl1QAWKdl5BD60U0wK5oyCFEIUkxbkot6H3Fe/wW+E24cvJGIJ2VLVu+D5/F8MvAVsFgNhDSWrTuasLBpvXmr0j1wpunar28Y3izk4LHFyP5Bs/Blx9mQ/Rp+tR/GJQuYBNEZmpBkCUzGBW4X/tkYhlb1qNOoVU3bdhRZXAqJmzLTWaUV1lUHnKpfhF6lvNukhRaZt7t4TTYXyz9l7iNgAAAKAEAABxylE7ES8iUW4XdeEPJFn14xqdSrfxYK2qdX7Wr8CnzKx0mGI79D2KcHTEZMuHUqM/aT7OT8BlWgdz2hZpfWlOIr8D7bDmrxb+Qtk3kL/Zr/cIlJHwURo1JQwV6VYFuJqNUzjYIW/hH33p77IFzM2KjeIEwDJnIoxcVDVxPGY+PGI/kezAR3iuTqMpLYwlnk6IrM+DoBZid85jZbiEtFjJX7pLZ0lavaxxhprQ1bk4PmVrkQ+/u7MxwD83+8W+17zWh2WZccS8fFc2v7oXwl6m4UoPLycwd8WKlEiJgTEIKPlPeRcfQsknjPXownk3QGJKz+DS8CSraHDgCFDLwqhOm1vtDe5o7Rv+a/caDEPLR+7MxeMBczobv5RK8zm4JiKqjAOVDQ+14wwO479CFqVTzSqoq/cB4dHM3eqXVrVvAjt7Zd7JsKMb6S+FoRzmsOEmcPrhltH7blQR/cmJ4ZP1XI07gSPzD/QK41EW1CPNDfOJUsFUBGb6DyPT8dPNpRhZGepdUAc6DZgEnsIrrVoMmya/queisZC/rbli2qjEv7/c9oMZD7l6guEgh7OnLAoHF1a1ENouGIeUuyV7l3txWdiQcJSMDZ8Kmv/JNmYTT/wLysMrivaFarBJ7juyO0FRfJLMloIWkt0VePaxEvYhB4vOcL90CDqTOjT0+S91UJXC0cgypD4VFWkfbIL7OLxfgSHDxNKtDLISK2kWwM5/I7CG3hufkb7Z7mJ5pF5f1lgNkVG2mRqgHErMRfnp419rXxTWhh/4/SrTUcc+D0oa2Ngu7yZhV5LgOSwkPBYQ2GkPL3Wt7JMxCwohwh1mhbsxLOwW9b1Fp8FIGHJ6geRWGba8NbZXzRYGiFgR2Tmu8D+ooI3sA/i5YWlyCtZ2WqpKxGsW0k4GpwoD+uEggVABUy3Y4C4hm5oZCauJmheR9iqLMAadFB1SgzvAUuX5/jKpOa3sldsDPuqco8nynVJNxO2+dbjbX+25/ekKO94IW7YqpnxJSruWWFdIOjqITRGlnBOgLUgnEg+1s/mdRFxvMynsGlPdS4cvmscHApc1u1BL1fk8CTNgpQAWUOaw8opgS2HdAnkaJsAn1htpf1BC2kjMVxOGrWuWR76u/7hjoSrzg0HBhk6v3/njGZZuJ/J8M10Az2EVd2I9uVPMBNF4iQWNmv6Dv5YokIQRsa9GpQg//w0LzERKLRFgvIntbDH/207Or4NNT9yq3dwFSMqnmNyAmOWSVWbIByXMR9pav7Uwt1T3O64T5DCpWR0dUCJDx+iJo80WubkXSpVC0yc2Z278AaOdnY1kT6hO7zt2Muqvf6pAPLyHi9CdpZTfGr7xKIXrCmPw98yApKkyZ5e52nzk2qlU18SIUzc0K9qd2LowmMSsZxaMsnPiqbJ8xRqN7k/T5aa6QFBNaG6V53EhNs4CbKTn92zDjYgdUbqf7wDUBRzUK3vw45Z1G4CYGzMO6M0OLvsWyPFeMDgYJBYKoenOyi2UPQ+95L0Lyx+9i23lGYvPKWWPPkzJwhzO2MJbZHDvBom2gCRNYL+SbGgv2iMT94Rcxqm2rCfWopbR1jcAAADABAAALzUlrsxma53F/XusJsE86YgRghy+ON8J/AAjF7+0zshl9Q0jHR3W5gwYy33cMHSq1GfS20wRp7nlWkZ7HxhM2RF9ZyRen2zS0LKN23gajMHpFrmaxlp9l14RzdFggcD8hAZeZ0RC9V4EPRHPCzNBP5yh16FvFm+tCMMUXXlCV06huDN119S4hs97B5FULrtZPPXpCgx5KLefB+FgoTIQEz5hhEOo10oVx3s4Wd8/MxQXvHVBXFmKR1hFPmYexZ9NXNpih8M9GDlFFCo4RgN9CvwQnF/OSOtzCrXzUKOrhbvPLLSkE0lggwm5ELZbUeD/MkV0MyW+QDi7CQo2GINjT/ax0TuTw9JFMKtH6WwoWwI5zkL3mRi9ocLnQ6NzI4QLyR5K4I7dnzacqb4+S0e0cXqz3/RRgBLvOQ1n+O+HukqCw7X9nKvO5Gs2r5pgumEaintBXzdNHomnG1VcWFa3ZDbHkRPzXEdUUEIxQbbk2vJzAkXL+Nb6GSBw7e5CPmcSph80NDq04NUsUwue3o1nU78ECCxbAVChIUFFEfIqLJYyoJL+XiclG8F4uvm1w4k3Z+ZE+R6jT93FAxsVmXLTftz1DLxNZrgZAUfHkqQi+sGPUJxURh6U9i3IIS7Az0ZBJIIqep6EHHq/CM+4NY5zgMTdwAsuqNVwVafTVkinvxA1YYrwUddUsE/k17/Is3TbeRZQ+iIDVa94iPeXf49RO9QLgBNLl0Ka3KOOQVFg8W2+mtC9PmojBi0xKwQD4biiihdc8ZpcMi6K5+TwEv+/ngc7KVjveo5KO6FkGfga1pYpzQdAhbXOqAe3O/QErRk7t9xHRG/8FIerrPUv8DyxqMd8UF6+WM0VtGFlJ7PuAbt7IayJXvCacyn37K5XVUcrLS80BzfdXa6F0e2Vd6mlVld3hrq7xxvZJF2Wo2RkHTDqglke2kofG2n/3T5aAe4cxv53rAK5446CDp8dQN/8AoKT4PyKr35wf/ecs6bFhOeoICl68JCjlqTIs9z50Z8MvnNvmzPvn9jjKgAQHSkYoriSSGiGVnUDFdrpxWbv0q9UrMrI9Ob/7vO9V6jv6tRek2pJoU/yaAcEjZSLG5WyohrbqtY4Nlfc58TRbD1A26NpCDQ549rAf0Vi4UswISrVaHv9XScyQUPtlyLeCqY1VExTb04J7lVsQwDtUNXfQmUEwSMmTW9lmV+T7sIf1n+tqYsUyecaZFCANYfBFTsJJOYxxABq0Ejvr4VQIoq+8pV5D8U7rgMllATmmDj1LwABoVdVzzD7En0ghJ/N5hyNZwyLEuYswT9GfCWeoGddskBOAh5lrrlOH8XiffTy6TeS+bDTc3bilijl57ByFgXO//x0kFT+m2ql8q1dEaXvpThIufeiMMbJBDVcDeBdYXK3BTQVj4e/mpXYLOToCaTiqfOumWgLaqkoU85sYyykmbk9XDt7zT8lO8Q6qsBK72zyM+8QC7jm9P+PlQvqxogBQjm6aM9nlJBzfAlsGhw2F14xNeVs0N9XAWZREBW4DfwjT2JFnzleSj0eCMFgZoek3NBl2U3zZc92DajLkKlnLkH/NSa9g/gnm9FJedx9mG57dD2D5g7RM7Jf2yyOHZQAFjgAAADABAAA5JfIhLDi10ra8rBTByeFHJhMuQP9/cofov5mXdq6pUU9sj48JZAz9Haim/okEmy2CO2tQYVLZ+ufIUcJgn7bwswV2a16Kwg92k5/gGznbihflgMoTayfKqqV0yzPTV/QO4WTwFF4STQAtqLlrQrHjMVQ0hUvB9xL3EuwcUFO4N13F2mi0NoMrNjvt4S0/XdGVpldMq45ucliV4IxJ4St/LI8JRLZUdBJYjPN1BOwvBPtglwlaj4sGDUqglviplDBE6OL9idVJpruxRC/yE77E/YCCw1X7vCjJBHsHh5GQL4OV3YxDUP+NtZg/1uqT6aIoDRc/Jm/NXZDE3jYwsqE3IBUdUczaHf+A9a1LKwRTH6uN+q9iAz9Ze5+fUZ6tbqkGryOdanNprDFtzF1gT/h2E6WEG7V1Io5zdO5CgWCWAc89f0NJLytbjC2dvVHWMUIgAtL6BDZR/pPBLgm3igpgST3rHfjl0zNmPlzCaD0lueZAqGv+Ns3HHzJGGHUuyG29P+RzaaFv75t1r6gdVZ331/3HwKp/1rtjRMCvkBOd1g7rEYmzBX56KBKCHB7oMJ/0hA6yTwyQyIWidSsN+xqfb6rpdhjE6fv/a4l7nfbGY8n9KUzMuWBG8+yalqRvmJdtlMDu5fkrllQY0Eve99tXJsrAI5DGyodm/o7/OUpzkwrFLmm64APo07cfI9xF7pkmVDFhBzvlHMsCTlfkyXQrgwEIpSCSBbCzleXNEHJy0TrNxutoewEwEpiJVdnWxew/E45qb3moMyQ7Aw1UnlzQZsRVDeJKI0hcO7PZShN6Dh6OSKmPy1fGsBx+GqjqQ/dDeO8ra8mIIMbcHmvCxNMWBuiPsdhIAf2HqMb0cOur/BLqZU2IPhmA/WiZJ5TLmCONgpLztqEIYAYpcD51UhY/ZvfCDsm9jyB515Z2EfLWA4K6fCwzp0pBRdex2XI3UZ1MCCNk+v8cCZbqQNE//kQXf2w2VC05l4aOugz21eYypvrEHLW0RKLY0QRy32ST2+R9fjrdER5OlWDar0NAUlDwnJmmR+r0qxQ3Uds4Ob4k5cd3QVn+nsAJWPefsGHMDDxBuc/zUcUOGg1NeMSWXf8s6cAn2/pEW2ll4l4H12ZMaYEu20HbaDjSi6aHmFRroSPYrJW5mTxlO3qAuzKZlkhUvA/bqkkyCHTuUsrJtdwMK1c6/i4S9lJxK5X5tuvr35k6V9ku+7hdZ8nVpGUv7+bjdU8BIcGSTT8mUt/w0ZH7KgrpKZ3/jS+r2EMoCSP+OwXVcclbV3h0Yl50R5cuQHgGWcOBP3996pcbF3aWAlIvpyqADT5YxPf7d/7X1HpTzXfPTe2pYA3nDGELSA8MeaUXWT6FvZub5K1nipiEokWWDY4nQ78kIrR9zThQ1wOJpyw1zDDZ7sa6gJn+TlQzPX5RQvqi66t5Jkerzg++NOm98VIFeZ57/t/tqLRGJK2ZlJaaBxaO6UfUeilDVSfQpYBDH/itudDD4+XYEzkEVwYD5nASDU2luCRFRX9Kv6uHRROw2nkRDkiqh8zbIyHJcwrCFCFNELJl/sywH5ggHMtpD8rb69i5vbpKFCn9dIDG8qtGlwu7LWMwi420iXl9VfqUgAAAAA=');
