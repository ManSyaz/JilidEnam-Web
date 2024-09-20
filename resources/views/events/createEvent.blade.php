<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Add New Event')}}</h3>
    </div>
    <div class="card-body">
        <form class="mx-auto col-8" action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="eventid">Event ID</label>
                <input id="eventid" type="text" class="form-control @error('eventid') is-invalid @enderror" name="eventid" value="{{ old('eventid') }}" required autocomplete="eventid" autofocus placeholder="{{ __('Event ID')}}">
                @error('eventid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="eventpicture">Event Picture</label>
                <input id="eventpicture" type="file" class="form-control @error('eventpicture') is-invalid @enderror" name="eventpicture">
                @error('eventpicture')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="eventname">Event Name</label>
                <input id="eventname" type="text" class="form-control @error('eventname') is-invalid @enderror" name="eventname" value="{{ old('eventname') }}" required autocomplete="eventname" placeholder="{{ __('Event Name')}}">
                @error('eventname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="eventplace">Event Place</label>
                <input id="eventplace" type="text" class="form-control @error('eventplace') is-invalid @enderror" name="eventplace" required autocomplete="eventplace" placeholder="{{ __('Event Place')}}">
                @error('eventplace')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="eventdate">Event Date</label>
                <input id="eventdate" type="date" class="form-control @error('eventdate') is-invalid @enderror" name="eventdate" required autocomplete="eventdate" placeholder="{{ __('Event Date')}}">
                @error('eventdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="eventtime">Event Time</label>
                <input id="eventtime" type="time" value="08:00" class="form-control @error('eventtime') is-invalid @enderror" name="eventtime" required autocomplete="eventtime" placeholder="{{ __('Event Time')}}">
                @error('eventtime')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            




            <div class="card-footer">
                <div class="row justify-content-end">
                    <div class="btn-row">
                        <button type="submit" class="btn btn-primary ">{{ __('Submit') }}</button>
                        <button type="reset" class="btn btn-info ">{{ __('Reset') }}</button>
                        <a href="{{ route('events.index') }}" role="button" class="btn btn-default">{{ __('Back')}}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
