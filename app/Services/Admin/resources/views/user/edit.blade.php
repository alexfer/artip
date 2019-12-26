@extends('admin::index')
@section('content')
<h1 class="h2">{{ $user['name'] }}</h1>
<div class="justify-content-between">
    @include('admin::user.form', ['route' => route('user.update', ['id' => $user['id']])])
</div>
@section('custom-scripts')
<script>
    $(function () {
        $('#password').on('click', function () {
            let self = $(this),
                    form = self.closest('form'),
                    url = form.attr('action'),
                    token = form.find('input[name="_token"]').val(),
                    password = new Array(8).join().replace(/(.|$)/g, function () {
                return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"]();
            });

            $.post(url + '/password', {
                password: password,
                _token: token,
                _method: 'PUT'
            }, function (response) {
                self.next('span').html(response.message + ': ' + password);
                self.remove();
            });
        });
    });
</script>
@append
@endsection
