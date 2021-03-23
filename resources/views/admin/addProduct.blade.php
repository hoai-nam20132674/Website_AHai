@extends('admin.layout.default')
@section('css')
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/slug.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/seo-helper.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')
	<div class="page-content ">
	    <ol class="breadcrumb">

	        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
	        <li class="breadcrumb-item"><a href="{{URL::route('products')}}">sản phẩm</a></li>
	        <li class="breadcrumb-item active">Thêm sản phẩm mới</li>
	    </ol>
        <div class="clearfix"></div>
        <div id="main">
            <form method="POST" action="{{URL::route('postAddProduct')}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
    
                <div class="row">
                    <div class="col-md-9">
                            <div class="main-form">
                                <div class="form-body">
                                    <div class="form-group"  >
                
                                        <label for="name" class="control-label required">T&ecirc;n</label>
                                        <input class="form-control" onchange="seo_preview()" placeholder="Nhập tên" data-counter="120" value="{{old('name')}}" name="name" type="text" required id="name">
                                    </div>
                
                                    
                                    <input type="hidden" name="model" value="">

                                    <div class="form-group"  >
                
                                        <label for="content" class="control-label">Mô tả ngắn</label>
                                        <textarea class="form-control" rows="4" placeholder="Nội dung" data-counter="4000" name="short_description" cols="50" id="short_description">{{old('short_description')}}</textarea>
                                        <script type="text/javascript">
                                          var editor = CKEDITOR.replace('short_description',{
                                           language:'vi',
                                           filebrowserImageBrowseUrl : '/auth/ckfinder/ckfinder.html?type=Images',
                                           filebrowserFlashBrowseUrl : '/auth/ckfinder/ckfinder.html?type=Flash',
                                           filebrowserImageUploadUrl : '/auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                           filebrowserFlashUploadUrl : '/auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                           });
                                         </script>﻿
                                    </div>
                
                                    <div class="form-group"  >
                
                                        <label for="content" class="control-label">Giới thiệu</label>
                                        <textarea class="form-control" rows="4" placeholder="Nội dung" data-counter="4000" name="content" cols="50" id="content">{{old('content')}}</textarea>
                                        <script type="text/javascript">
                                          var editor = CKEDITOR.replace('content',{
                                           language:'vi',
                                           filebrowserImageBrowseUrl : '/auth/ckfinder/ckfinder.html?type=Images',
                                           filebrowserFlashBrowseUrl : '/auth/ckfinder/ckfinder.html?type=Flash',
                                           filebrowserImageUploadUrl : '/auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                           filebrowserFlashUploadUrl : '/auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                           });
                                         </script>﻿
                                    </div>
                
                                    
                
                                    
                
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="widget meta-boxes">
            			        <div class="widget-title">
            			            <h4>
            			                <span>Ảnh chi tiết</span>
            			            </h4>
            			            <button style="float: right;" type="button" onclick="more_image()" value="plus" class="btn btn-info">
            			                <i class="fa fa-plus"></i> Thêm ảnh
            			            </button>
            			        </div>
            			        <div class="widget-body">
            			            <div class="product-images-wrapper">
            			    
            			        		<div class="images-wrapper">
            			        			<div class="row" id="more_image">
            			        				
            			        				<div class="col-md-2">
                                                    <div class="file-upload">   
                                                        <div class="file-upload-content file-upload-content1" style="position: relative;">
                                                            <img width="100%" class="file-upload-image file-upload-image1" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                                            <div class="image-title-wrap image-title-wrap1" style="position: absolute;top: 0px; right: 0px;">
                                                                <button type="button" onclick="removeUploadTest(1)" class="remove-image">Ảnh chi tiết</button>
                                                            </div>
                                                            <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input1" type='file' name="images[]" onchange="readURLTest(this,1);" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
            			        				
            			        			</div>

            			        
            			        
            			    			</div>
            						</div>

            			        </div>
            			    </div>
                        
                        
                        <div id="advanced-sortables" class="meta-box-sortables">
                            <div id="seo_wrap" class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><span>Tối ưu hoá bộ máy tìm kiếm (SEO)</span></h4>
                                </div>
                                @include('admin.layout.seo-preview')
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 right-sidebar">
                        <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                            <div class="widget-title">
                                <h4>
                                    <span>Xuất bản</span>
                                </h4>
                            </div>
                            <div class="widget-body">
                                <div class="btn-set">
                                    <button type="submit" name="submit" value="save" class="btn btn-info">
                                        <i class="fa fa-save"></i> Lưu
                                    </button>
                                    &nbsp;
                                    <button type="submit" name="submit" value="apply" class="btn btn-success">
                                        <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="waypoint"></div>
                        <div class="form-actions form-actions-fixed-top hidden">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
                                <li class="breadcrumb-item"><a href="{{URL::route('products')}}">sản phẩm</a></li>
                                <li class="breadcrumb-item active">Thêm sản phẩm mới</li>
                            </ol>


                            <div class="btn-set">
                                <button type="submit" name="submit" value="save" class="btn btn-info">
                                    <i class="fa fa-save"></i> Lưu
                                </button>
                                &nbsp;
                                <button type="submit" name="submit" value="apply" class="btn btn-success">
                                    <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
                                </button>
                            </div>
                        </div>

                
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="ui-select-wrapper">
                                    <select class="form-control ui-select ui-select" id="display" name="display">
                                        <option value="1">Xuất bản</option>
                                        <option value="0">Bản nháp</option>
                                    </select>
                                    <svg class="svg-next-icon svg-next-icon-size-16">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="hot" class="control-label"> Sản phẩm nổi bật</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="form-group" >

                                    <label for="hot" class="control-label">Nổi bật?</label>

                                    <div class="onoffswitch">
                                        <input type="hidden" name="hot" value="0">
                                        <input type="checkbox" name="hot" class="onoffswitch-checkbox" id="hot" value="1"   class="form-control">
                                        <label class="onoffswitch-label" for="hot">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="best-sale" class="control-label">Best sale</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="form-group" >

                                    <label for="best-sale" class="control-label">Best sale?</label>

                                    <div class="onoffswitch">
                                        <input type="hidden" name="best_sale" value="0">
                                        <input type="checkbox" name="best_sale" class="onoffswitch-checkbox" id="best-sale" value="1"   class="form-control">
                                        <label class="onoffswitch-label" for="best-sale">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="price" class="control-label required" aria-required="true">Giá bán</label></h4>
                                    </div>
                                    
                                        <div class="main-form" style="margin-bottom: 0px">
                                            <div class="form-body">
                                                <div class="form-group" style="margin-bottom: 0px" >
                                                    <input class="form-control" required placeholder="Giá bán" value="{{old('price')}}" name="price" type="number" id="price">
                                                </div>


                                                <input type="hidden" name="model" value="">



                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="sale" class="control-label" aria-required="fale">Giá giảm</label></h4>
                                    </div>
                                    
                                        <div class="main-form" style="margin-bottom: 0px">
                                            <div class="form-body">
                                                <div class="form-group" style="margin-bottom: 0px" >
                                                    <input class="form-control" placeholder="Giá giảm" value="{{old('sale')}}" name="sale" type="number" id="sale">
                                                </div>


                                                <input type="hidden" name="model" value="">



                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="categories[]" class="control-label required" aria-required="true">Danh mục</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="form-group form-group-no-margin ">
                                	<div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible; padding: 0px;">
                                		<div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" tabindex="0" style="max-height: 320px;">
                                			<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 343.5px;" dir="ltr">
    						                    <ul>
    						                    	@foreach($categories as $cate)
    							                        <li value="{{$cate->id}}">
    									                    <label>
    													        <input type="checkbox" value="{{$cate->id}}" name="categories[]">
    													        {{$cate->name}}
    													    </label>

    							                        </li>
    						                        @endforeach
    						                       
    						                    </ul>
    						                </div>
    						            </div>
    						            <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
    						            	<div class="mCSB_draggerContainer">
    						            		<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;" oncontextmenu="return false;">
    						            			<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
    						            			<div class="mCSB_draggerRail"></div>
    						            		</div>
    						            		<div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;">
    						            			<div class="mCSB_draggerContainer">
    						            				<div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; width: 0px; left: 0px;" oncontextmenu="return false;">
    						            					<div class="mCSB_dragger_bar"></div>
    						            					<div class="mCSB_draggerRail"></div>
    						            				</div>
    						            			</div>
    						            		</div>
    						            	</div>
    						            </div>
    						        </div>
    						    </div>

                            </div>
                        </div>
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="" class="control-label" aria-required="true">Gian hàng đăng sản phẩm</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="main-form" style="margin-bottom: 0px">
                                    <div class="form-body">
                                        <div class="form-group" style="margin-bottom: 0px" >
                                            
                                            <input list="user_id" required class="form-control" value="" placeholder="Nhập tên gian hàng" onchange="importDataValue();" value="" name="user_id" type="text" id="href">
                                            <datalist id="user_id">
                                                @foreach($users as $user)
                                                    <option data-value="{{$user->phone}}" value="{{$user->name}}">SĐT: {{$user->phone}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>


                                        <input type="hidden" name="model" value="">



                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="image" class="control-label">Ảnh đại diện</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="image-box" style="border: 1px solid #e2e2e2;">
                                    <div class="file-upload">   
                                        <div class="file-upload-content file-upload-content100" style="position: relative;">
                                            <img width="100%" class="file-upload-image file-upload-image100" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                            <div class="image-title-wrap image-title-wrap100" style="position: absolute;top: 0px; right: 0px;">
                                                <button type="button" onclick="removeUploadTest(100)" class="remove-image">Ảnh đại diện</button>
                                            </div>
                                            <input required style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input100" type='file' required name="avata" onchange="readURLTest(this,100);" accept="image/*" />
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@endsection
@section('js')
	<script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/js-validation.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/slug.js')}}"></script>
    <script src="{{asset('js/admin/seo-helper.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
    <script type="text/javascript">
			
		function more_image(){
			var i = parseInt($("input[type=file]").length);
			i=i+1;
			var more_image = $("#more_image");
			more_image.append('<div class="col-md-2"><div class="file-upload"><div class="file-upload-content file-upload-content'+i+'" style="position: relative;"><img width="100%" class="file-upload-image file-upload-image'+i+'" src="{{asset("uploads/images/icon-image.gif")}}" alt="your image" /><div class="image-title-wrap image-title-wrap'+i+'" style="position: absolute;top: 0px; right: 0px;"><button type="button" onclick="removeUploadTest('+i+')" class="remove-image">Ảnh chi tiết</button></div><input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input'+i+'" type="file" name="images[]" onchange="readURLTest(this,'+i+');" accept="image/*" /></div></div></div>');
			i++;
		};
        function importDataValue(){
            // var value = $("#user_id option[value=" + $('#input[name="user_id"]').val() + "]").attr('data-value');
            var input_value = $('input[name="user_id"]').val();
            var e = $('#user_id').children('option[value="'+input_value+'"]').attr('data-value');
            e = input_value+'-'+e;
            if(e=='-undefined'){
                $('input[name="user_id"]').val('');
            }
            else{
                $('input[name="user_id"]').val(e);
            }
            console.log(e.length);
        }
		
	</script>
@endsection