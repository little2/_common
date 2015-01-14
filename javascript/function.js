//bar--
var strNavAgent = navigator.userAgent.toLowerCase();
if(strNavAgent.indexOf("firefox") != -1)
{
  browsername='firefox';
}
else
{
  browsername='ie';
}


function include(filename)
{
	var head = document.getElementsByTagName('head')[0];
	
	script = document.createElement('script');
	script.src = filename;
	script.type = 'text/javascript';
	
	head.appendChild(script)
}


function submitenter(e,func)
{
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;
	if (keycode == 13)
	{
		call_user_func (func)
	   return false;
	}
	else
	{		
	   return true;
	}
}


function call_user_func (cb) {
    // Call a user function which is the first parameter  
    // 
    // version: 1109.2015
    // discuss at: http://phpjs.org/functions/call_user_func    // +   original by: Brett Zamir (http://brett-zamir.me)
    // +   improved by: Diplom@t (http://difane.com/)
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // *     example 1: call_user_func('isNaN', 'a');
    // *     returns 1: true    var func;
 
    if (typeof cb === 'string') {
        func = (typeof this[cb] === 'function') ? this[cb] : func = (new Function(null, 'return ' + cb))();
    }    else if (Object.prototype.toString.call(cb) === '[object Array]') {
        func = (typeof cb[0] == 'string') ? eval(cb[0] + "['" + cb[1] + "']") : func = cb[0][cb[1]];
    }
    else if (typeof cb === 'function') {
        func = cb;    }
 
    if (typeof func != 'function') {
        throw new Error(func + ' is not a valid function');
    } 
    var parameters = Array.prototype.slice.call(arguments, 1);
    return (typeof cb[0] === 'string') ? func.apply(eval(cb[0]), parameters) : (typeof cb[0] !== 'object') ? func.apply(null, parameters) : func.apply(cb[0], parameters);
}


function preefunction(object_id)
{
	
	var tagname;
	location.href="#a_function_list";
	old_ojbect_number=document.getElementById('function_number').value;
	document.getElementById('val').value="";
	if(old_ojbect_number!=object_id)
	{	
		
		//先將舊的還原	
		old_objrow=old_ojbect_number.split('_');
		if(!old_objrow[1])
		{
			old_objrow[1]='1';
			old_ojbect_number=old_objrow[0]+"_"+old_objrow[1];
		}	
		
		//把新的加上去
		object_number=object_id;		
		objrow=object_number.split('_');
		if(!objrow[1])
		{
			object_number=objrow[0]+"_1";
			objrow[1]='1';
		}
		
		document.getElementById("function_number").value=object_number;	
		
		if(old_objrow[0]!=objrow[0])
		{
			UnsetAll(old_ojbect_number);
			if(browsername=='ie')
			{
				tagname="className";
			}
			else if(browsername=='firefox')
			{
				tagname='class';
			}
			else
			{
				alert('31232');
			}

			document.getElementById(objrow[0]).setAttribute(tagname, 'activeTab');
			document.getElementById(objrow[0]+"_a").setAttribute(tagname, 'active1');
			document.getElementById(objrow[0]+"_b").setAttribute(tagname, 'active2');
			document.getElementById(objrow[0]+"_c").setAttribute(tagname, 'active3');
			document.getElementById(objrow[0]+"_d").setAttribute(tagname, 'activeTabText');
			document.getElementById("subfun").innerHTML=document.getElementById(objrow[0]+"_e").innerHTML;		
		}

		if((old_objrow[1]!=objrow[1])||(old_objrow[0]!=objrow[0]))
		{
			if(browsername=='ie')
			{
				tagname="className";
			}
			else if(browsername=='firefox')
			{
				tagname='class';
			}
			else
			{
				alert('31232');
			}

			document.getElementById(old_ojbect_number).setAttribute(tagname, 'inactiveText');
			document.getElementById(object_number).setAttribute(tagname, 'activeText');

		}
	}
	
	object_number=document.getElementById("function_number").value;	
	
	CallXajaxByName(object_number,'mng');		
	
}


function UnsetAll(object_name)
{
	old_objrow=old_ojbect_number.split('_');
	document.getElementById(old_objrow[0]).className='inactiveTab';
	document.getElementById(old_objrow[0]+"_a").className='inactive1';
	document.getElementById(old_objrow[0]+"_b").className='inactive2';
	document.getElementById(old_objrow[0]+"_c").className='inactive3';
	document.getElementById(old_objrow[0]+"_d").className='inactiveTabText';
}


//主要用於分頁時的頁碼展現功能
function CallXajaxWithPageByName(act,page,objname)
{	
	var fieldname=act+'_gotopage';
	if(is_element_exist(fieldname))
	{
		
	}
	else
	{
		if(!is_element_exist('temp_zone'))
		{
			document.body.innerHTML+="<div id='temp_zone' name='temp_zone'></div>";
		}
				
		var html_inner='<input type="hidden" id="'+fieldname+'" name="'+fieldname+'" value="1">';
		document.getElementById("temp_zone").innerHTML+=html_inner;
	}
	
	document.getElementsByName("action")[0].value=act;	
	document.getElementsByName("gotopage")[0].value=page;	
	document.getElementsByName(fieldname)[0].value=page;	
	
	xajax_processForm(xajax.getFormValues(objname));	
}



//
function CallXajax(act,obj)
{	
	CallXajaxWithParameterByName(act,obj.form.name,null,null);
}

function CallXajax(act,obj,overwrite)
{	
	CallXajaxWithParameterByName(act,obj.form.name,null,null,overwrite);
}

//
function CallXajaxByName(act,objname)
{	
	CallXajaxWithParameterByName(act,objname,null,null,true);
}

function CallXajaxByName(act,objname,overwrite)
{	
	CallXajaxWithParameterByName(act,objname,null,null,overwrite);
}


//
function CallXajaxByNameWithParameter(act,objname,parameter,type)
{	
	CallXajaxWithParameterByName(act,objname,parameter,type,true);
}

function CallXajaxByNameWithParameter(act,objname,parameter,type,overwrite)
{	
	CallXajaxWithParameterByName(act,objname,parameter,type,overwrite);
}

//
function CallXajaxWithParameter(act,obj,parameter,type)
{	
	CallXajaxWithParameterByName(act,obj.form.name,parameter,type,true);
}

function CallXajaxWithParameter(act,obj,parameter,type,overwrite)
{	
	CallXajaxWithParameterByName(act,obj.form.name,parameter,type,overwrite);
}


//
function CallXajaxWithParameterByName(act,objname,parameter,type)
{	
	CallXajaxWithParameterByName(act,objname,parameter,type,true);
}


function CallXajaxWithParameterByName(act,objname,parameter,type,overwrite_mode)
{	

	document.getElementsByName("action")[0].value=act;	

	if(parameter)
	{
		if(overwrite_mode=='append')
		{
			parameter=get_combine_parameter_string(document.getElementsByName("val")[0].value,parameter);
		}
				
		if(type=="v")
		{			
			document.getElementsByName("val")[0].value=parameter;	
		}
		else if(type=="c")
		{
			document.getElementsByName("ctempval")[0].value=parameter;	
		}
		else if(type=="f")
		{	////用於指定某值或filler用的值
			document.getElementsByName("fixedtempval")[0].value=parameter;	
		}
		else if(type=="s")
		{	//用於暫時給予某值
			document.getElementsByName("selectedtempval")[0].value=parameter;	
		}
		else
		{
			document.getElementsByName("tempval")[0].value=parameter;		
		}
	}
	xajax_processForm(xajax.getFormValues(objname));	
}



//合併參數後取得字串
function get_combine_parameter_string(pre_string,new_string)
{
	var str="";
	var com=combine_parameter(pre_string,new_string);
	for(var key in com){
		var str1=key+"="+ com[key]+";"
		str=str+str1;
		}

	return str;
}

//合併參數
function combine_parameter(pre_string,new_string)
{
	var com = new Object();
	var arr=split_to_row(pre_string);
	for(var key in arr){
		var _temp_str='com.'+key+'=arr[key]';
		eval(_temp_str);
		}

	var arr=split_to_row(new_string);
	for(var key in arr){
		var _temp_str='com.'+key+'=arr[key]';
		eval(_temp_str);	
		}
	return com;

}

//將字串轉成陣列(object)
function split_to_row(parameter_str)
{
	block_str=parameter_str.split(";");
	var objstr="";
	for(var key in block_str)
	{ 
		if(key.length>2) continue;
		var sec_string=block_str[key];
		if(sec_string.length!=0)
		{		
			detail=sec_string.split("=");				
			if(objstr.length>0) objstr+=",";
			objstr+="'"+detail[0]+"':'"+detail[1]+"'";	

		}
	} 	
	cmd='var arr={'+objstr+'};';
	eval(cmd);	
	return arr;
}



//全選
function chkallbutton(obj)
{	
	var objForm =document.getElementById(obj.id).form;
	var objLen = objForm.length;
		   
   for (var iCount = 0; iCount < objLen; iCount++)
   {
      if (obj.checked)
      {
         if (objForm.elements[iCount].type == "checkbox")
         {
             objForm.elements[iCount].checked = true;
         }
      }
      else
      {
         if (objForm.elements[iCount].type == "checkbox")
         {
             objForm.elements[iCount].checked = false;
         }
      }
    }
	

}


/* Demo Note:  This demo uses a FileProgress class that handles the UI for displaying the file name and percent complete.
The FileProgress class is not part of SWFUpload.
*/


/* **********************
   Event Handlers
   These are my custom event handlers to make my
   web application behave the way I went when SWFUpload
   completes different tasks.  These aren't part of the SWFUpload
   package.  They are part of my application.  Without these none
   of the actions SWFUpload makes will show up in my application.
   ********************** */
function fileQueued(file) {
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setStatus("Pending...");
		progress.toggleCancel(true, this);

	} catch (ex) {
		this.debug(ex);
	}

}

function fileQueueError(file, errorCode, message) {
	try {
		if (errorCode === SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED) {
			alert("You have attempted to queue too many files.\n" + (message === 0 ? "You have reached the upload limit." : "You may select " + (message > 1 ? "up to " + message + " files." : "one file.")));
			return;
		}

		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setError();
		progress.toggleCancel(false);

		switch (errorCode) {
		case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
			progress.setStatus("File is too big.");
			this.debug("Error Code: File too big, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
			progress.setStatus("Cannot upload Zero Byte files.");
			this.debug("Error Code: Zero byte file, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
			progress.setStatus("Invalid File Type.");
			this.debug("Error Code: Invalid File Type, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		default:
			if (file !== null) {
				progress.setStatus("Unhandled Error");
			}
			this.debug("Error Code: " + errorCode + ", File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		}
	} catch (ex) {
        this.debug(ex);
    }
}

function fileDialogComplete(numFilesSelected, numFilesQueued) {
	try {
		if (numFilesSelected > 0) {
			document.getElementById(this.customSettings.cancelButtonId).disabled = false;
		}
		
		/* I want auto start the upload and I can do that here */
		this.startUpload();
	} catch (ex)  {
        this.debug(ex);
	}
}

function uploadStart(file) {
	try {
		/* I don't want to do any file validation or anything,  I'll just update the UI and
		return true to indicate that the upload should start.
		It's important to update the UI here because in Linux no uploadProgress events are called. The best
		we can do is say we are uploading.
		 */
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setStatus("Uploading...");
		progress.toggleCancel(true, this);
		
		//
		updateDisplay.call(this, file);
	}
	catch (ex) {}
	

		

	
	return true;
}

function uploadProgress(file, bytesLoaded, bytesTotal) {
	try {
		var percent = Math.ceil((bytesLoaded / bytesTotal) * 100);

		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setProgress(percent);		
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadSuccess(file, serverData) {
	try {		
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setComplete();
		progress.setStatus("Complete.");
		progress.toggleCancel(false);

	} catch (ex) {
		this.debug(ex);
	}
}

function uploadError(file, errorCode, message) {
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setError();
		progress.toggleCancel(false);

		switch (errorCode) {
		case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
			progress.setStatus("Upload Error: " + message);
			this.debug("Error Code: HTTP Error, File name: " + file.name + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
			progress.setStatus("Upload Failed.");
			this.debug("Error Code: Upload Failed, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.IO_ERROR:
			progress.setStatus("Server (IO) Error");
			this.debug("Error Code: IO Error, File name: " + file.name + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
			progress.setStatus("Security Error");
			this.debug("Error Code: Security Error, File name: " + file.name + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
			progress.setStatus("Upload limit exceeded.");
			this.debug("Error Code: Upload Limit Exceeded, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
			progress.setStatus("Failed Validation.  Upload skipped.");
			this.debug("Error Code: File Validation Failed, File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
			// If there aren't any files left (they were all cancelled) disable the cancel button
			if (this.getStats().files_queued === 0) {
				document.getElementById(this.customSettings.cancelButtonId).disabled = true;
			}
			progress.setStatus("Cancelled");
			progress.setCancelled();
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
			progress.setStatus("Stopped");
			break;
		default:
			progress.setStatus("Unhandled Error: " + errorCode);
			this.debug("Error Code: " + errorCode + ", File name: " + file.name + ", File size: " + file.size + ", Message: " + message);
			break;
		}
	} catch (ex) {
        this.debug(ex);
    }
}

function uploadComplete(file) {
	if (this.getStats().files_queued === 0) {
		document.getElementById(this.customSettings.cancelButtonId).disabled = true;
	}
}



////統一上傳模組
function upload_received(numFilesUploaded) 
{	
	
	CallXajaxByName('upload_received','mng');
	
}

function upload_thum_received(numFilesUploaded) 
{	
	
	CallXajaxByName('upload_thum_received','mng');
	
}

function upload_receive(style,max_post_size,id,file_types,mode)
{	
	
var settings = 
{
	timestamp: Date.parse(new Date()),			
	flash_url : "../../common/swfupload/swfupload.swf",
	upload_url: "upload_receive.php",
	post_params: {"DateID": Date.parse(new Date()),"ID":id},
	file_post_name: "resume_file",				
	file_size_limit : max_post_size,
	
	file_types_description : "All",
	file_queue_limit : 0,
	custom_settings : {
		progressTarget : "fsUploadProgress",
		cancelButtonId : "btnCancel"
	},
	debug: false,
		// Button settings

	button_image_url: "./templates/"+style+"/images/XPButtonNoText_61x22.png",
	button_width: "61",
	button_height: "22",
	button_placeholder_id: "spanButtonPlaceHolder",
	button_text: '<span class="theFont">'+lang['Browse']+'</span>',
	//button_text_style: ".theFont { font-size: 12; }",
	button_text_left_padding: 12,
	//button_text_top_padding: 3,
	
	// The event handler functions are defined in handlers.js
	file_queued_handler : fileQueued,
	file_queue_error_handler : fileQueueError,
	file_dialog_complete_handler : fileDialogComplete,
	upload_start_handler : uploadStart,
	upload_progress_handler : uploadProgress,
	upload_error_handler : uploadError,
	upload_success_handler : uploadSuccess,
	upload_complete_handler : uploadComplete
};	

settings.file_types =file_types;

	if(mode=='thum')
	{
		settings.queue_complete_handler=upload_thum_received;
	}
	else
	{
		settings.queue_complete_handler=upload_received;
	}
//為了讓之後的XAJAX可以讀到這個檔案名稱
document.getElementsByName("timestamp")[0].value=settings.timestamp;
return settings;
}




//Validate



//檢查email是否合法
function check_Email(field_value)
{
	with (field_value)
	{
		apos=field_value.indexOf("@")
		dotpos=field_value.lastIndexOf(".")
		if (apos<1||dotpos-apos<2) 
	  	{
	  		return false
	  	}
		else 
		{
			return true
		}
	}
}


function check_CheckBox(fieldname)
{
	var ccount=0; 
	var obj=document.getElementsByName(fieldname);
	
	for (var i=0;i<obj.length;i++) 
	{ 
		if (obj[i].checked) 
			{ 		
			ccount=ccount+1;
			} 
	}
	if (ccount<1) 
	{ 
		var text=document.getElementsByName("S_"+fieldname)[0].innerHTML;
		return text+"\r\n";			
	}	
	return "";

}

function check_TextField(fieldname)
{

	if(is_element_exist(fieldname))
	{
	
		var value=document.getElementsByName(fieldname)[0].value;
	
		if(value=="")
		{
			if(is_element_exist("S_"+fieldname))
			{
				text=document.getElementsByName("S_"+fieldname)[0].innerHTML;
				return text+"\r\n";
			}			
		}
	}	
	
	return "";	
}

function is_element_exist(ElementName)
{
	var obj=document.getElementById(ElementName);
	if(obj==null)
		return false;
	else
		return true;
	
}


//**************************
// Detects if the current device is an iPhone.

function DetectIphone()
{
   var uagent = navigator.userAgent.toLowerCase();
   if (uagent.search("iphone") > -1)
      return true;
   else
      return false;
}

//**************************
// Detects if the current device is an iPod Touch.

function DetectIpod()
{
   var uagent = navigator.userAgent.toLowerCase();
   if (uagent.search("ipod") > -1)
      return true;
   else
      return false;
}

//**************************
// Detects if the current device is an iPhone or iPod Touch.
function DetectIphoneOrIpod()
{
    if (DetectIphone())
       return true;
    else if (DetectIpod())
       return true;
    else
       return fals
}



function fresh_now_time_start(field_title)
{
	var nowtime=document.getElementById(field_title).value;
	if(nowtime!="")
	{
		alertTimerId = setTimeout ('fresh_now_time("'+field_title+'");',1000);
		//setInterval('fresh_now_time("'+field_title+'");',1000);	
	}
	else
	{
		clearTimeout ( alertTimerId );
	}
}

function fresh_now_time(field_title)
{
	
	//dateObj   =   new   Date(year,   month,   date[,   hours[,   minutes[,   seconds[,ms]]]])
	if(is_element_exist(field_title))
	{
		
		var nowtime=document.getElementById(field_title).value;
		if(nowtime!="")
		{
			var timerow = nowtime.split(' ');
			var daterow = timerow[0].split('/');
	
			var hourrow = timerow[1].split(':');
		
			var date = new Date(daterow[0],daterow[1],daterow[2],hourrow[0],hourrow[1],hourrow[2]);
			
			strDate = date.getFullYear()+"/"+(date.getMonth())+"/"+date.getDate()+" "+date.getHours() + ':' + date.getMinutes() + ':';
			
			
			var second=(date.getSeconds()+1);
			if(second<10)
			{
				strDate += '0' + second;
		    }
		    else
		    {
		    	strDate += second;
		    }
		
			document.getElementById(field_title).value=strDate;
			
			alertTimerId = setTimeout ('fresh_now_time("'+field_title+'");',1000);
		}
		else
		{
			clearTimeout ( alertTimerId );
		}
	}
}

function open_new_window(url)
{
	if(url!="")
	{
		var title=new Date().getTime();
		window.open(url,title,'');
	}
}


if(!window.getComputedStyle){
	  window.getComputedStyle=function($target){
	    return $target.currentStyle;
	  };
	}

var isIe=(document.all)?true:false;
//設置select的可見狀態
function setSelectState(state)
{
	var objl=document.getElementsByTagName('select');
	for(var i=0;i<objl.length;i++)
	{
		objl[i].style.visibility=state;
	}
}

function mousePosition(ev)
{
	if(ev.pageX || ev.pageY)
	{
		return {x:ev.pageX, y:ev.pageY};
	}
	return {
	x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,y:ev.clientY + document.body.scrollTop - document.body.clientTop
	};
}

//跳出方法
function showMessageBox(wTitle,content)
{
	closeWindow();
	var bWidth=parseInt(document.documentElement.scrollWidth);
	var bHeight=parseInt(document.documentElement.scrollHeight);
	if(isIe){
		setSelectState('hidden');
	}
	
	var back=document.createElement("div");
	back.id="back";
	var styleStr="top:0px;left:0px;position:absolute;background:#666;width:"+bWidth+"px;height:"+bHeight+"px;";
	styleStr+=(isIe)?"filter:alpha(opacity=0);":"opacity:0;";
	back.style.cssText=styleStr;
	document.body.appendChild(back);
	showBackground(back,50);
	
	var mesW=document.createElement("div");
	mesW.id="mesWindow";
	mesW.className="mesWindow";
	mesW.innerHTML="<div class='mesWindowTop'><table width='100%' height='100%'><tr><td><b><div style='font-size: medium;'>"+wTitle+
	"</div></b></td><td style='width:1px;'><input type='button' onclick='closeWindow();' title='{$lang.Close}' class='close' value='X' /></td>" +
	"</tr></table></div><div class='mesWindowContent' id='mesWindowContent' align='left'>"+content+"</div>" +
	"<div style='padding:10px 10px 10px 10px' align='right'><input type='button' class='sbutton' onclick='closeWindow();' title='Close' value=' Close ' /></div>"+
			"<div class='mesWindowBottom'></div><div class='mesWindowBottom'></div>";
	
	var win_Width=bWidth*0.75;
	var win_Width_Space=bWidth*0.125;
	var win_y=document.body.scrollTop+200;
	//styleStr="left:"+(((pos.x-wWidth)>0)?(pos.x-wWidth):pos.x)+"px;top:"+(pos.y)+"px;position:absolute;width:"+wWidth+"px;";
	styleStr="left:"+win_Width_Space+"px;top:"+win_y+"px;position:absolute;width:"+win_Width+"px;";
	
	mesW.style.cssText=styleStr;
	document.body.appendChild(mesW);
}

//讓背景漸漸變暗
function showBackground(obj,endInt)
{
	if(isIe)
	{
		obj.filters.alpha.opacity+=1;
		if(obj.filters.alpha.opacity<endInt)
		{
			setTimeout(function(){showBackground(obj,endInt)},5);
		}
	}
	else
	{
		var al=parseFloat(obj.style.opacity);al+=0.01;
		obj.style.opacity=al;
		if(al<(endInt/100))
		{
			setTimeout(function(){showBackground(obj,endInt)},5);
		}
	}
}

//關閉視窗
function closeWindow()
{
	if(document.getElementById('back')!=null)
	{
		document.getElementById('back').parentNode.removeChild(document.getElementById('back'));
	}
	if(document.getElementById('mesWindow')!=null)
	{
		document.getElementById('mesWindow').parentNode.removeChild(document.getElementById('mesWindow'));
	}
	
	if(isIe)
	{
		setSelectState('');
	}
}


//隨著定義值,改變datalist or select 的 option
function option_change(datalist_field_name,select_field_name,new_option_span)
{	

	eval(document.getElementById(new_option_span).innerHTML);
	
	var len = optionList.length;
	var len_sort = optionSort.length;
	
	
    var ctrl2=document.getElementById(select_field_name);	
	for(var i=0;i<ctrl2.options.length;) 
	{ 
		ctrl2.removeChild(ctrl2.options[i]); 
	}   
	var option = document.createElement('option');	       	      
    ctrl2.appendChild(option);    
    for (var j=0; j < len_sort; j += 1) {
    	index=optionSort[j];    	
    	if(optionList[index])
    	{
    		ctrl2.options.add(new Option(optionList[index],index))
	        
    		//var option = document.createElement('option');	        
	        //option.value =index;
	        //option.text =optionList[index];
	        //ctrl2.appendChild(option);
	       
    	}
    }    

    var ctrl=document.getElementById(datalist_field_name);	
	if(ctrl!=null)
	{
		for(var i=0;i<ctrl.length;) 
		{ 
			ctrl.removeChild(ctrl.options[i]); 
		}
	}
  
	//新增
    for (var i=0; i < len_sort; i += 1) 
    {
    	index=optionSort[i];
    	if(optionList[index])
    	{    	  
    		 var ctrl=document.getElementById(datalist_field_name);	
    		 var option = document.createElement('option');	        
 	       option.value =optionList[index];;
 	 //     option.text =optionList[index];
 	        ctrl.appendChild(option);
    		
	     
	        
    	}
    }
    
}

function remove_selection_option(select_field_name)
{
	var ctrl=document.getElementById(select_field_name);	
	if(ctrl!=null)
	{
		for(var i=0;i<ctrl.options.length;) 
		{ 
			ctrl.removeChild(ctrl.options[i]); 
		}
	}
}

function add_selection_option(select_field_name,optionList,optionSort)
{
	if(optionList!="" && optionList!="undefined")
	{
		var len = optionList.length;
		var len_sort = optionSort.length;	
	
		var ctrl2=document.getElementById(select_field_name);	
		ctrl2.options.add(new Option("",""))
		//var option = document.createElement('option');	       	      
  //  ctrl2.appendChild(option);    
    
		for (var j=0; j < len_sort; j += 1) {
			index=optionSort[j];    	
			if(optionList[index])
			{    		
	      //  var option = document.createElement('option');		        
				ctrl2.options.add(new Option(optionList[index],index))
			}
		}
	}
}

function add_datalist_option(datalist_field_name,optionList,optionSort)
{
	if(optionList!="" && optionList!="undefined")
	{
		var len = optionList.length;
		var len_sort = optionSort.length;	
	
		var ctrl=document.getElementById(datalist_field_name);	
	 	      

    
		for (var j=0; j < len_sort; j += 1) {
			index=optionSort[j];    	
			if(optionList[index])
			{    		
	    
				//ctrl.options.add(new Option(optionList[index],""))
				
		        var option = document.createElement('option');	       
		        option.value = optionList[index];	      
		        ctrl.appendChild(option);
				
			}
		}
	}
}


