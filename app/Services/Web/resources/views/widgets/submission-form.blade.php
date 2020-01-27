<div class="row mb-2">
    <div class="col-6">1</div>
    <div class="col-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>{{ _i('Quick Message') }}</h4>
                <form id="quick-message" action="{{ route('submission') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ _i('Your  Name') }}</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" placeholder="{{ _i('Your  Name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ _i('Your Email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" placeholder="{{ _i('Your Email') }}">
                    </div>
                    <div class="form-group">
                        <label for="message">{{ _i('Your  Message') }}</label>
                        <textarea name="message" id="message" rows="5" class="form-control" required="required" placeholder="{{ _i('Type text here ...') }}"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success">{{ _i('Send Message') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('common-js')
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
@append