@if (session('toast'))
    <script>
        M.toast({ html: '{{ session('toast') }}', classes: 'teal darken-4' })
    </script>  
@endif

@if (session('toast2'))
    <script>
        M.toast({ html: '{{ session('toast2') }}', classes: 'rounded red darken-4' })
    </script>  
@endif