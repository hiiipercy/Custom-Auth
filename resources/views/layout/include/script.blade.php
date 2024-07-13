<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>

{{-- Toastr --}}
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2@11') }}"></script>

@if (session('msg'))
@push('js')
    <script>
        Swal.fire({
            position: "top-end",
            icon: "{{ session('cls') }}",
            toast: true,
            title: "{{ session('msg') }}",
            showConfirmButton: false,
            timer: 5000
        });
    </script>
@endpush
@endif