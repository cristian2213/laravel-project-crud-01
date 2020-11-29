<div class="container">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <strong>Success,</strong>{{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
