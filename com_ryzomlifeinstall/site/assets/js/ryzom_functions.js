/**
* @param aObject span element of the skill tree
* @desc expand or hide ul branch of the skill tree
**/
function expandNotExpand(aObject){
 		
 		aObject=aObject.parentNode;
 		try{
 			
 	 		if (aObject.getElementsByTagName('ul')[0].style.display=='none' || !aObject.getElementsByTagName('ul')[0].style.display)
 				aObject.getElementsByTagName('ul')[0].style.display='block';
 			else
 				aObject.getElementsByTagName('ul')[0].style.display='none';
 		}catch(e){
 		
 		}
 		
 		
}
/**
* @desc show or hide a tab page of the inventory
* @param aCurrentTab a href link witch call the function
* @param aCurrentDiv id of the div to be displayed
**/
function displayTabPage(aCurrentTab,aCurrentDiv) 
{   
	
	lDivContener=aCurrentTab.parentNode.parentNode.parentNode;
	lDivs=lDivContener.getElementsByTagName('div');
	aCurrentDiv.className='activ';
	for(var lCpt=0;lCpt<lDivs.length;lCpt++ ){
		lIdPart=lDivs[lCpt].className.split('-');
		
		if(lDivs[lCpt].className==aCurrentDiv){ 
			lDivs[lCpt].style.display='block';
			document.getElementById('link-'+lIdPart[1]).className='activ';
			
		}
		else{
			lDivs[lCpt].style.display='none';
			document.getElementById('link-'+lIdPart[1]).className='';
		
		}
	}
	//document.getElementById(aCurrentDiv).style.display='block';
}    

function displaySimpleTabPage(aHrefCurrent,aHrefHide,aShow,aHide) 
{  
	document.getElementById(aShow).style.display='block';
	document.getElementById(aHide).style.display='none';
	aHrefCurrent.className='activ';
	document.getElementById(aHrefHide).className='';
	
}
/**
* @desc order html table
* @param aOrder 
* @param aDir
* @param aTask
**/
function tableOrdering( aOrder, aDir, aTask )
{

        var lForm = document.adminForm;

        lForm.filter_order.value = aOrder;
        lForm.filter_order_Dir.value = aDir;
        document.adminForm.submit( aTask );
}

/**
*
*/
function openMapAjaxWindows(aUrl) {
	  var win = new Window({className: "alphacube", title: "My Position", top:70, left:100, width:800, height:600, url: aUrl, showEffectOptions: {duration:1.5}}); 
	  win.show();     
}