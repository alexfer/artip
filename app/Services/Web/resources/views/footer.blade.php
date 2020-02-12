<footer class="footer mt-4">
    <div class="container py-2">
        <div class="row mb-3">
            <div class="col-3">
                @include('web::widgets.social', ['class' => 'social-footer'])
                <p>{!! _i('Footer text') !!}</p>
            </div>
            <div class="col-3">
                <h5>{{ _i('Quick Links') }}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">{{ _i('Documents') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Online') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Publications') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Gallery') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('International Students') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('mon.gov.ua') }}" target="_blank">{{ _i('Ministry of Education and Science') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <h5>{{ _i('Quick Links') }}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">{{ _i('Documents') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Online') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Publications') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Gallery') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('International Students') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <h5>{{ _i('Quick Links') }}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">{{ _i('Documents') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Online') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Publications') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('Gallery') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ _i('International Students') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#" id="toTop">
            <i class="fa fa-4x fa-caret-square-o-up"></i>
        </a>
        <p class="text-center">© <a href="{{ route('index') }}">{{ parse_url(env('APP_URL'), PHP_URL_HOST) }}</a> — {{ _i('ARTIP Header') }} </p>
    </div>
</footer>
