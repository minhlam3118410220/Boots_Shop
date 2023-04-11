<form action="{{request()->segment(2) == 'product' ? 'shop' : ''}}">
    <div class="filter-widget">
        <div class="footer-widget">
            <h4 class="fw-title">Categories</h4>
        <ul class="filter-categories">
            
            @foreach ($categories as $category)
              <li><a href="shop/{{ $category->name}}">{{ $category->name}}</a></li>
            @endforeach
            
        </ul>
        </div>
    </div>
    {{-- <div class="filter-widget">
        <h4 class="fw-title">Brand</h4>
        <div class="fw-brand-check">
            
            @foreach ($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox" 
                                {{ (request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                                id="bc-{{$brand->id}}" 
                                name="brand[{{$brand->id}}]"
                                onchange="this.form.submit();" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach
            
            
        </div>
    </div> --}}
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                        data-min="10" data-max="999"
                        data-min-value="{{ str_replace('$','',request('price_min')) }}" 
                        data-max-value="{{ str_replace('$','',request('price_max')) }}" >
                <div class="price-range ui-slider ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        {{-- <a href="#" class="filter-btn">Filter</a> --}}
        <button type="submit" class="filter-btn">Filter</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Color</h4>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" id="cs-black" name="color" value="black" onchange="this.form.submit();"
                        {{ request('color') == 'black' ? 'checked' : '' }} >
                <label class="cs-black {{ request('color') == 'black' ? 'font-weight-bold' : '' }}" for="cs-black">Black</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-white" name="color" value="white" onchange="this.form.submit();"
                    {{ request('color') == 'white' ? 'checked' : '' }}>
                <label class="cs-white {{ request('color') == 'white' ? 'font-weight-bold' : '' }}" for="cs-white">White</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-tan" name="color" value="tan" onchange="this.form.submit();"
                    {{ request('color') == 'tan' ? 'checked' : '' }}>
                <label class="cs-tan {{ request('color') == 'tan' ? 'font-weight-bold' : '' }}" for="cs-tan">Tan</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-beige" name="color" value="beige" onchange="this.form.submit();"
                    {{ request('color') == 'beige' ? 'checked' : '' }}>
                <label class="cs-beige {{ request('color') == 'beige' ? 'font-weight-bold' : '' }}" for="cs-beige">Beige</label>
            </div>
        
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size" name="size" value="38" onchange="this.form.submit();"
                {{ request('size') == '38' ? 'checked' : '' }}>
                <label for="s-size" class="{{ request('size') == '39' ? 'active' : '' }}" >38</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size" name="size" value="39" onchange="this.form.submit();"
                {{ request('size') == '39' ? 'checked' : '' }}>
                <label for="m-size" class="{{ request('size') == '39' ? 'active' : '' }}">39</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size" name="size" value="40" onchange="this.form.submit();"
                {{ request('size') == '40' ? 'checked' : '' }}>
                <label for="l-size" class="{{ request('size') == '40' ? 'active' : '' }}">40</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xs-size" name="size" value="41" onchange="this.form.submit();"
                {{ request('size') == '41' ? 'checked' : '' }}>
                <label for="xs-size" class="{{ request('size') == '41' ? 'active' : '' }}">41</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Chelsea Boot</a>
            <a href="#">Combat Boot</a>
            <a href="#">Derby</a>
            <a href="#">Loafer</a>
           
        </div>
    </div>
</form>