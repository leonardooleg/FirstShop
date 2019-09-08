<div class="card col-xl-3 col-lg-4 col-md-6 col-sm-12 card-product">
    <div class="card-product-block">
        <a href="{{route('product', $product->slug)}}">
            <div class="card-product-img">
                <img class="card-img-top" data-src="{{asset('/storage/'. $product->image) }}" alt="100%x180" src="{{asset('/storage/'. $product->image) }}" data-holder-rendered="true" style="">
                <div class="card-product-img-line">
                    <img class="hit" src="/icon/hit.png">
                    <img class="new" src="/icon/new.png">
                    <img class="percent" src="/icon/percent.png">
                </div>
                <img class="favorites" src="/icon/favorites.png">
            </div>
            <div class="card-body">
                <span class="card-type"> футболка</span>
                <span class="card-name"> {{$product->title}}</span>
                <span class="card-text">500 р.</span>
            </div>
        </a>
    </div>
</div>
