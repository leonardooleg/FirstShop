@foreach ($categories as $category)

    @php
        if($category->cloth == 1) $category_cloth=$category->id;
        else $category_cloth=false;
    @endphp
@endforeach
<div class="input-group mb-3">

@foreach ($textiles as $textile)
        <div class="input-group-prepend">
            <span class="input-group-text">{{$textile->textiles_category}}</span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch{{$textile->id ?? ""}}" @if ($category_cloth>=1) checked @endif value="{{$textile->id ?? ""}}">
            <label class="custom-control-label" for="customSwitch{{$textile->id ?? ""}}">Toggle this switch element</label>
        </div>

@endforeach


</div>
