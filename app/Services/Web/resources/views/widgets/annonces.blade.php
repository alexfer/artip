@foreach($annonces as $key => $annonce)
<div class="jumbotron p-1 rounded bg-light mb-2">
    <blockquote class="blockquote text-right pr-1">
        <p class="mb-0">{{ $annonce->long_title }}</p>
        <footer class="blockquote-footer">{{ $annonce->date }}<cite title="Source Title">{{ $annonce->short_title }}</cite></footer>
    </blockquote>
</div>
@if(!$key) @break @endif
@endforeach