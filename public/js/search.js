$(function() {
	$('#data-products').on('input', function() {
		var input_str = $(this).val();
		if(input_str.length > 1) {
			$.ajax({
				url:'/ajax/datalist',
				data: {'list':input_str},
				type:'Post',
				dataType:'json',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				success:function(data) {
					$('#mydata').empty();
					for(var i = 0; i < data.length; i++) {
						$('#mydata').append("<option value = '"+ data[i].name + "' />");
					}
				},
				error:function(msg) {
					console.log(msg);
				}
			});
		}
	});
})