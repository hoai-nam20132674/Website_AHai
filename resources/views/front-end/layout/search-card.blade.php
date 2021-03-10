<section class="awe-section-1">	
	<section class="sectionslider clearfix">
		<div class="section home-slider">
					
			<div class="items">
				<p>
					TRA CỨU THÔNG TIN BẢO HÀNH
				</p>
				<a href="#">
					<picture>
						<source 
								media="(min-width: 1200px)"
								srcset="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/slider_1.jpg?1593488744761">
						<source 
								media="(min-width: 992px)"
								srcset="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/slider_1.jpg?1593488744761">
						<source 
								media="(min-width: 569px)"
								srcset="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/slider_1.jpg?1593488744761">
						<source 
								media="(min-width: 480px)"
								srcset="https://bizweb.dktcdn.net/thumb/large/100/393/384/themes/773119/assets/slider_1.jpg?1593488744761">
						<img class="lazyload" src="https://bizweb.dktcdn.net/thumb/large/100/393/384/themes/773119/assets/slider_1.jpg?1593488744761" alt="Cách tiếp cận bất động sản nhanh nhất"/>
					</picture>
				</a>
			</div>

		</div>

		<div class="module_search_pro">
			<div class="container">
				<div class="clearfix search_advan">
					<div class="option_top a-center clearfix">
						<span data-text="" class="active">KIỂM TRA THÔNG TIN BẢO HÀNH</span>
						
					</div>
					<div class="group_insearch clearfix">

						<div class="group_block group_2 advance_normal clearfix">
							<div class="group_block group_option group_1 advance_normal" style="display: none;">
								<select name="option1" id="option_1">
									<option>Loại nhà đất</option>
									
									
									<option data-link="Biệt thự" value="Biệt thự">Biệt thự</option>
									
									
									
									<option data-link="Căn hộ" value="Căn hộ">Căn hộ</option>
									
									
									
									<option data-link="Chung cư" value="Chung cư">Chung cư</option>
									
									
									
									<option data-link="Chung cư cao cấp" value="Chung cư cao cấp">Chung cư cao cấp</option>
									
									
								</select>
							</div>
							<div class="wrap_option_search" style="width: 100%" >
								<div class="input-group search_form">		
									<input type="text" name="query" value="" required placeholder="Nhập mã thẻ bảo hành" class="input-group-field st-default-search-input search-text tdq_input" autocomplete="off">
								</div>
								<div class="actionmobile">
									<div class="advance_option offFunction clearfix" style="display:none;">
									</div>
								</div>
								<div class="button_search_sm">
									<button class="bds_search"><i class="fa fa-search"></i>Tra cứu</button>
								</div>
							</div>
							<div class="action_pro" style="display: none;">
								Thêm <i class="fa fa-angle-down"></i>
							</div>
						</div>
						
					</div>
				</div>

				<script>
					var wDW = $(window).width();
					$('.option_top span').click(function(){
						$('.option_top span').removeClass('active');
						$(this).addClass('active');
					});
					var searchm = $('.advance_option.pc').html();
					localStorage.key = searchm;
					if (wDW <= 991) {
						$('.actionmobile .advance_option').html(localStorage.key);
						$('.advance_option.pc').remove();
						$('.action_pro').click(function(){
							$('.advance_option').toggleClass('runFunction offFunction').slideToggle();
							$(this).find('.fa').toggleClass('fa-angle-up fa-angle-down');
						});
					} else {
					$('.action_pro').click(function(){
						$('.advance_option.pc').toggleClass('runFunction offFunction').slideToggle();
						$(this).find('.fa').toggleClass('fa-angle-up fa-angle-down');
					});
					}
					$(function(){

						var $cat = $("#category1"),
							$subcat = $(".subcat");

						var optgroups = {};

						$subcat.each(function(i,v){
							var $e = $(v);
							var _id = $e.attr("id");
							optgroups[_id] = {};
							$e.find("optgroup").each(function(){
								var _r = $(this).data("rel");
								$(this).find("option").addClass("is-dyn");
								optgroups[_id][_r] = $(this).html();
							});
						});
						$subcat.find("optgroup").remove();

						var _lastRel;
						$cat.on("change",function(){
							var _rel = $(this).val();
							if(_lastRel === _rel) return true;
							_lastRel = _rel;
							$subcat.find("option").attr("style","");
							$subcat.val("");
							$subcat.find(".is-dyn").remove();
							if(!_rel) return $subcat.prop("disabled",true);
							$subcat.each(function(){
								var $el = $(this);
								var _id = $el.attr("id");
								$el.append(optgroups[_id][_rel]);
							});
							$subcat.prop("disabled",false);
						});

					});
					$('.bds_search').click(function(e){

						var Ptype = $('.advance_normal option:selected').attr('data-link'),
							Vsearch = $('.advance_normal .tdq_input').val(),
							Col = $('.advance_1 option:selected').attr('data-link'),
							Ven = $('.advance_2 option:selected').attr('data-childlink'),
							Dt = $('.advance_dientich option:selected').attr('data-link'),
							Price = $('.advance_price option:selected').attr('data-link'),
							and = '%20AND%20',
							or = '%20OR%20',
							cTab = $('.option_top span.active').attr('data-text'),
							onTab = ''+and+'tags:('+cTab+')';

						if ($('.advance_option').hasClass('runFunction')) {

							if(Vsearch != '') {
								var Vsearchs = Vsearch;
							}else {
								var Vsearchs = '';
							}
							if (typeof Ptype === 'undefined') {
								var Ptypes = null;
							}else {
								var Ptypes = ''+and+'product_type:('+Ptype+')';
							}
							if (typeof Col === 'undefined') {
								var Cols = ''; 
							}else {
								var Cols = ''+and+'collections:'+Col+''; 
							}
							if (typeof Ven === 'undefined') {
								var Vens = '';
							}else {
								var Vens = ''+and+'vendor:('+Ven+')';
							}
							if (typeof Dt === 'undefined') {
								var Dts = '';
							}else {
								var onTab = ''+and+'tags:(('+Dt+')'+and+'('+cTab+'))';
							}
							if (typeof Price === 'undefined') {
								var Prices = '';
							}else {
								var Prices = ''+and+'price_min:'+Price+'';
							}
							window.location.href ='/search?query='+Vsearchs+''+onTab+''+Ptypes+''+Cols+''+Vens+''+Prices+'';


						}else {
							if (Vsearch != '' && typeof Ptype === "undefined" ) {
								window.location.href ='/tra-cuu?card='+Vsearch;
							} else if (Vsearch != '' && typeof Ptype != "undefined") {
								window.location.href ='/tra-cuu?card='+Vsearch;
							} else if (Vsearch === '' && typeof Ptype === "undefined" ) {
								window.location.href ='/tra-cuu?card='+Vsearch;
							} else if(Vsearch === '' && typeof Ptype != "undefined") {
								window.location.href ='/search?query=tags:('+cTab+')'+and+'product_type:('+Ptype+')';
							} else {
								window.location.href ='/tra-cuu?card='+Vsearch;
							}

						}
					});
				</script>
				
			</div>
		</div>
	</section>
</section>