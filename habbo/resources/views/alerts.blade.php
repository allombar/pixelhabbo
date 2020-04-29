@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-succes-habbo">
        {{ session('success') }}
    </div>
@endif

@if(session('status'))
    <div class="alert alert-succes-habbo">
        {{ session('status') }}
    </div>
@endif