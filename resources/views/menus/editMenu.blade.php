<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Menu')}}</h3>
    </div>
    <div class="card-body">
      <form class="mx-auto col-8" action="{{ route('menus.update', $menu->menuid) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="menuid">Menu ID</label>
          <input id="menuid" type="text" class="form-control @error('menuid') is-invalid @enderror" name="menuid" value="{{ $menu->menuid }}" required autocomplete="menuid" autofocus placeholder="{{ __('Menu ID')}}">
          @error('menuid')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="menupicture">Menu Picture</label>
          <input id="menupicture" type="file" class="form-control @error('menupicture') is-invalid @enderror" name="menupicture" value="{{ old('menupicture') }}" required autocomplete="menupicture" placeholder="{{ __('Menu Picture')}}">

          <img src="{{ asset($menu->menupicture) }}" alt="Event Picture" style="width: 200px; padding: 10px;">

          @error('menupicture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="menuname">Menu Name</label>
          <input id="menuname" type="text" class="form-control @error('menuname') is-invalid @enderror" name="menuname" value="{{ $menu->menuname }}" required autocomplete="menuname" placeholder="{{ __('Menu Name')}}">
          @error('menuname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
            <label for="menudesc">Menu Description</label>
            <input id="menudesc" type="text" class="form-control @error('menudesc') is-invalid @enderror" name="menudesc" value="{{ $menu->menudesc }}" required autocomplete="menudesc" placeholder="{{ __('Menu Description') }}">
            @error('menudesc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
          <label for="menuprice">Menu Price</label>
          <input id="menuprice" type="text" class="form-control @error('menuprice') is-invalid @enderror" name="menuprice" value="{{ $menu->menuprice }}" required autocomplete="menuprice" placeholder="{{ __('Menu Price')}}">
          @error('menuprice')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="catid">Category</label>
          <select name="catid" id="catid" class="form-control select2bs4">
            @foreach ($categories as $cat)
              <option value="{{ $cat->catid }}" {{ $menu->catid == $cat->catid ? 'selected' : '' }}>
                {{ $cat->catid }} - {{ $cat->catname }}
              </option>
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
                <button type="submit" class="btn btn-primary ">{{ __('Save Changes') }}</button>
                <button type="reset" class="btn btn-info ">{{ __('Reset') }}</button>
                <a href="{{ route('menus.index') }}" role="button" class="btn btn-default ">{{ __('Back')}}</a>
            </div>
        </div>
    </div>
    </form>
    <!-- /.form-box -->
</div>
