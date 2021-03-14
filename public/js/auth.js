app.service('auth',function($uibModal){this.signin=function(){$uibModal.open({animation:true,templateUrl:'signinModal',controller:'signinModal',windowClass:'modal-default popup-mobile',backdrop:'static',resolve:{params:function(){return{}}}});};this.signup=function(){$uibModal.open({animation:true,templateUrl:'signupModalV2',controller:'signupModalV2',windowClass:'modal-default popup-mobile',backdrop:'static',resolve:{params:function(){return{}}}});};this.forgot=function(){$uibModal.open({animation:true,templateUrl:'forgotModal',controller:'forgotModal',backdrop:'static',resolve:{params:function(){return{}}}});};this.profile=function(){loading.show();$.ajax({url:baseUrl+'/auth/get',method:'GET',success:function(resp){if(resp.success){$uibModal.open({animation:true,templateUrl:'profileModal',controller:'profileModal',resolve:{params:function(){return{user:resp.data}}}});}
loading.hide();}});};this.password=function(){$uibModal.open({animation:true,templateUrl:'passwordModal',controller:'passwordModal',resolve:{params:function(){return{}}}});};this.confirm=function(){$uibModal.open({animation:true,templateUrl:'confirmOtp',controller:'confirmOtp',resolve:{params:function(){return{}}}});};this.password='';this.isLogin=null;});app.controller('auth',function($scope,$rootScope,auth,firebaseNotification,$uibModal,localStorageService){$scope.total_items=0;$scope.final=0;$scope.user=auth.isLogin;$scope.check_affiliate=1;check_affiliate=$scope.check_affiliate;$scope.firebasePushToken='';$scope.signin=function(){firebaseNotification.setTokenSentToServer(false);auth.signin();};if(window.location.hash){if(window.location.hash.substring(1)=='signin'){$scope.signin();}}
$scope.signup=function(){auth.signup();};$scope.loginAfterSignup=function(){$scope.user=auth.isLogin;$scope.checkUser();};$scope.checkUser=function(k){$.ajax({url:baseUrl+'/auth/check',method:'GET',success:function(resp){if(resp.success){$scope.$apply(function(){$scope.user=resp.data;$rootScope.user=resp.data;user=$scope.user;$('.total-item-in-cart').html(resp.data.totalProduct);});firebaseNotification.requestPermission();$scope.initNotificationDropdown(resp.unreadCount);}else{firebaseNotification.setTokenSentToServer(false);$scope.$apply(function(){$('.total-item-in-cart').html(resp.data.totalProduct);});}}});};$rootScope.$on("CallCheckUserMethod",function(){$scope.checkUser();});$rootScope.$on("AuthcontrollerLoginAfterSignup",function(){$scope.loginAfterSignup();});$rootScope.$on("CallGetPackageMethod",function(){});$rootScope.$on("Authcontroller_UpdateFirebasePushToken",function(event,params){$scope.firebasePushToken=firebaseNotification.token;$scope.$apply(function(){$scope.firebasePushToken=firebaseNotification.token;});});$scope.getLocations=function(){$rootScope.areas=$scope.areas=JSON.parse(localStorage.getItem('areas'));$rootScope.wards=$scope.wards=JSON.parse(localStorage.getItem('wards'));$rootScope.provinces=$scope.provinces=JSON.parse(localStorage.getItem('provinces'));$rootScope.districts=$scope.districts=JSON.parse(localStorage.getItem('districts'));}
$scope.signout=function(){loading.show();$.ajax({url:baseUrl+'/auth/signout',method:'GET',success:function(resp){if(resp.success){$scope.$apply(function(){localStorageService.remove('userInfo');$scope.user=null;$scope.buyer=null;window.location.href='/';});}
loading.hide();}});};$scope.profile=function(){auth.profile();};$scope.checkorder=function(){$uibModal.open({animation:true,templateUrl:'orderModal',controller:'orderModal',resolve:{params:function(){return{}}}});}
$scope.postmanSubmit=function(){$uibModal.open({animation:true,templateUrl:'postman',controller:'postman',resolve:{params:function(){return{}}}});}
$scope.checkUser(3);$scope.getLocations();$scope.isNotificationDropdownVisible=false;$scope.notificationList=[];$scope.notificationUnreadCount=0;$scope.isNotificationListLoading=false;$scope.isLoadMoreEnabled=false;$scope.initNotificationDropdown=function(notificationUnreadCount){if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.notificationList=[];$scope.notificationUnreadCount=notificationUnreadCount||0;$scope.isNotificationListLoading=false;}else{$scope.$apply(function(){$scope.notificationList=[];$scope.notificationUnreadCount=notificationUnreadCount||0;$scope.isNotificationListLoading=false;});}
$('#NotificationDroprown').click(function(e){e.stopPropagation();});$('body').click(function(){$scope.isNotificationDropdownVisible=false;$scope.$apply(function(){$scope.isNotificationDropdownVisible=false;});});$('#NotificationDroprown .scroll-view').scroll(function(){if($scope.isLoadMoreEnabled){if($(this).scrollTop()+$(this).innerHeight()>=$(this)[0].scrollHeight-100){if($scope.notificationList&&$scope.notificationList.length>0){$scope.getNotificationList(20,$scope.notificationList[$scope.notificationList.length-1].id);}}}});}
$scope.toggleNotificationDropdown=function(e){e.preventDefault();e.stopPropagation();$scope.isNotificationDropdownVisible=!$scope.isNotificationDropdownVisible;if($scope.isNotificationDropdownVisible){var pageSize=20;if($scope.notificationList&&$scope.notificationList.length>pageSize){pageSize=$scope.notificationList.length;}
$scope.getNotificationList(pageSize,0);}}
$scope.getNotificationList=function(pageSize,lastId){if(!$scope.isNotificationListLoading){if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.isNotificationListLoading=true;}else{$scope.$apply(function(){$scope.isNotificationListLoading=true;});}
if(!pageSize||pageSize<=0){pageSize=20;}
if(!lastId){lastId=0;}
$.ajax({url:baseUrl+'/notification/list',method:'GET',data:{pageSize:pageSize,lastId:lastId},success:function(resp){if(resp.success&&resp.data){$scope.$apply(function(){$scope.notificationUnreadCount=resp.data.unreadCount;if(lastId&&lastId>0){$scope.notificationList=$scope.notificationList.concat(resp.data.notifications);}else{$scope.notificationList=resp.data.notifications;}
if(!resp.data.notifications||resp.data.notifications.length<pageSize){$scope.isLoadMoreEnabled=false;}else{$scope.isLoadMoreEnabled=true;}});}},complete:function(){$scope.$apply(function(){$scope.isNotificationListLoading=false;});}});}}
$scope.handleOnNotificationItemClick=function(notiObj){let index=-1;for(let i=0;i<$scope.notificationList.length;i++){if($scope.notificationList[i].id===notiObj.id){index=i;break;}}
if(!notiObj.readTime||notiObj.readTime<=0){if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.notificationUnreadCount=Math.max(0,$scope.notificationUnreadCount-1);if(index>=0){$scope.notificationList[index].readTime=(new Date()).getTime()/1000;}}else{$scope.$apply(function(){$scope.notificationUnreadCount=Math.max(0,$scope.notificationUnreadCount-1);if(index>=0){$scope.notificationList[index].readTime=(new Date()).getTime()/1000;}});}
$scope.markNotificationAsRead(notiObj.id);}
if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.isNotificationDropdownVisible=false;}else{$scope.$apply(function(){$scope.isNotificationDropdownVisible=false;});}
if(notiObj.link&&(notiObj.link+'').length>0){window.location.href=notiObj.link;return;}
if(notiObj.refExtraData){if(notiObj.refExtraData.link&&(notiObj.refExtraData.link+'').length>0){window.location.href=notiObj.refExtraData.link;}else if(notiObj.refExtraData.packageId&&notiObj.refExtraData.type==5){window.location.href='/lich-su-mua-hang.html?packageId='+notiObj.refExtraData.packageId+'&rate=1';}else if(notiObj.refExtraData.orderCode){window.location.href='/hoa-don/'+notiObj.refExtraData.orderCode;}else if(notiObj.refExtraData.packageId){window.location.href='/lich-su-mua-hang.html?packageId='+notiObj.refExtraData.packageId;}}}
$scope.markNotificationAsRead=function(id){$.ajax({url:baseUrl+'/notification/mark-as-read',method:'GET',data:{id},success:function(resp){},complete:function(){}});}
$scope.convertTimesampeToString=function(t){if(!t||t<=0){return '';}
var d=new Date(t*1000);var str='';if(d.getHours()<10){str=str+'0';}
str=str+d.getHours()+':';if(d.getMinutes()<10){str=str+'0';}
str=str+d.getMinutes()+' ';if(d.getDate()<10){str=str+'0';}
str=str+d.getDate()+'/';if((d.getMonth()+1)<10){str=str+'0';}
str=str+(d.getMonth()+1)+'/';str=str+d.getFullYear();return str;}
$rootScope.$on('Authcontroller_ReloadNotifications',function(event,params){var pageSize=20;$scope.getNotificationList(pageSize,0);});$rootScope.$on('Authcontroller_NotificationClick',function(event,params){if(params.data&&params.data.data&&params.data.data!==''){try{const extraData=JSON.parse(params.data.data);if(extraData){if(extraData.type==80){$rootScope.$emit("ChatController_OpenChat",{sender:extraData});}else if(extraData.link&&(extraData.link+'').length>0){window.location.href=extraData.link;}else if(extraData.packageId&&extraData.type==5){window.location.href='/lich-su-mua-hang.html?packageId='+extraData.packageId+'&rate=1';;}else if(extraData.orderCode){window.location.href='/hoa-don/'+extraData.orderCode;}else if(extraData.packageId){window.location.href='/lich-su-mua-hang.html?packageId='+extraData.packageId;}}}catch(ex){}}});$rootScope.$on('Authcontroller_UpdateUnreadNotificationCount',function(event,params){if(params){if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.notificationUnreadCount=params.notificationUnreadCount||0;}else{$scope.$apply(function(){$scope.notificationUnreadCount=params.notificationUnreadCount||0;});}}});$scope.highlightOrderCode=function(value){return(value||'').replace(/\[(.*?)\]/gi,'<b>$1</b>').replace(/\n/gi,'<br/>');};});app.controller('postman',function($scope,$uibModalInstance,params,auth,modal){$scope.submit=function(){loading.show();$.ajax({url:baseUrl+'/auth/postman',method:'POST',success:function(resp){$uibModalInstance.dismiss('cancel');loading.hide();modal.alert(resp.message);}});}
$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('orderModal',function($scope,$uibModalInstance,params,auth,modal){$scope.ok=function(){loading.show();$.ajax({url:baseUrl+'/auth/checkorder',data:{email:$scope.email,orderId:$scope.orderId},method:'POST',success:function(resp){if(resp.success){location.href=resp.message;}else{$scope.$apply(function(){$scope.error=resp.message;});}
loading.hide();}});};$scope.signup=function(){$uibModalInstance.dismiss('cancel');auth.signup();};$scope.forgot=function(){$uibModalInstance.dismiss('cancel');auth.forgot();};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('signinModal',function($scope,$rootScope,$uibModal,$uibModalInstance,params,auth,modal){$scope.step=1;$scope.showBtnResendOtp=0;$scope.resendotp=0;$scope.otpToken='';$scope.otp='';$scope.time=300;$scope.otpTime=function(timec,idhtml){$scope.time=300;var cdown=setInterval(function(){timec=timec-1;var minutes=Math.floor(timec/60);var seconds=timec%60;var text=minutes+"phút "+seconds+"giây ";$('#'+idhtml).html('('+text+')');if(timec<=0){$scope.$apply(function(){$scope.time=0;});clearInterval(cdown);}},1000);}
$scope.ok=function(){loading.show();$.ajax({url:baseUrl+'/auth/signinv2',data:{email:$scope.email,password:$scope.password,remember:$scope.remember,step:$scope.step,otpToken:$scope.otpToken,resendotp:$scope.resendotp,otp:$scope.otp},method:'POST',success:function(resp){if(resp.success){$scope.$apply(function(){if(resp.otpToken){$scope.otpToken=resp.otpToken;}
if(resp.step){$scope.step=resp.step;if(resp.step==2){$scope.showBtnResendOtp++;$scope.otpTime(300,'countdownTimeOtpLogin');}}
if(resp.otp_message){$scope.otp_message=resp.otp_message;}
if(resp.logined){location.reload();}});}else{$scope.$apply(function(){$scope.errors=resp.data;});}
loading.hide();}});};$scope.signup=function(){$uibModalInstance.dismiss('cancel');auth.signup();};$scope.forgot=function(){$uibModalInstance.dismiss('cancel');auth.forgot();};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('forgotModal',function($scope,$uibModalInstance,params,auth,modal){$scope.ok=function(){loading.show();$.ajax({url:baseUrl+'/auth/forgot',data:{email:$scope.email},method:'POST',success:function(resp){if(resp.success){$uibModalInstance.dismiss('cancel');modal.alert('Yêu cầu lấy lại mật khẩu thành công, mật khẩu mới đã được gửi tới email của bạn!');}else{$scope.$apply(function(){$scope.error=resp.message;});}
loading.hide();}});};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('confirmOtp',function($scope,$rootScope,$uibModalInstance,params,auth,modal,vcRecaptchaService){$scope.key='6LfSRLMUAAAAAC06EZjhdC2kAF74GIV8Ic2AkRJb';$scope.oid='';$scope.otp='';$scope.message='';$scope.checkOtp=false;$scope.success=false;$scope.loading=false;$scope.checkSend=false;$scope.loadingResendOtp=false;$scope.data=params.user;$scope.customerId='';$scope.customerEmail='';$scope.action='dm xac nhan nhieu vl';$scope.resendOtp=function(){$scope.loadingResendOtp=true;$.ajax({url:baseUrl+'/auth/sendotp',data:{Customer:$scope.data},method:'POST',success:function(resp){$scope.$apply(function(){$scope.loadingResendOtp=false;$scope.checkSend=true;$scope.customerId=resp.customerId;$scope.customerEmail=resp.customerEmail;});}});}
$scope.sendOtp=function(){$scope.action='confirmnow';$.ajax({url:baseUrl+'/auth/sendotp',data:{Customer:$scope.data},method:'POST',success:function(resp){if(resp.success){$scope.$apply(function(){$scope.customerId=resp.customerId;$scope.customerEmail=resp.customerEmail;});}else{$scope.$apply(function(){$scope.message=resp.message;});}}});};$scope.change=function(){if($scope.otp.replace("_","").length>5){$('.g-recaptcha').show();}};$scope.ok=function(){$scope.message='OTP không đúng';$scope.checkOtp=false;if($scope.otp.replace("_","").length>5){$scope.loading=true;$.ajax({url:baseUrl+'/auth/confirmotp',data:{otp:$scope.otp,customerId:$scope.customerId,customerEmail:$scope.customerEmail,token:$('#g-recaptcha-response').val()},method:'GET',success:function(resp){$scope.loading=false;if(resp.success){modal.alert('Đăng ký thành tài khoản khách hàng Voso thành công, ngay bây giờ bạn đã có quyền lợi khách hàng thân thiết Voso!');$uibModalInstance.dismiss('cancel');$scope.$apply(function(){auth.isLogin=resp.user;$rootScope.$emit("AuthcontrollerLoginAfterSignup",{});});}else{$scope.$apply(function(){$scope.message=resp.message;$scope.checkOtp=true;});}}});}else{if($scope.otp.replace("_","").length==0){$scope.message='OTP chưa nhập';}
$scope.checkOtp=true;}}
$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('confirmOtpPage',function($scope,$rootScope,auth,modal){$scope.oid='';$scope.otp='';$scope.message='';$scope.checkOtp=false;$scope.success=false;$scope.loading=false;$scope.checkSend=false;$scope.loadingResendOtp=false;$scope.data=user;$scope.action='dm xac nhan nhieu vl';$scope.resendOtp=function(){$scope.loadingResendOtp=true;$.ajax({url:baseUrl+'/auth/sendotp',data:{Customer:$scope.data},method:'POST',success:function(resp){$scope.$apply(function(){$scope.loadingResendOtp=false;$scope.checkSend=true;});}});}
$scope.sendOtp=function(){$scope.action='confirmnow';$.ajax({url:baseUrl+'/auth/sendotp',data:{Customer:$scope.data},method:'POST',success:function(resp){if(resp.success){$scope.$apply(function(){});}else{$scope.$apply(function(){$scope.message=resp.message;});}}});}
$scope.ok=function(){$scope.message='OTP không đúng';$scope.checkOtp=false;if($scope.otp.replace("_","").length>5){$scope.loading=true;$.ajax({url:baseUrl+'/auth/confirmotp',data:{otp:$scope.otp},method:'GET',success:function(resp){$scope.loading=false;if(resp.success){modal.alert('Đăng ký thành tài khoản khách hàng Voso thành công, ngay bây giờ bạn đã có quyền lợi khách hàng thân thiết Voso!');$uibModalInstance.dismiss('cancel');$scope.$apply(function(){auth.isLogin=resp.user;$rootScope.$emit("AuthcontrollerLoginAfterSignup",{});});}else{$scope.$apply(function(){$scope.message=resp.message;$scope.checkOtp=true;});}}});}else{if($scope.otp.replace("_","").length==0){$scope.message='OTP chưa nhập';}
$scope.checkOtp=true;}}});app.controller('passwordModal',function($scope,$uibModalInstance,params,auth,modal){$scope.ok=function(){loading.show();$.ajax({url:baseUrl+'/auth/password',data:{old:$scope.old,password:$scope.password},method:'POST',success:function(resp){if(resp.success){$uibModalInstance.dismiss('cancel');modal.alert('Đổi mật khẩu thành công!');}else{$scope.$apply(function(){$scope.error=resp.message;});}
loading.hide();}});};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});function findGetParameter(parameterName){var result=null,tmp=[];location.search.substr(1).split("&").forEach(function(item){tmp=item.split("=");if(tmp[0]===parameterName)result=decodeURIComponent(tmp[1]);});return result;}
app.controller('addMerchantPersonal',function($scope,fileDialog,$uibModal,modal,$sce,$rootScope){var email=findGetParameter('email')
var phone=findGetParameter('phone')
$scope.merchant={provinceId:0,districtId:0,name:'',avatar:'',description:'',address:'',contactName:'',contactEmail:email,contactPhone:phone,contactDetail:'',stockManaged:0,categories:0,introduce:1,joinTime:'',activated:1,isPos:0,status:'0',igree:0,type:0};$scope.areas=[];$scope.provinces=[];$scope.districts=[];$scope.status_options=status_options;$scope.formTitle='Thêm bưu cục mới';$scope.openPopup=false;$scope.init=function(){$scope.getLocations();};$scope.getLocations=function(){$rootScope.areas=$scope.areas=JSON.parse(localStorage.getItem('areas'));$rootScope.wards=$scope.wards=JSON.parse(localStorage.getItem('wards'));$rootScope.provinces=$scope.provinces=JSON.parse(localStorage.getItem('provinces'));$rootScope.districts=$scope.districts=JSON.parse(localStorage.getItem('districts'));}
$scope.getCaNhan=function(){$scope.merchant.type='0';}
$scope.getDoanhNghiep=function(){$scope.merchant.type='1';}
$scope.popup=function(){if($scope.openPopup){$scope.openPopup=false;}else{$scope.openPopup=true;}
$(".drop-categories").toggle();}
$scope.removeImageLicensePicture=function(index){$scope.arrImagesLicense.splice(index,1);};$scope.removeImageCertificateFoodPicture=function(index){$scope.arrImagesCertificateFood.splice(index,1);};$scope.ok=function(){loading.show();$scope.merchant.licensePicture=$scope.arrImagesLicense;$scope.merchant.certificateFoodPicture=$scope.arrImagesCertificateFood;$scope.errors=[];$.ajax({url:baseUrl+'/merchant/addmerchantpersonal',data:utils.buildFormData('Merchant',$scope.merchant),method:'POST',success:function(resp){loading.hide();if(resp.success){$uibModal.open({animation:true,templateUrl:'confirmOtpMerchant',controller:'confirmOtpMerchant',backdrop:'static',keyboard:false,resolve:{params:function(){return{merchant:resp.merchant}}}});}else{$scope.$apply(function(){$scope.errors=resp.data;});if(resp.message){bootbox.alert(resp.message);}}}});};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('confirmOtpMerchant',function($scope,$uibModalInstance,params,auth,modal,$sce,vcRecaptchaService){$scope.key='6LfSRLMUAAAAAC06EZjhdC2kAF74GIV8Ic2AkRJb';$scope.oid='';$scope.otp='';$scope.message='';$scope.checkOtp=false;$scope.success=false;$scope.loading=false;$scope.checkSend=false;$scope.loadingResendOtp=false;$scope.data=params.merchant;$scope.mId='';$scope.mEmail='';$scope.action='dm xac nhan nhieu vl';var time=60;$scope.init=setInterval(function(){time=time-1;$('#countdownTime').html(time);if(time<=0){clearInterval($scope.init);}},1000);$scope.resendOtp=function(){$scope.loadingResendOtp=true;$.ajax({url:baseUrl+'/auth/sendotpmerchant',data:{Merchant:$scope.data},method:'POST',success:function(resp){$scope.$apply(function(){$scope.loadingResendOtp=false;$scope.checkSend=true;time=60;$scope.init();});}});}
$scope.ok=function(){$scope.message='OTP không đúng';$scope.checkOtp=false;if($scope.otp.replace("_","").length>5){$scope.loading=true;$.ajax({url:baseUrl+'/auth/confirmotpmerchant',data:{otp:$scope.otp,mEmail:$scope.data.contactEmail,mId:$scope.data.id,token:$('#g-recaptcha-response').val()},method:'GET',success:function(resp){$scope.loading=false;if(resp.success){$uibModalInstance.dismiss('cancel');$token=resp.data;window.location.href="https://mc.voso.vn/site/autologin?token="+$token;}else{$scope.$apply(function(){$scope.message=resp.message;$scope.checkOtp=true;});}}});}else{if($scope.otp.replace("_","").length==0){$scope.message='OTP chưa nhập';}
$scope.checkOtp=true;}}
$scope.signup=function(){$uibModalInstance.dismiss('cancel');auth.signup();};$scope.forgot=function(){$uibModalInstance.dismiss('cancel');auth.forgot();};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('login_landingpage',function($scope,auth,modal,$sce){$scope.code='';$scope.ok=function(){loading.show();$.ajax({url:baseUrl+'/landingpage/login',data:{code:$scope.code},method:'get',success:function(resp){loading.hide();if(resp.success){$scope.$apply(function(){location.href=window.location.href;modal.alert('Đăng nhập thành công!');});}else{$scope.$apply(function(){$scope.errors=resp.data;});}}});}});app.controller('signupMobile',function($scope,$uibModal,$rootScope,auth,modal){$scope.user={check:'check',provinceId:0,districtId:0,wardId:0,igree:0};$scope.poses=[];$scope.poses.splice(0,0,{id:0,posName:'Chọn bưu cục'});$scope.locations=[];loading.show();$scope.getLocations=function(){$rootScope.wards=$scope.wards=JSON.parse(localStorage.getItem('wards'));$rootScope.provinces=$scope.provinces=JSON.parse(localStorage.getItem('provinces'));$rootScope.districts=$scope.districts=JSON.parse(localStorage.getItem('districts'));$scope.locations={areas:JSON.parse(localStorage.getItem('areas')),provinces:JSON.parse(localStorage.getItem('provinces')),districts:JSON.parse(localStorage.getItem('districts')),wards:JSON.parse(localStorage.getItem('wards')),}};$scope.getLocations();$scope.getListPos=function(districtId){loading.show();$.ajax({url:baseUrl+'/auth/getlistpos?districtId='+districtId,method:'GET',success:function(resp){loading.hide();if(resp.success){$scope.$apply(function(){$scope.poses=resp.data;$scope.poses.splice(0,0,{id:0,posName:'Chọn bưu cục'});});}}});};$scope.changeProvince=function(){if($scope.user.provinceId!=0){angular.forEach($scope.locations.districts,function(value,key){if($scope.locations.districts[key].id!=0&&$scope.user.provinceId!=$scope.locations.districts[key].provinceId)
$scope.locations.districts[key].hidden=true;else
$scope.locations.districts[key].hidden=false;});$scope.user.districtId=0;$scope.user.wardId=0;}}
$scope.changeProvince();$scope.changeDistrict=function(){if($scope.user.districtId!=0){angular.forEach($scope.locations.wards,function(value,key){if($scope.locations.wards[key].district_id!=0&&$scope.user.districtId!=$scope.locations.wards[key].district_id)
$scope.locations.wards[key].hidden=true;else
$scope.locations.wards[key].hidden=false;if($scope.locations.wards[key].id==0){$scope.locations.wards[key].hidden=false;}});$scope.user.wardId=0;}}
$scope.changeDistrict();$scope.ok=function(){loading.show();auth.password=$scope.user.password;$.ajax({url:baseUrl+'/auth/signup',data:utils.buildFormData('Customer',$scope.user),method:'POST',success:function(resp){if(resp.success){$scope.$apply(function(){auth.isLogin=resp.user;$rootScope.$emit("AuthcontrollerLoginAfterSignup",{});location.href='/';});}else{$scope.$apply(function(){$scope.errors=resp.data;});}
if(resp.message){modal.alert(resp.message);}
loading.hide();}});};});app.controller('signupModalV2',function($scope,$uibModal,$uibModalInstance,$rootScope,params,auth,modal){$scope.user={name:'',email:'',phone:'',step:1,otp:'',resendotp:0,otpToken:'',password:'',repassword:'',};$scope.otp_message='';$scope.message='';$scope.showBtnResendOtp=0;$scope.time=300;$scope.otpTime=function(timec,idhtml){$scope.time=300;var cdown=setInterval(function(){timec=timec-1;var minutes=Math.floor(timec/60);var seconds=timec%60;var text=minutes+"phút "+seconds+"giây ";$('#'+idhtml).html('('+text+')');if(timec<=0){$scope.$apply(function(){$scope.time=0;});clearInterval(cdown);}},1000);}
$scope.ok=function(){loading.show();$scope.errors=[];$.ajax({url:baseUrl+'/auth/signupv2',data:$scope.user,method:'POST',success:function(resp){$scope.user.resendotp=0;if(resp.success){$scope.$apply(function(){if(resp.otpToken){$scope.user.otpToken=resp.otpToken;}
if(resp.step){$scope.user.step=resp.step;if(resp.step==2){$scope.showBtnResendOtp++;$scope.otpTime(300,'countdownTimeOtpDesktop');}}
if(resp.otp_message){$scope.otp_message=resp.otp_message;}
if(resp.logined){location.reload();}});}else{$scope.$apply(function(){$scope.errors=resp.data;});}
if(resp.message){$scope.message=resp.message;}
loading.hide();}});};$scope.signin=function(){$uibModalInstance.dismiss('cancel');auth.signin();};$scope.cancel=function(){$uibModalInstance.dismiss('cancel');};});app.controller('signupV2mobile',function($scope,$rootScope,auth){$scope.user={name:'',email:'',phone:'',step:1,otp:'',resendotp:0,otpToken:'',password:'',repassword:'',};$scope.otp_message='';$scope.message='';$scope.showBtnResendOtp=0;$scope.time=300;$scope.otpTime=function(timec,idhtml){$scope.time=300;var cdown=setInterval(function(){timec=timec-1;var minutes=Math.floor(timec/60);var seconds=timec%60;var text=minutes+"phút "+seconds+"giây ";$('#'+idhtml).html('('+text+')');if(timec<=0){$scope.$apply(function(){$scope.time=0;});clearInterval(cdown);}},1000);}
$scope.ok=function(){loading.show();$scope.errors=[];$.ajax({url:baseUrl+'/auth/signupv2',data:$scope.user,method:'POST',success:function(resp){$scope.user.resendotp=0;if(resp.success){$scope.$apply(function(){if(resp.otpToken){$scope.user.otpToken=resp.otpToken;}
if(resp.step){$scope.user.step=resp.step;if(resp.step==2){$scope.showBtnResendOtp++;$scope.otpTime(300,'countdownTimeOtpDesktop');}}
if(resp.otp_message){$scope.otp_message=resp.otp_message;}
if(resp.logined){location.href='/';}});}else{$scope.$apply(function(){$scope.errors=resp.data;});}
if(resp.message){$scope.message=resp.message;}
loading.hide();}});};});