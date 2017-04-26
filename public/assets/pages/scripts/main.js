$(document).ready(function() {

  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
		var $total = navigation.find('li').length;
		var $current = index+1;
		if($current >= $total){
			$('#rootwizard').find('.pager .next').hide();
			$('#rootwizard').find('.pager .finish').show();
			$('#rootwizard').find('.pager .finish').removeClass('disabled');
 		}else{
 			$('#rootwizard').find('.pager .next').show();
			$('#rootwizard').find('.pager .finish').hide();
 		}
	}});

    // Submit Forms using Json
  	$('.json-form').submit(function(){
  		var action = $(this).attr('action');
  		$.post(action, $(this).serialize(), function(data){
          if(data.error == true){
            if($('.modal').is(':visible'))
              $('.modal').modal('hide');
            toastr.success(data.toast);
          }else{
            $.each(data.message, function(key,value){
              var element = $('#'+key);
              element.closest('div.form-group').removeClass('has-error').addClass(value.length > 0 ? 'has-error' : 'has-success').find('.text-danger').remove();
              element.after(value);
            });
            toastr.error(data.toast);
          }
  		},"json");
  		return false;
  	});

    // check checkboxes using data-values attribute by imploding 1,2,3,6
    $('.data-values').click(function(){
      var values = $(this).data('values');
      values = values.split(',');
      var parent = $(this).attr('href');
      $.each(values,function(i){
        var checkbox = parent + '-' + values[i];
        $(checkbox).prop('checked', true);
      });
    });

});
