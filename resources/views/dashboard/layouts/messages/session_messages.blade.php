<div>

    @if ($alertFm = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $alertFm }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($alertFm = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $alertFm }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

</div>
