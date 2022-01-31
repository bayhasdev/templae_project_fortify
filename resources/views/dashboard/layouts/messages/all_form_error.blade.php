@if (count($errors))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)

            <span class="input-error">{{ $error }}</span>
        @endforeach
    </div>

@endif
