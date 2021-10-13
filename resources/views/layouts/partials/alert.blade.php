<script>
    @if (session('success'))
        $.notify({
            message: '{{ session('success') }}'
        },
        {
            type: 'success',
        });
    @endif
</script>
{{-- <div class="alert alert-success">{{ $session('success') }}</div> --}}
