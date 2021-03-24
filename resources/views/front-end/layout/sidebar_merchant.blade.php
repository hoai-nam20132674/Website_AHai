<div class="col-md-3 col-sm-12">
	<div class="l-sidebar is-normal">
		<div class="accordion-2 hidden-xs">
			<button id="gh" class="accordion"><img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://st2.depositphotos.com/5266903/8119/v/950/depositphotos_81198408-stock-illustration-store-flat-red-color-rounded.jpg" alt="">Gian hàng</button>
			<div class="panel">
				<ul>
					<li class="">
						<a id="gh" class="sidebar" href="{{URL::route('merchantIndex')}}">Danh sách sản phẩm</a>
					</li>
					
					<li class="">
						<a id="gh" class="sidebar" href="/danh-sach-don-hang-ban-hang-lien-ket.html">Đơn hàng đã bán</a>
					</li>
					
				</ul>
			</div>

			<button id="tk" class="accordion"><img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://images.assetsdelivery.com/compings_v2/koblizeek/koblizeek1901/koblizeek190100017.jpg" alt="">Tài khoản</button>
			<div class="panel">
				<ul>
					<li class="">
						<a id="tk" class="sidebar" href="{{URL::route('merchantInfo')}}">Thông tin cá nhân </a>
					</li>
					<li class="">
						<a id="tk" class="sidebar" href="{{URL::route('merchantEditPassword')}}">Thay đổi mật khẩu </a>
					</li>
					
				</ul>
			</div>
			
			
			<button class="accordion">
				<img style="width: 20px;border-radius: 50%;margin-right: 10px;" src="https://previews.123rf.com/images/asmati/asmati1610/asmati161000005/63402423-ringing-bell-icon-white-icon-on-red-circle-.jpg" alt="">Thông báo</button>
				<div class="panel">
					<ul>
						<li class="">
							<a href="/thong-bao-cap-nhat-don-hang.html">
								<span></span>Cập nhật đơn hàng
							</a>
						</li>
						
						<li class="">
							<a href="/thong-bao-khuyen-mai.html">
								<span></span>Khuyến mãi
							</a>
						</li>
						<li class="">
							<a href="/thong-bao-khac.html">
								<span></span>Thông báo khác
							</a>
						</li>
					</ul>
				</div>
			</div>
			<script data-cfasync="false" src="https://voso.vn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight) {
							panel.style.maxHeight = null;
						} else {
							panel.style.maxHeight = panel.scrollHeight + "px";
						}
					});
				}
			</script> </div>
		</div>