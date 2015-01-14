var cal1x = new CalendarPopup("caldiv")	
cal1x.showNavigationDropdowns();

//用於列表,判斷是否有勾選物件,若有則執行移除;
function remove_and_confirm(obj,func)
{
	var objForm =document.getElementById(obj.id).form;
	var objLen = objForm.length;
	var errmsg='';
   	for (var iCount = 0; iCount < objLen; iCount++)
   	{
    	if (objForm.elements[iCount].type == "checkbox")
      	{
        	if(objForm.elements[iCount].checked == true)
          	{          
				var a_str=objForm.elements[iCount].name; 
	
				if(parseInt(a_str.length)>0)
				{					
					var b_div=a_str.replace(func+'_id',func+'_name');
					var c_div=a_str.replace(func+'_id','');
					errmsg+= c_div+" ";
          			errmsg+= document.getElementById(b_div).innerHTML + "\r\n";          	
          		}
          	}
      	}   
    }
    
    if(errmsg!='')
    {       
		errmsg=lang['m_ConfirmRomove']+"\r\n\r\n"+errmsg
		if(confirm(errmsg) == true)
		{
			CallXajax('remove_'+func+'_confirm_del',obj);			
		}		
	}
}

//決定搜尋bar的收合
function searchbar_oc(objname)
{
	var obj = document.getElementsByName(objname+"_open")[0];
	if(obj.style.display=="")
	{	//要隱藏			
		document.getElementsByName(objname+"_close")[0].style.display="";
		document.getElementsByName(objname+"_open")[0].style.display="none";
	}
	else
	{			
		document.getElementsByName(objname+"_close")[0].style.display="none";
		document.getElementsByName(objname+"_open")[0].style.display="";		
	}
}