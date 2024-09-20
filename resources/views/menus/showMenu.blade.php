<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Menu Details') }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset($menu->menupicture) }}" alt="Menu Picture" style="width: 300px; padding: 10px;">
            </div>
            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Menu ID:</strong> {{ $menu->menuid }}</li>
                    <li class="list-group-item"><strong>Menu Name:</strong> {{ $menu->menuname }}</li>
                    <li class="list-group-item"><strong>Menu Price:</strong> {{ $menu->menuprice }}</li>
                    <li class="list-group-item"><strong>Menu Desc:</strong> {{ $menu->menudesc }}</li>
                    <li class="list-group-item"><strong>Category:</strong> {{ optional($menu->category)->catname }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="btn-row">
                <a href="{{ route('menus.edit', $menu->menuid) }}" role="button" class="btn btn-primary">Edit Menu</a>
                <a href="{{ route('menus.index') }}" role="button" class="btn btn-default">{{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
