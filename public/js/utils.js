var utils={};utils.buildFormData=function(model,source){var data={};for(var k in source){data[model+'['+k+']']=source[k];}
return data;};utils.createAlias=function(str){str=str.trim();str=utils.removeDiacritical(str);str=utils.removeSpecialChar(str);str=utils.stripMultiSpace(str);str=str.replace(/\s/g,'-');return str.toLowerCase();};utils.removeDiacritical=function(str){str=str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g,'a');str=str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g,'e');str=str.replace(/(ì|í|ị|ỉ|ĩ)/g,'i');str=str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g,'o');str=str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g,'u');str=str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g,'y');str=str.replace(/(đ)/g,'d');str=str.replace(/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/g,'A');str=str.replace(/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/g,'E');str=str.replace(/(Ì|Í|Ị|Ỉ|Ĩ)/g,'I');str=str.replace(/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/g,'O');str=str.replace(/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/g,'U');str=str.replace(/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/g,'Y');str=str.replace(/(Đ)/g,'D');return str;};utils.removeDiacriticalV=function(str){str=str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g,'a');str=str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g,'e');str=str.replace(/(ì|í|ị|ỉ|ĩ)/g,'i');str=str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g,'o');str=str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g,'u');str=str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g,'y');str=str.replace(/(đ)/g,'d');str=str.replace(/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/g,'a');str=str.replace(/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/g,'e');str=str.replace(/(Ì|Í|Ị|Ỉ|Ĩ)/g,'i');str=str.replace(/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/g,'o');str=str.replace(/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/g,'u');str=str.replace(/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/g,'y');str=str.replace(/(Đ)/g,'d');return str;};utils.removeSpecialChar=function(str){return str.replace(/[^A-Za-z0-9\-\s]/g,'');};utils.stripMultiSpace=function(str){return str.replace(/\s+/g,' ');};utils.updateUrlParam=function(url,param,paramVal)
{var TheAnchor=null;var newAdditionalURL="";var tempArray=url.split("?");var baseURL=tempArray[0];var additionalURL=tempArray[1];var temp="";if(additionalURL)
{var tmpAnchor=additionalURL.split("#");var TheParams=tmpAnchor[0];TheAnchor=tmpAnchor[1];if(TheAnchor)
additionalURL=TheParams;tempArray=additionalURL.split("&");for(var i=0;i<tempArray.length;i++)
{if(tempArray[i].split('=')[0]!=param)
{newAdditionalURL+=temp+tempArray[i];temp="&";}}}
else
{var tmpAnchor=baseURL.split("#");var TheParams=tmpAnchor[0];TheAnchor=tmpAnchor[1];if(TheParams)
baseURL=TheParams;}
if(TheAnchor)
paramVal+="#"+TheAnchor;var rows_txt=temp+""+param+"="+paramVal;return baseURL+"?"+newAdditionalURL+rows_txt;}
utils.getHostName=function(url){var match=url.match(/:\/\/(www[0-9]?\.)?(.[^/:]+)/i);if(match!=null&&match.length>2&&typeof match[2]==='string'&&match[2].length>0){return match[2];}
else{return null;}};utils.roundToTwo=function(n){return+(Math.round(n+"e+2")+"e-2");}
utils.gup=function(name,url){if(!url)url=location.href;name=name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");var regexS="[\\?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(url);return results==null?null:results[1];}