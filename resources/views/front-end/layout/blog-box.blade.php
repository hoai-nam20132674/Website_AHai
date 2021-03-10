<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 itembb">
	<div class="clearfix blog-bottom blog blogitemlarge">
		<a class="image-blog date clearfix" href="/{{$blog->url}}#content" title="{{$blog->title}}">
			
			<img class="lazyload" src="{{asset('uploads/images/blogs/'.$blog->avata)}}" data-src="{{asset('uploads/images/blogs/'.$blog->avata)}}"  alt="{{$blog->title}}">
			
			<span class="post-date"><i class="fa fa-clock"></i>{{$blog->created_at}}</span>
		</a>
		<div class="content_blog clearfix">
			<h3>
				<a href="/{{$blog->url}}#content" title="{{$blog->title}}">{{$blog->name}}</a>
			</h3>

			<p class="justify clearfix">{{$blog->seo_description}}</p>
		</div>
	</div>
</div>