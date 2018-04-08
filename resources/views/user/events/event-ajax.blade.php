@foreach ($events as $event)
    @include('user.events.event-item')
@endforeach
<div class="col-xs-12">
    {{ $events->links('user.layouts.libraries.paginate') }}
</div>
