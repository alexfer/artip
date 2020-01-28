<footer class="footer mt-4">
    <div class="container py-3">
        <div class="row mb-3">
            <div class="col-3">
                @include('web::widgets.social', ['class' => 'social-footer'])
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <h5>{{ _i('Quick Links') }}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="text-muted">{{ _i('Documents') }}</a>
                    </li>
                    <li>
                        <a href="#" class="text-muted">{{ _i('Online') }}</a>
                    </li>
                    <li>
                        <a href="#" class="text-muted">{{ _i('Publications') }}</a>
                    </li>
                    <li>
                        <a href="#" class="text-muted">{{ _i('Gallery') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}" class="text-muted">{{ _i('Contacts') }}</a>
                    </li>
                    <li>
                        <a href="#" class="text-muted">{{ _i('International Students') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="text-center">© <a href="{{ route('index') }}">{{ parse_url(env('APP_URL'), PHP_URL_HOST) }}</a> — {{ _i('Education in Ukraine') }}. </p>
        <p class="text-right">
            <a href="#" id="toTop">Back to top</a>
        </p>
    </div>
</footer>
