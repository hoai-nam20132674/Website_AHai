<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12">
	<div class="clearfix wapsider">
		<aside class="sidebar-blog-category margin-bottom-20 clearfix">
				<h2 class="title-head margin-top-0 cate clearfix"><span>Danh mục</span></h2>
			<div class="aside-content clearfix ">
				<ul class="nav navbar-pills clearfix nav-category">
					
					@php
                        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
                    @endphp
					@foreach($menus as $menu)
						@php
                            $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
                        @endphp
                        @if(count($menu2s) == 0)
							<li class="nav-item">
								<a class="nav-link" href="/{{$menu->url}}#content">{{$menu->title}}</a>

							</li>
						@else
							<li class="nav-item">
								<a href="/{{$menu->url}}#content" class="nav-link">{{$menu->title}}

								</a>
								<i class="fa fa-plus"></i>

								<ul class="dropdown-menu">
									@foreach($menu2s as $menu2)
										<li class="nav-item">
											<a class="nav-link" href="/{{$menu->url}}#content">{{$menu2->title}}

											</a>
										</li>
									@endforeach
								</ul>
							</li>
						@endif
					@endforeach

				</ul>
			</div>
		</aside>
		<div class="blogbar sidebarblog section clearfix">
			<h2 class="title-head clearfix">
				<a href="tin-tuc" title="Tin nổi bật">Tin mới</a>
			</h2>
			<div class="section clearfix">
				
				
				
				<!-- <div class="blogitem clearfix">
					<a class="imgmd" href="/3-li-do-chinh-ma-ban-nen-chon-va-lam-nha-huong-nam" title="3 lí do chính mà bạn nên chọn và làm nhà hướng Nam">
						
						<img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/medium/100/393/384/articles/blog-14.jpg?v=1592559945307" title="3 lí do chính mà bạn nên chọn và làm nhà hướng Nam" alt="3 lí do chính mà bạn nên chọn và làm nhà hướng Nam">
						
					</a>
					<h3>
						<a href="/3-li-do-chinh-ma-ban-nen-chon-va-lam-nha-huong-nam" title="3 lí do chính mà bạn nên chọn và làm nhà hướng Nam">3 lí do chính mà bạn nên chọn và làm nhà hướng Nam</a>
					</h3>
				</div>
				
				<div class="blogitem clearfix">
					<a class="imgmd" href="/mua-chung-cu-mini-gia-re-bay-gio-khong-con-la-chuyen-xa-voi" title="Mua chung cư mini giá rẻ bây giờ không con là chuyện xa vời">
						
						<img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/medium/100/393/384/articles/blog-13.jpg?v=1592560005990" title="Mua chung cư mini giá rẻ bây giờ không con là chuyện xa vời" alt="Mua chung cư mini giá rẻ bây giờ không con là chuyện xa vời">
						
					</a>
					<h3>
						<a href="/mua-chung-cu-mini-gia-re-bay-gio-khong-con-la-chuyen-xa-voi" title="Mua chung cư mini giá rẻ bây giờ không con là chuyện xa vời">Mua chung cư mini giá rẻ bây giờ không con là chuyện xa vời</a>
					</h3>
				</div>
				
				<div class="blogitem clearfix">
					<a class="imgmd" href="/mua-biet-thu-thi-can-phai-luu-y-cac-van-de-phong-thuy-nao" title="Mua biệt thự thì cần phải lưu ý các vấn đề phong thủy nào?">
						
						<img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/medium/100/393/384/articles/blog-8.jpg?v=1592560264063" title="Mua biệt thự thì cần phải lưu ý các vấn đề phong thủy nào?" alt="Mua biệt thự thì cần phải lưu ý các vấn đề phong thủy nào?">
						
					</a>
					<h3>
						<a href="/mua-biet-thu-thi-can-phai-luu-y-cac-van-de-phong-thuy-nao" title="Mua biệt thự thì cần phải lưu ý các vấn đề phong thủy nào?">Mua biệt thự thì cần phải lưu ý các vấn đề phong thủy nào?</a>
					</h3>
				</div>
				
				<div class="blogitem clearfix">
					<a class="imgmd" href="/cach-xay-nha-tiet-kiem-chi-phi-nhat-5-kinh-nghiem-khong-phai-ai-cung-biet" title="Cách xây nhà tiết kiệm chi phí nhất: 5 kinh nghiệm không phải ai cũng biết">
						
						<img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/medium/100/393/384/articles/blog-7.jpg?v=1592560206030" title="Cách xây nhà tiết kiệm chi phí nhất: 5 kinh nghiệm không phải ai cũng biết" alt="Cách xây nhà tiết kiệm chi phí nhất: 5 kinh nghiệm không phải ai cũng biết">
						
					</a>
					<h3>
						<a href="/cach-xay-nha-tiet-kiem-chi-phi-nhat-5-kinh-nghiem-khong-phai-ai-cung-biet" title="Cách xây nhà tiết kiệm chi phí nhất: 5 kinh nghiệm không phải ai cũng biết">Cách xây nhà tiết kiệm chi phí nhất: 5 kinh nghiệm không phải ai cũng biết</a>
					</h3>
				</div> -->
				
				
			</div>
		</div>
	</div>
	<hr>
	<div class="Formdetails clearfix">
		<div class="clearfix formcontact">
			<div class="clearfix titlex">
				<p>
					Liên hệ ngay
				</p>
				<a class="fones lazyload" data-src="{{asset('uploads/images/systems/call.png')}}" style="background-repeat:no-repeat;background-color: transparent;background-position: left;" href="tel:{{$system->phone}}" title="Liên hệ tư vấn">{{$system->phone}}</a>
			</div>
			<h4>
				Hoặc điền thông tin vào form sau
			</h4>
			<form accept-charset="utf-8" action="{{URL::route('addContact')}}" id="contact" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token()}}">
				
				
				<div class="form-signup clearfix">
					<div class="row group_contact">
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<input placeholder="Họ và tên*" type="text" class="form-control  form-control-lg" required value="" name="name">
						</fieldset>
					
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<input placeholder="Số điện thoại*" type="text" class="form-control  form-control-lg"  pattern="\d+" required value="" name="phone">
						</fieldset>
						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<input placeholder="Email*" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email1" class="form-control form-control-lg" value="" name="email">
						</fieldset>

						<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<textarea placeholder="Nội dung*" name="message" id="comment" class="content-area form-control-lg" rows="5"></textarea>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-lienhe">Gửi thông tin</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>