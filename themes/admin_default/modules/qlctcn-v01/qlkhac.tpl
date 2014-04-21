<!-- BEGIN: main -->
	<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
		<table class="tab1">
			<caption>1. Thêm mới một thu nhập</caption>
			<tr>
				<td>Chọn nguồn thu</td>
				<td>
					<select>
						<option>-----</option>
						<!-- BEGIN: income_type -->
						<option value="{INCOME_TYPE.key}">{INCOME_TYPE.val}</option>
						<!-- END: income_type -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Chọn loại tài sản</td>
				<td>
					<select>
						<option>-----</option>
						<!-- BEGIN: asset_type -->
						<option value="{ASSET_TYPE.key}">{ASSET_TYPE.val}</option>
						<!-- END: asset_type -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Tên mô tả</td>
				<td><input type="text" name="txtname" value="" /></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="number" name="txtamount" /></td>
			</tr>
			<tr>
				<td>Ngày/tháng/năm phát sinh thu nhập</td>
				<td>
					<input name="birthday" class="datepicker hasDatepicker" value="" style="width: 90px;" maxlength="10" readonly="readonly" type="text" id="dp1397843998018">
					<img class="ui-datepicker-trigger" src="/nukeviet4/images/calendar.gif" alt="..." title="...">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input name="submit" type="submit" value="{LANG.save}" />
				</td>
			</tr>
		</table><br />
		
		
		<table class="tab1">
			<caption>2. Thêm mới một chi tiêu</caption>
			<tr>
				<td>Chọn nguồn thu</td>
				<td>
					<select>
						<option>-----</option>
						<!-- BEGIN: income_type -->
						<option value="{INCOME_TYPE.key}">{INCOME_TYPE.val}</option>
						<!-- END: income_type -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Chọn loại tài sản</td>
				<td>
					<select>
						<option>-----</option>
						<!-- BEGIN: asset_type -->
						<option value="{ASSET_TYPE.key}">{ASSET_TYPE.val}</option>
						<!-- END: asset_type -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Tên mô tả</td>
				<td><input type="text" name="txtname" value="" /></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="number" name="txtamount" /></td>
			</tr>
			<tr>
				<td>Ngày/tháng/năm phát sinh thu nhập</td>
				<td>
					<input name="birthday" class="datepicker hasDatepicker" value="" style="width: 90px;" maxlength="10" readonly="readonly" type="text" id="dp1397843998018">
					<img class="ui-datepicker-trigger" src="/nukeviet4/images/calendar.gif" alt="..." title="...">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input name="submit" type="submit" value="{LANG.save}" />
				</td>
			</tr>
		</table><br />
		
		
	</form>
<!-- END: main -->
