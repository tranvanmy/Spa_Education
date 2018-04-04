<div class="elh-event style-2">
    <div class="row">
        <div class="elh-event-date" style="background-image: url('{{ $event['image_url'] }}'); width: 40%; height: 300px;">
        </div>
        <div>
            <h4 class="elh-event-title"><a href="{{ route('user.event.detail', $event[fieldLanguage('slug')]) }}">{{ $event[fieldLanguage('title')] }}</a></h4>
            <div style="display: flex">
                <div>
                    <img class="img-circle" src="{{ $event->author->image_url }}" alt="{{ $event[fieldLanguage('title')] }}" style="width: 50px;height: 50px"/>
                </div>
                <div style="padding-left: 15px; line-height: 50px">
                    <span style="font-size: 1.5rem; color: #5E6A73">
                        {{ $event->author[fieldLanguage('name')] }}
                    </span><br/>
                </div>
            </div>
            <p class="elh-event-metas">
                <span><i class="fa fa-clock-o"></i>{{ timeEvent($event['start_at'], $event['end_at']) }}</span>
                <span><i class="fa fa-map-marker"></i>{{ $event[fieldLanguage('address')] }}</span>
            </p>
            <p class="elh-event-excerpt" style="margin-top: 20px; margin-right: 15px;">
                {{ $event[fieldLanguage('description')] }}
            </p>
        </div>
    </div>
</div>