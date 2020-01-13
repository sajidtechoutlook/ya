<?php

if(empty($_POST['start_date'])){
    $start_date = date('Y-m-d', time()-(3600*24*7));
}else{
    $start_date = explode(" ",$_POST['start_date']);
    $start_date = explode("-",$start_date[0]);
    $start_date = $start_date[2]."-".$start_date[1]."-".$start_date[0];
}
if(empty($_POST['end_date'])){
    $end_date = date('Y-m-d').' 23:59:59';
}else{
    $end_date = explode(" ",$_POST['end_date']);
    $end_date = explode("-",$end_date[0]);
    $end_date = $end_date[2]."-".$end_date[1]."-".$end_date[0].' 23:59:59';
}	
$start_date_show = explode(" ",$start_date);
$start_date_show = explode("-",$start_date_show[0]);
$start_date_show = $start_date_show[2]."-".$start_date_show[1]."-".$start_date_show[0];
$end_date_show = explode(" ",$end_date);
$end_date_show = explode("-",$end_date_show[0]);
$end_date_show = $end_date_show[2]."-".$end_date_show[1]."-".$end_date_show[0];
	$q = " select * from 

	".$rodb->prefix."product prd inner join ".$rodb->prefix."category cat 

	on productid='".$_REQUEST['productid']."' 

	and userid = '".getBusinessId()."' 

	and prd.cat_id = cat.cat_id inner join ".$rodb->prefix."top_category tc

	on cat.cat_tc_id = tc.tc_id

	";

	$productinfo = $dblink->getTableFromDB($q);

	$current_stock = $dblink->getCellFromDB(" select ps_stock from ".$rodb->prefix."product_stock where ps_productid='".$_REQUEST['productid']."' and ps_date = (select max(ps_date) from ".$rodb->prefix."product_stock where ps_date < '".$start_date."') ");

	if(!$current_stock>0){

		if(!$current_stock = $productinfo[0]['opening_stock']){

			$current_stock=0;

		}

	}

?>

  <link href="images/global.css" rel="stylesheet" type="text/css">

  <table width="100%" align="center" border="0" cellpadding="3" cellspacing="1" class="text">

      <form action="" method="post">
	<tr>
            <td align="center"><input type="text" name="start_date" id="start_date" value="<?php echo $start_date_show?>" placeholder="DD-MM-YYYY" /></td>
            <td align="center"><input type="text" name="end_date" id="end_date" value="<?php echo $end_date_show?>" placeholder="DD-MM-YYYY" /></td>
            <td align="center"><input type="submit" name="generate" value="generate" /></td>
        </tr>
      </form>
	<tr bgcolor="#CBFCBE">
          <td width="1" align="left"><strong>#</strong></td>
          <td width="186" align="left"><strong>Date</strong></td>
		  <td width="204" align="left"><strong>Description </strong></td>
		  <td width="175" align="left"><strong>Quantity</strong></td>
		  <td width="175" align="left"><strong>Rate</strong></td>
		  <td width="175" align="left"><strong>Amount</strong></td>
	</tr>

	<?php
	$productionq = "select * from ".$rodb->prefix."product p 
	
	inner join ".$rodb->prefix."production_products pp 
on p.productid = pp.productid
inner join ".$rodb->prefix."category c 
on c.cat_id = p.cat_id
inner join ".$rodb->prefix."top_category tc
on tc.tc_id = c.cat_tc_id
inner join ".$rodb->prefix."production pr
on pr.id = pp.production_id

where production_id in (select id from ".$rodb->prefix."production where userid='".getBusinessId()."' and worker_id='".getWorkerId()."' and dt >= '".$start_date."' and dt <= '".$end_date."' ) 

order by pp.dt asc";
	
	
	/*" select * from ".$rodb->prefix."products p inner join ".$rodb->prefix."production_products pp
	where production_id in (select id from ".$rodb->prefix."production where userid='".getBusinessId()."' and worker_id='".getWorkerId()."' and dt >= '".$start_date."' and dt <= '".$end_date."' ) order by pp.dt asc ";*/

	$production = $dblink->getTableFromDB($productionq);
	
	$i = 0;
		
	if($production[$i] != ''){

		$class = 'bgcolor="#CCCCCC"';

                $total = 0;

		while($production[$i]){
                        
                        //if($i > 0 and $production[$i]['id'] == $production[$i-1]['id']){$i++; continue;}
                    
			if($class == 'bgcolor="#CCCCCC"'){

				$class = '';

			}else{

				$class = 'bgcolor="#CCCCCC"';

			}

			?>

			<tr <?php echo $class?>>

                            <td><?php echo ($i+1);?></td>
                            <td><?php echo _retDate($production[$i]['dt']);?></td>

                            <td><?php echo $production[$i]['tc_name'].'-'.$production[$i]['cat_name'].'-'.$production[$i]['productname'];?></td>
                            <td><?php echo $production[$i]['qty']; $total_qty += $production[$i]['qty'];?></td>
                            <td><?php echo $production[$i]['sale_price'];?></td>

                            <td><?php echo $sub_total = $production[$i]['qty']*$production[$i]['sale_price']; $total+=$sub_total; ?></td>

			</tr>

			<?php

			$i++;

		}

	}

	?>

                        <tr>
							<th colspan="2"></th>
							<th align="left">Total: </th>
							<th align="left"><?php echo $total_qty;?></th>
							<th align="left"></th>
							<th align="left"><?php echo $total;?></th>
						</tr>

  </table>

<script>

    $( function() {

        var $sd = $( "#start_date" ).val( );

        var $ed = $( "#end_date" ).val( );

        

        $( "#start_date" ).datepicker( );

        $( "#start_date" ).datepicker( "option", "dateFormat", "dd-mm-yy" );

        

        $( "#end_date" ).datepicker( );

        $( "#end_date" ).datepicker( "option", "dateFormat", "dd-mm-yy" );

        

        $( "#start_date" ).val($sd);

        $( "#end_date" ).val($ed);

    } );

</script>