@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="h2">{{ _i('Submission') }}</h1>
    </div>
</div>
@include('admin::flash-message')
<div class="justify-content-between">
    <form method="post" action="{{ route('submission.answer') }}">
        @csrf
        <input name="id" type="hidden" value="{{ $submission['id'] }}">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3 h-100">
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-2">{{ _i('Created') }}</dt>
                            <dd class="col-sm-10">
                                <code>{{ date('d M Y', strtotime($submission['created_at'])) }}</code>
                            </dd>
                            <dt class="col-sm-2">{{ _i('IP address') }}</dt>
                            <dd class="col-sm-10">
                                <code>{{ $submission['visitor'] }}</code>
                            </dd>
                            <dt class="col-sm-2">{{ _i('Name') }}</dt>
                            <dd class="col-sm-10">{{ $submission['name'] }}</dd>
                            <dt class="col-sm-2">{{ _i('Message') }}</dt>
                            <dd class="col-sm-10">{!! nl2br(e($submission['message'])) !!}</dd>
                        </dl>
                        @if(!isset($submission['answer']))
                        <div class="form-group">
                            <label for="answer">{{ _i('Answer') }}</label>
                            <textarea name="answer" id="answer" rows="5" class="form-control" required="required">{{ old('answer') }}</textarea>                            
                        </div>
                        @else
                            <hr>
                            <h5 class="text-center">{{ _i('Answer') }}</h5>                            
                            <dl class="row">
                                <dt class="col-sm-2">{{ _i('Created') }}</dt>
                                <dd class="col-sm-10">
                                    <code>{{ date('d M Y', strtotime($submission['answer']['created_at'])) }}</code>
                                </dd>
                                <dt class="col-sm-2">{{ _i('IP address') }}</dt>
                                <dd class="col-sm-10">
                                    <code>{{ $submission['answer']['visitor'] }}</code>
                                </dd>
                                <dt class="col-sm-2">{{ _i('Name') }}</dt>
                                <dd class="col-sm-10">{{ $submission['answer']['name'] }}</dd>
                                <dt class="col-sm-2">{{ _i('Message') }}</dt>
                                <dd class="col-sm-10">{!! nl2br(e($submission['answer']['message'])) !!}</dd>
                            </dl>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if(!isset($submission['answer']))
        <div class="row mt-4">
            <div class="col-12 text-right">
                <button type="submit" class="btn btn-primary">{{ _i('Send') }}</button>
            </div>
        </div> 
        @endif
    </form>
</div>
@endsection