// Default skin
var root = location.href.split('/cms');
var webroot = root[0];
var temp = root[1].split('/');
var module = temp[1];

tinyMCE.init({
	// General options
	mode : "exact",
	elements : "elm1",
	theme : "simple"
});

function ajaxfilemanager(field_name, url, type, win) {
	//var root = location.href.split('/dinsorworks');
	//var webroot = root[0];
	//alert(webroot)
	switch (type) {
		case "image":
			type="img";
			break;
		case "media":
			break;
		case "flash": 
			break;
		case "file":
			break;
		default:
			return false;
	}
	var ajaxfilemanagerurl = webroot+"/cms/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?editor=tinymce&type="+type+"&mod="+module;
  	tinyMCE.activeEditor.windowManager.open({
  		url: ajaxfilemanagerurl,
  		width: 782,
   		height: 400,
   		inline : "yes",
   		close_previous : "yes"
  	},{
    	window : win,
     	input : field_name
   	});
}

function setFile(elementId, type)
{
    switch (type) {
		case "file":
			type = 'file';
			break;
        case "tape":
            type = 'tape';
            module = '';
            break;
		default:
			type = 'img';
	}

	var win = winOpen(webroot+'/cms/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?editor=form&type='+type+'&mod='+module+'&elementId='+elementId, 'ajaxFileImageManager', '400', '800');	
	return win;
}

function winOpen(windowUri, windowName, windowHeight, windowWidth)
{
    var centerWidth = (window.screen.width - windowWidth) / 2;
    var centerHeight = (window.screen.height - windowHeight) / 2;

    newWindow = window.open(windowUri, windowName, 'resizable=0,width=' + windowWidth + 
        ',height=' + windowHeight + 
        ',left=' + centerWidth + 
        ',top=' + centerHeight
		);

    newWindow.focus();
    return newWindow;
}