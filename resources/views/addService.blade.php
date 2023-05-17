@extends('layouts.app')
@section('content')
<div>
    <div class="container-fluid p-5">
        <div class="col-4 mx-auto p-4  border border-success border-2">
            <h4 class="text-uppercase text-center">Add Service</h4>
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="product_name">Service Name</label>
                            <input class="form-control @error('service_name') is-invalid @enderror" required id="service_name" name="service_name" type="text" placeholder="Enter service name" value="{{ old('service_name') }}">
                            @error('service_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="service_description">Service Description</label>
                            <input class="form-control @error('service_description') is-invalid @enderror" required id="service_description" name="service_description" type="text" placeholder="Enter service description" value="{{ old('description') }}">
                            @error('service_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.row-->
                <div class="form-group">
                    <label for="img">Upload Service Image</label>
                    <div class="row">




                        <div class="col-sm-6">
                            <img id="preview-image-before-upload" src="{{asset('/img/Upload Image.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('img') is-invalid @enderror " type="file" name="img" value="{{ old('img') }}" id="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn-dark-green ">Add Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });


    });
</script>
@endsection
