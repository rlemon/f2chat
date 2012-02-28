$("#userid").keyup(function(event) { 

	var username = $.trim($(this).val());
	if( username.length > 0 ) {
		$.ajax({
			type: "POST",
			url: "/user/check_userid/",
			data: { userid : username },
			dataType: "json",
			success: function(data){
				$("#status").html(data.result);
				if( data && data.inuse ) { 
					$("#enter").removeAttr("disabled");   
				} else {
					$("#enter").attr("disabled","disabled");  
				}
				 
			},
			error: function(data){
				console.log(data.responseText);
			}
		});
	} else {
		$("#status").html("");
		$("#enter").attr("disabled","disabled"); 
	}
});
