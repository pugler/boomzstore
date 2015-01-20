function changeStatus(num)
{

 elem = dojo.byId("arrow"+num);
 path = 'http://client.chip.in.th/cms/public/img/icon/';

 if(elem.src == path+'resultset_down.png') {
	elem.src = path+'resultset_up.png';
	dojo.byId('nav-msg-body'+num).className = '';
 } else {
	elem.src = path+'resultset_down.png';
	dojo.byId('nav-msg-body'+num).className = 'hide';

 }
}

function del(guid){
	if(confirm('คุณต้องการลบ ? ใช่ หรือ ไม่')==true){
		window.location = '/maichailen/dinsorworks/index.php/webboard/del/'+guid;
	}else {
		window.location = 'webboard';
	}
}

var htmlText = null;
var magad;
function addElement() 
{
    if(htmlText ==null) {
        magad = parseInt(dojo.byId('total-magad').value);
        
        htmlText = '<div style="height:30px;" id="magad-'+magad+'">'+dojo.byId('magad-'+magad).innerHTML+'</div>';
        //alert(htmlText)
    }
  
    next = magad + 1;
    while(htmlText.search('magad-'+magad) >-1) {
        htmlText = htmlText.replace('magad-'+magad, 'magad-'+next);
        //alert(htmlText)
    }
    dojo.byId('fmagad-list').innerHTML += htmlText;
    dojo.byId('fmagad-'+next).value = '';
    magad = next;
}

function resetValues(id)
{
    dojo.byId(id).value = '';
}

function removeElement(id)
{
    dojo.destroy(id);
}