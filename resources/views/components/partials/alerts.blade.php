<script>
    @if($errors->any())
    @foreach ($errors->all() as $key => $message)
    toastr.error('{{ $message }}');
    @endforeach
    @endif
    @if(Session::has('message'))
    const type = '{{ Session::get('alert-type', 'info') }}';
    const message = '{{ Session::get('message') }}';

    if (toastr[type]) {
        toastr[type](message);
    }
    @endif
</script>
