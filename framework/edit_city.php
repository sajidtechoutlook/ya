<?php
	$onloadBody = "document.customer_addform.city_name.focus();";
	
	$cityinfo = $rodb->getTableFromDB("select * from ".$rodb->prefix."city where city_id='".$_REQUEST['city_id']."'");
	
	if(isset($_REQUEST['action']) && $_REQUEST['action']=='update')
	{
		if(!$rodb->getCellFromDB("select city_name from ".$rodb->prefix."city where city_name='".$_REQUEST['city_name']."' and city_id!='".$_REQUEST['city_id']."' and user_id='".getBusinessId()."'")){
			$rodb->updateInDB("
			city_name = '".$_REQUEST['city_name']."'",
			"city_id='".$_REQUEST['city_id']."' and city_userid='".getBusinessId()."'",
			$rodb->prefix."city");
			$msg = "City Updated Successfully!";
            // die;
		}else{
			$msg = "City with this name already exists!";
		}
	}
	$cityinfo = $rodb->getTableFromDB("select * from ".$rodb->prefix."city where city_id='".$_REQUEST['city_id']."'");
?>
  <form action="" method="post" id="edit_city" name="edit_city">
  <table width="100%" border="0" align="center">
	<tr>
		<td align="center" style="color:#FF0000" colspan="8"><?php (isset($msg))?$msg:''?></td>
	</tr>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="city_id" value="<?=$_REQUEST['city_id']?>" />
	<tr>
      <td width="31%">&nbsp;</td>
      <td width="32%"><strong>Name</strong></td>
      <td width="37%"><strong>Action</strong></td>
    </tr>
	<tr>
      <td></td>
      <td>
		<input type="text" name="city_name" value="<?=$cityinfo[0]['city_name']?>" />
	  </td>
      <td>
          <input name="update" type="submit" value="Update">
	  </td>
	</tr>
	<tr>
    </tr>
	<tr><td colspan="4">&nbsp;</td></tr>
    </table>
    </form>
<?php include "show_cities.php";?>