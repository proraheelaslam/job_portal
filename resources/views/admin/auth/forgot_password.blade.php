@extends('admin.auth.app')
   {{-- added a css --}}
@push('css')
    <style>
    </style>
@endpush

   {{-- added a content --}}
@section('content')
<form id="formForgetPassword" class="mb-6">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="text"
          class="form-control"
          id="email"
          name="email"
          placeholder="Enter your email"
          required />
      </div>
    
      <div class="mb-6">
        <button id="forgetPasswordButton" class="btn btn-primary d-grid w-100" type="submit">
          Reset Password
        </button>
      </div>
    </form>
    @endsection
    @push('script')
    <script>
    $(document).ready(function () {
        $("#formForgetPassword").on("submit", function (e) {
            e.preventDefault(); 
            let formData = $(this).serialize();
    
            $("#forgetPasswordButton").prop("disabled", true).text("Processing...");
    
            $.ajax({
                url: "{{ route('admin.forgetPassword.post') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function (response) {
                    toastr.success(response.message);
                    $("#forgetPasswordButton").prop("disabled", false).text("Reset Password");
                },
                error: function (xhr) {
                    let errorMessage = "Something went wrong!";
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors).join(" ");
                    }
                    toastr.error(errorMessage);
                    $("#forgetPasswordButton").prop("disabled", false).text("Reset Password");
                }
            });
        });
    });
    </script>
    @endpush
    