<?php 
	include_once(DAO_PATH. "/UserDAO.class.php" );
?>

<!DOCTYPE html>

<body> 
<div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Les Collaborateurs </h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Identifiant</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Prenom</a></th>
					<th class="table-header-repeat line-left"><a href="">E-mail</a></th>
					<th class="table-header-repeat line-left"><a href="">Last Login</a></th>
					<th class="table-header-repeat line-left"><a href="">Hire Date </a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
								<?php
$usr = new UserDAO;
$arrValues=$usr->listUser(0);
foreach ($arrValues as $row){
    
?>
				<tr>
					<td><input  type="checkbox"/></td>
					<td><?php echo $row["id_user"]?></td>
					<td><?php echo $row["prenom_user"]?></td>
					<td><?php echo $row["nom_user"]?></td>
					<td><?php echo $row["email"]?></td>
					<td><?php echo $row["last_login"]?></td>
					<td><?php echo $row["hire_date"] ?></td>
					
					<td class="options-width">
					<a href="index.php?module=collab&option=edit&id=<?php echo $row["id_user"] ?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="" title="Edit" class="icon-2 info-tooltip"></a>
					</td>
				</tr>
				<?php }?>
				
				

				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div> 
</body>
</html>
