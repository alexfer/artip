<div class="row h-100">
    <div class="col-6">
        <h4>{{ _i('Annonces') }}</h4>
        @include('web::widgets.annonces')
    </div>
    <div class="col-6">
        <h4>{{ _i('Quick Message') }}</h4>
        <div class="card box-shadow">
            <div class="card-body">                
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
                    <div class="alert alert-danger collapse"></div>
                    <div class="alert alert-success collapse"></div>
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