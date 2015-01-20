$(document).ready(function(){
	$('body').find('#FreeStyle_WorkArea').addClass('freestyle_area');
	$('.freestyle_area').each(function(i){
		$(this).addClass('freestyle_area_'+(i+1));
	});
	$('#FreeStyle_Search .Search_FontStyle').attr('align', 'center');
	$('#FreeStyle_BottomPage .style2 a').eq(7).attr({'href': 'http://www.boomzgadget.com', 'title': 'BoomzGadget by BoomzSore Dot Com'});
	$('#FreeStyle_BottomPage .style2 b').html('BoomzStore Dot Com');
	$('#FreeStyle_WorkArea .TabLeft').attr('width', '219');
	$('#FreeStyle_WorkArea #FreeStyle_ProductCate').attr('width', '219');
	
	var num_head = $('.ContentCaption_header').length;
	if ( num_head > 1 ) {
		$('.ContentCaption_header').eq(0).remove();
	}
});
