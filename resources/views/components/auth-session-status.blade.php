@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-primary']) }} role="alert">
        {{ $status }}
    </div>
@endif
