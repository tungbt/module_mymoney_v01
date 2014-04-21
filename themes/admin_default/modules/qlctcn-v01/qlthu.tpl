<!-- BEGIN: main -->
	<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<table class="tab1">
		<caption>2. Danh sách thu nhập</caption>
		<thead>
			<tr>
								<td><a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;sortby=userid&amp;sorttype=DESC">ID &darr;</a></td>
				
				<td><a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;sortby=username&amp;sorttype=ASC">Loại tài sản</a></td>
				
				<td><a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;sortby=full_name&amp;sorttype=ASC">Nguồn thu nhập</a></td>
				
				<td><a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;sortby=email&amp;sorttype=ASC">Email</a></td>
				
				<td><a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;sortby=regdate&amp;sorttype=ASC">Ngày đăng ký</a></td>
				
				<td class="center"><strong>Hoạt động</strong></td>
				<td><strong>Chức năng</strong></td>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="7">
								<input type="button" value="Xuất dữ liệu ra file Excel" name="data_export"/>
				
				
				</td>
			</tr>
		</tfoot>
		<tbody>
						<tr>
				<td> 1 </td>
				<td>
								<img style="vertical-align:middle;" alt="Quản trị tối cao" src="/nukeviet4/themes/admin_default/images/admin1.png" width="38" height="18" />
				
				Admin </td>
				<td> Admin </td>
				<td><a href="mailto:doan281@gmail.com">doan281@gmail.com</a></td>
				<td> 07/04/2014 18:37 </td>
				<td class="center"><input type="checkbox" name="active" id="change_status_1" value="1" checked="checked" disabled="disabled" /></td>
				<td style="white-space: nowrap">
								&nbsp;&nbsp; <em class="icon-edit icon-large">&nbsp;</em> <a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;op=edit&amp;userid=1">Sửa</a>
				
				
				</td>
			</tr>
			
			<tr>
				<td> 2 </td>
				<td>
				
				doan281 </td>
				<td> Phạm Văn Đoan </td>
				<td><a href="mailto:chuottui281@gmail.com">chuottui281@gmail.com</a></td>
				<td> 17/04/2014 13:22 </td>
				<td class="center"><input type="checkbox" name="active" id="change_status_2" value="2" checked="checked" onclick="nv_chang_status(2);" /></td>
				<td style="white-space: nowrap">
								&nbsp;&nbsp; <em class="icon-edit icon-large">&nbsp;</em> <a href="/nukeviet4/admin/index.php?language=vi&amp;nv=users&amp;op=edit&amp;userid=2">Sửa</a>
				
								&nbsp;&nbsp; <em class="icon-trash icon-large">&nbsp;</em> <a href="javascript:void(0);" onclick="nv_row_del(2);">Xóa</a>
				
				</td>
			</tr>
			
		</tbody>
	</table>
		
		
		
		
		
		
		
		
		<div style="text-align: center"><input name="submit" type="submit" value="{LANG.save}" /></div>
	</form>
<!-- END: main -->
