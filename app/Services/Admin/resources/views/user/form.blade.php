@include('admin::flash-message')
<form method="post" action="{{ $route }}">
    @if(isset($user))
    @method('PUT')
    <input name="id" type="hidden" value="{{ $user['id'] }}">
    @endif    
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="card mt-3 h-100">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">{{ _i('Name') }}</label>
                        <input name="name" id="name" type="text" class="form-control" value="{{ isset($user) ? $user['name'] : old('name') }}" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ _i('E-Mail Address') }}</label>
                        <input name="email" id="email" type="email" class="form-control" value="{{ isset($user) ? $user['email'] : old('email') }}" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mt-3 h-100">
                <div class="card-body">
                    <div class="form-group">
                        <label for="locale">{{ _i('Locale') }}</label>
                        <select name="locale" id="locale" class="form-control">
                            @foreach($languages as $locale => $name)
                            <option value="{{ $locale }}" {{ $locale == (isset($user) ? $user['locale'] : old('locale')) ? "selected=selected" : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ _i('Password') }}</label><br>
                        @if(isset($user))
                        <button id="password" class="btn btn-danger" type="button">{{ _i('Reset') }}</button>
                        @else
                        <input type="password" name="password" id="password" class="form-control" required="required">
                        @endif
                    </div>
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
