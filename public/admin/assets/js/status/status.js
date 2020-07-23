// function to change the status (active/deactive) //
$(document).on('change','.change_status',function(){
	tbl=$(this).attr('data-table');
	id=$(this).attr('data-id');
	data=$("input[name='status_"+id+"']:checked").val();

	if(data!=1)
		data=0;
	
	$.post(BASE_URL+'Welcome/change_status/'+tbl+'/'+id,{'status':data},function(fb){
		if(fb.match('1'))
		{
			alert('Status Successfully Changed');
		}
		else 
		{
			alert('Status Not Changed')
		}
	})
});