<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Add New Menu')}}</h3>
    </div>
    <div class="card-body">
    <form class="mx-auto col-8" action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')
        <div class="form-group">
          <label for="menuid">Menu ID</label>
          <input id="menuid" type="text" class="form-control @error('menuid') is-invalid @enderror" name="menuid" value="{{ old('menuid') }}" required autocomplete="menuid" autofocus placeholder="{{ __('Menu ID')}}">
          @error('menuid')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="menupicture">Menu Picture</label>
          <input id="menupicture" type="file" class="form-control @error('menupicture') is-invalid @enderror" name="menupicture">
          @error('menupicture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="menuname">Menu Name</label>
          <input id="menuname" type="text" class="form-control @error('menuname') is-invalid @enderror" name="menuname" value="{{ old('menuname') }}" required autocomplete="menuname" placeholder="{{ __('Menu Name')}}">
          @error('menuname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
            <label for="menudesc">Menu Description</label>
            <input id="menudesc" type="text" class="form-control @error('menudesc') is-invalid @enderror" name="menudesc" value="{{ old('menudesc') }}" required autocomplete="menudesc" placeholder="{{ __('Menu Description')}}">
            @error('menudesc')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        <div class="form-group">
          <label for="menuprice">Menu Price</label>
          <input id="menuprice" type="text" class="form-control @error('menuprice') is-invalid @enderror" name="menuprice" required autocomplete="menuprice" placeholder="{{ __('Menu Price')}}">
          @error('menuprice')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="catid">Category</label>
          <select name="catid" id="catid" class="form-control select2bs4">
            <option value="" selected disabled>Choose a Category</option>
              @foreach ($categories as $cat)
                  <option value="{{ $cat->catid }}">{{ $cat->catid }} - {{ $cat->catname }}</option>
              @endforeach
          </select>
          @error('catid')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

    </div>
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="btn-row">
                <button type="submit" class="btn btn-primary ">{{ __('Submit') }}</button>
                <button type="reset" class="btn btn-info ">{{ __('Reset') }}</button>
                <a href="{{ route('menus.index') }}" role="button" class="btn btn-default">{{ __('Back')}}</a>
            </div>
        </div>
    </div>
    </form>
    <!-- /.form-box -->
</div>
