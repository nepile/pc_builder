@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>{{ session('success') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span>{{ session('error') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif(session()->has('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <span>{{ session('info') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif(session()->has('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <span>{{ session('warning') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif