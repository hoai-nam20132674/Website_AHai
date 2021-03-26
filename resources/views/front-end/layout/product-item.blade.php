<div class="f-product-item__thumb">
    <a href="/{{$item->url}}">
        <div class="f-product-item__thumb-img progressive replace" data-href="{{asset('uploads/images/products/avatars/'.$item->avata)}}">
            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
        </div>
        @if($item->sale != '' && $item->sale != $item->price)
            <div class='product-item-price product-item-price-mall'>
                @php
                    $percent = ($item->price-$item->sale)/$item->price;
                    $percent = floor($percent*100);
                @endphp
                <span class="product-price">-{{$percent}}%</span>
            </div>
        @else
        @endif
    </a>
</div>
<div class="f-items_description f-items_show-name">
    <div class="f-items_name">
        <div class="tag-mall">
            
        </div>
        <a href="/{{$item->url}}">{{$item->name}}</a>
    </div>
    <div class="f-items__ls main-rating b-sold-rating">
        <span class="jstars" data-value="4"></span>
        <label class="ml-auto">2118 đã bán</label>
    </div>
    <div class="b-price">
        @if($item->sale != '')
            <div class="b__price">
                <strong>{!!number_format($item->sale)!!}<sup>₫</sup></strong>
            </div>
            <div class="listed-price">{!!number_format($item->price)!!}<sup>₫</sup>
            </div>
        @else
            <div class="b__price">
                <strong>{!!number_format($item->price)!!}<sup>₫</sup></strong>
            </div>
        @endif
    </div>
</div>