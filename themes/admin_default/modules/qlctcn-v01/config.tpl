<!-- BEGIN: main -->
<style>
	.ds{
		color: #FF6600;		
	}
	
	
</style>
<form action="" method="post" onsubmit="return checkvalue()">
<!--  ------------------------------------------------------------------------------ -->
	{LANG.config_101}<br />
	{LANG.config_102}
	<ol>
		<!-- BEGIN: asset_type -->
		<li class="ds">{ASSET_TYPE.val}</li>
		<!-- END: asset_type -->
	</ol>
	{LANG.config_103}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_asset_type" placeholder="{LANG.config_105}" />
			<input name="submit_asset_type" type="submit" value="{LANG.config_104}" />
			</td>
		</tr>
	</table><hr/>
<!--  ------------------------------------------------------------------------------ -->
	{LANG.config_201}<br />
	{LANG.config_202}
	<ol>
		<!-- BEGIN: income_type -->
		<li class="ds">{INCOME_TYPE.val}</li>
		<!-- END: income_type -->
	</ol>
	{LANG.config_203}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_income_type" placeholder="{LANG.config_205}" />
			<input name="submit_income_type" type="submit" value="{LANG.config_204}" />
			</td>
		</tr>
	</table><hr/>
<!--  ------------------------------------------------------------------------------ -->	
	{LANG.config_301}<br />
	{LANG.config_302}
	<ol>
		<!-- BEGIN: spend_type -->
		<li class="ds">{SPEND_TYPE.val}</li>
		<!-- END: spend_type -->
	</ol>
	{LANG.config_303}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_spend_type" placeholder="{LANG.config_305}" />
			<input name="submit_spend_type" type="submit" value="{LANG.config_304}" />
			</td>
		</tr>
	</table><hr/>
<!--  ------------------------------------------------------------------------------ -->	
	{LANG.config_401}<br />
	{LANG.config_402}
	<ol>
		<!-- BEGIN: place_type -->
		<li class="ds">{PLACE_TYPE.val}</li>
		<!-- END: place_type -->
	</ol>
	{LANG.config_403}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_place_type" placeholder="{LANG.config_405}" />
			<input name="submit_place_type" type="submit" value="{LANG.config_404}" />
			</td>
		</tr>
	</table><hr/>	
<!--  ------------------------------------------------------------------------------ -->	
	{LANG.config_501}<br />
	{LANG.config_502}
	<ol>
		<!-- BEGIN: priority_type -->
		<li class="ds">{PRIORITY_TYPE.val}</li>
		<!-- END: priority_type -->
	</ol>
	{LANG.config_503}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_priority_type" placeholder="{LANG.config_505}" />
			<input name="submit_priority_type" type="submit" value="{LANG.config_504}" />
			</td>
		</tr>
	</table><hr/>	
<!--  ------------------------------------------------------------------------------ -->	
	{LANG.config_601}<br />
	{LANG.config_602}
	<ol>
		<!-- BEGIN: borrow_type -->
		<li class="ds">{BORROW_TYPE.val}</li>
		<!-- END: borrow_type -->
	</ol>
	{LANG.config_603}
	<table>
		<tr>
			<td>
			<input type="text" name="txt_borrow_type" placeholder="{LANG.config_605}" />
			<input name="submit_borrow_type" type="submit" value="{LANG.config_604}" />
			</td>
		</tr>
	</table><hr/>	
</form>

<script type="application/javascript">
	function checkvalue(){
		var asset_type = 	$("input[txt_asset_type]").val();
		var income_type = 	$("input[txt_income_type]").val();
		var spend_type = 	$("input[txt_spend_type]").val();
		var place_type = 	$("input[txt_place_type]").val();
		var priority_type = $("input[txt_priority_type]").val();
		var borrow_type = 	$("input[txt_borrow_type]").val();
		
		if(asset_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_full_name}');
			$("input[txt_asset_type]").focus();*/
			return false;
		}else if(income_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_phone}');
			$("input[txt_income_type]").focus();*/
			return false;
		}else if(spend_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_phone}');
			$("input[txt_spend_type]").focus();*/
			return false;
		}else if(place_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_phone}');
			$("input[name=phone]").focus();*/
			return false;
		}else if(priority_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_phone}');
			$("input[name=phone]").focus();*/
			return false;
		}else if(borrow_type == ''){
			alert("Ban chua nhap!");
			/*alert('{LANG.error_phone}');
			$("input[name=phone]").focus();*/
			return false;
		}
		return true;
	}
</script>










<!-- END: main -->
