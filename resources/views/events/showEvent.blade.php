<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Event Details') }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <td><img src="{{ asset($event->eventpicture) }}" alt="Event Picture" style="width: 350px;"></td>
            </div>
            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Event ID:</strong> {{ $event->eventid }}</li>
                    <li class="list-group-item"><strong>Event Name:</strong> {{ $event->eventname }}</li>
                    <li class="list-group-item"><strong>Event Place:</strong> {{ $event->eventplace }}</li>
                    <li class="list-group-item"><strong>Event Date:</strong> {{ $event->eventdate }}</li>
                    <li class="list-group-item"><strong>Event Time:</strong> {{ $event->eventtime }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="btn-row">
                <a href="{{ route('events.edit', $event->eventid) }}" role="button" class="btn btn-primary">Edit Event</a>
                <a href="{{ route('events.index') }}" role="button" class="btn btn-default">{{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
