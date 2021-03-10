<div id="menu-overlay" class=""></div>
	<div class="wrapmenu_right d-lg">
		<div class="wrapmenu">
			<div class="wrapmenu_full menumain_full">
				<div class="containers">
					<div class="menu_mobile clearfix">
						<ul class="ul_collections">
							
							@php
		                        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
		                    @endphp
							@foreach($menus as $menu)
								@php
		                            $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
		                        @endphp
		                        @if(count($menu2s) == 0)
							
									<li class="level0 level-top parent">
										<a href="/{{$menu->url}}#content">{{$menu->title}}</a>
										
									</li>
								@else
									<li class="level0 level-top parent">
										<a href="/{{$menu->url}}#content">{{$menu->title}}</a>
										
										<i class="fa fa-chevron-down"></i>
										<ul class="level0" style="display:none;">
											@foreach($menu2s as $menu2)
											<li class="level1 "> 
												<a href="/{{$menu2->url}}#content"> <span>{{$menu2->title}}</span> </a>
												
											</li>
											@endforeach
										</ul>
									</li>
								@endif
							@endforeach
						</ul>

							
							
					</div>
					<div class=" a-left margin-top-30 padding-left-15">
						<div class="phonebar">
							<a class="fone" href="tel:{{$system->phone}}" title="Liên hệ tư vấn">Liên hệ tư vấn</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>