jQuery(function(){
	jQuery('.main_footer_scroll').on('click', function(){
		jQuery("html, body").animate({scrollTop: 0}, "slow");
	});

	jQuery('.load_more_button').on('click', function(){
		jQuery(this).hide();
		var offset = jQuery('.posts_contents article').length;
		jQuery.ajax({
			type:'POST',
			url:ajaxUrl,
			data:{action:'LoadMorePosts', offset:offset},
			success:function(html){
				jQuery('.load_more_button').show();
				if(html != ''){
					jQuery('.posts_contents').append(html);
				}else{
					jQuery('.load_more_button').hide();
				}
			}

		});
	});
});