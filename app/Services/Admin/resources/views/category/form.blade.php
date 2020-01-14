<form method="post" action="{{ $route }}">
    @csrf
    <div class="card mt-3 h-100">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-4" for="name">{{ _i('Name Category:') }}</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ _i('Name Category') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <hr>
                </div>
                <div class="col-sm-2 text-center">{{ _i('or') }}</div>
                <div class="col-sm-5">
                    <hr>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4" for="category">{{ _i('Category:') }}</label>
                <div class="col-sm-8">
                    <select class="form-control" id="category" name="category">
                        @foreach($categories as $key => $category)
                        <option value="{{ $category['id'] }}">{{ $category['name'] ?? '' }}</option>
                            @if(count($category['children']))
                            @foreach($category['children'] as $child)
                            <option value="{{ $child['id'] }}">- {{ $child['name'] }}</option>
                                @if(count($child['children']))
                                @foreach($child['children'] as $_child)
                                <option value="{{ $_child['id'] }}">-- {{ $_child['name'] }}</option>
                                @endforeach
                                @endif
                            @endforeach
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4" for="children">{{ _i('Name Subcategory:') }}</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="children" name="children" placeholder="{{ _i('Name Subcategory') }}">
                </div>
            </div>
        </div>
    </div>   
    <div class="row mt-4">
        <div class="col-12 text-right">            
            <button type="submit" class="btn btn-primary">{{ _i('Save') }}</button>            
        </div>
    </div>
</form>