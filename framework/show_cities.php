<?php
	if(!isset($_REQUEST['ct_id'])) $_REQUEST['ct_id'] = 0;
	$allCities = $dblink->getTableFromDB(" select * from ".$rodb->prefix."city where city_userid = '".getBusinessId()."' and city_ct_id='".$_REQUEST['ct_id']."' order by city_name");

?>
<table width="100%" border="1" align="center">
<tr><td colspan="4">&nbsp;Categories</td></tr>
<?php
$i=0;
while(isset($allCities[$i]))
{
?>
    <tr>
        <td>&nbsp;</td>
        <td>
            <a href="<?php echo getPageUrl("edit_city")?>&amp;city_id=<?php echo $allCities[$i]['city_id']?>"><?php echo $allCities[$i]['city_name']?></a>
        </td>
        <td>
            <a href="javascript:;" onclick="
            if(confirm('Are you sure to Delete?')){
                window.location='<?php echo getPageUrl("delete_permanently"); ?>&type=city&id=<?php echo $allCities[$i]['city_id']?>';
            }
            ">Delete</a>
            <!--<a href="manage_city.php?action=delete&city_id=<?php echo $allCities[$i]['city_id']?>">Delete</a>-->
        </td>
    </tr>
    <?php
        $i++;
    }
    ?>
</table>