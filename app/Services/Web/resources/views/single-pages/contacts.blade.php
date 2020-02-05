@extends('web::index')
@section('title', _i('Contacts'))
@section('content')
<div class="row my-2">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h2 class="title">{{ _i('Our contacts:') }}</h2>
            </div>
            <div class="card-body">                
                <p>{{ _i('Main address:') }}</p>
                <p>{{ _i('Main phone number:') }}</p>
                <p>{{ _i('Cell phone number 1:') }}</p>
                <p>{{ _i('Cell phone number 2:') }}</p>
                <p>{{ _i('Main email addredd:') }}</p>
            </div>
        </div>    
    </div>
    <div class="col-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.9586560991306!2d25.373280415743256!3d50.77633997952175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472597337fb4b8e5%3A0x42ee2f3210b620e!2z0LLRg9C70LjRhtGPINCa0LDRgNCx0LjRiNC10LLQsCwgMiwg0JvRg9GG0YzQuiwg0JLQvtC70LjQvdGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0MzAwMA!5e0!3m2!1suk!2sua!4v1577273422779!5m2!1suk!2sua" width="727" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
@endsection