<div class="news-items">
	<a href="/{{$blog->url}}" title="{{$blog->title}}" class="clearfix evo-item-blogs">
		<div class="evo-article-image">
			
			<img src="{{asset('uploads/images/blogs/'.$blog->avata)}}" data-src="{{asset('uploads/images/blogs/'.$blog->avata)}}" alt="{{$blog->title}}" class="lazy img-responsive center-block" />
			
		</div>
		<h3 class="line-clamps">{{$blog->title}}</h3>
		<!-- <p> Trang điểm với các ngôi sao trong showbiz mà nói, là việc tối quan trọng. Vì bước này, sẽ giúp họ che hết ...</p> -->
	</a>
</div>