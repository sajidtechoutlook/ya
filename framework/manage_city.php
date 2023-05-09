<?php 
	$onloadBody = "document.customer_addform.ct_name.focus();";
	if(!isset($_REQUEST['ct_id'])) $_REQUEST['ct_id'] = 0;
	if(isset($_REQUEST['action']) && $_REQUEST['action']=='update')
	{
		if(!$dblink->getCellFromDB("select ct_name from ".$rodb->prefix."customer_type where ct_name='".$_REQUEST['ct_name']."' and ct_id!='".$_REQUEST['ct_id']."'")){
			$dblink->updateInDB("ct_name='".$_REQUEST['ct_name']."'","ct_id='".$_REQUEST['ct_id']."'",$rodb->prefix."customer_type");
			$msg = "Sector updated Successfully!";
		}else{
			$msg = "Sector with this name already exists!";
		}
	}
	if(isset($_REQUEST['action']) && $_REQUEST['action']=='delete')
	{
		// $dblink->deleteFromDB("delete from ".$rodb->prefix."customers where customer_city_id='".$_REQUEST['city_id']."'");
		// $dblink->deleteFromDB("delete from ".$rodb->prefix."city where city_ct_id='".$_REQUEST['city_id']."'");
	}

	if(isset($_REQUEST['action']) && $_REQUEST['action']=='add')
	{
		if(!$dblink->getCellFromDB("select city_name from ".$rodb->prefix."city where city_name='".$_REQUEST['city_name']."' and city_ct_id='".$_REQUEST['ct_id']."'")){
			$dblink->writeToDB("(city_name,city_ct_id,city_userid) values ('".$_REQUEST['city_name']."','".$_REQUEST['ct_id']."','".getBusinessId()."')",$rodb->prefix."city");
			$msg = "City Added Successfully!";
		}else{
			$msg = "City with this name already exists!";
		}
	}
	// $ct_name = $dblink->getCellFromDB("select ct_name from ".$rodb->prefix."customer_type where ct_id='".$_REQUEST['ct_id']."'");
?>
  <table width="100%" border="0" align="center">
	<tr>
		<td align="center" style="color:#FF0000" colspan="8"><?php echo (isset($msg))?$msg:''?></td>
	</tr>
	<form action="" method="post">
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="ct_id" value="<?php echo $_REQUEST['ct_id']?>" />
	</form>
	<tr>
      <td width="31%">&nbsp;</td>
      <td width="32%"><strong>Name</strong></td>
      <td width="37%"><strong>Action</strong></td>
    </tr>
	<form action="" method="post" id="city_addform" name="city_addform">
	<input type="" name="action" value="add" style="display: none;" />
	<input type="hidden" name="ct_id" value="<?php echo $_REQUEST['ct_id']?>" />
	<tr>
      <td>&nbsp;</td>
      <td>
	  	<input type="text" name="city_name" />
	  </td>
      <td>
          <input name="add_new" type="submit" value="Add New">
	  </td>
    </tr>
	</form>

  </table>
  <?php include "show_cities.php";?>
