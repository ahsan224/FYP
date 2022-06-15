@extends("donor.donor_layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add Medicine</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save-medicine')}}">
                                        @csrf()

                                        <div>
                                            @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Medicine Name</label>
                                            <input type="text" id="medicine_name" class="form-control form-control-lg @error('medicine_name') is-invalid @enderror" value="{{ old('medicine_name') }}" type="text" name="medicine_name" placeholder="medicine_name"  required  autocomplete="medicine_name" autofocus/>

                                            @error('medicine_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Quantity</label>
                                            <input type="number" id="quantity" class="form-control form-control-lg @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}" type="text" name="quantity" placeholder="quantity"  required  autocomplete="quantity" autofocus/>

                                            @error('quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Expiry Date</label>
                                            <input type="date" id="expiry_date" class="form-control form-control-lg @error('expiry_date') is-invalid @enderror" value="{{ old('expiry_date') }}" type="text" name="expiry_date" placeholder="expiry_date"  required  autocomplete="expiry_date" autofocus/>

                                            @error('expiry_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Note</label>
                                            <textarea type="number" id="medicine_description" class="form-control form-control-lg @error('medicine_description') is-invalid @enderror" value="{{ old('medicine_description_') }}" type="text" name="medicine_description" placeholder="medicine_description" style="width:400px; height: 300px;"  required  autocomplete="medicine_description" autofocus/></textarea>

                                            @error('medicine_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        
                                        
                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->

                                            
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- card body  -->
                        </div><!-- card -->

                    </div> <!-- col md -->
                </div> <!-- col  -->
            </div>
        </div>
    </main>

@endsection