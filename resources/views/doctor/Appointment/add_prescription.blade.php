@extends("doctor.doctor_layout")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add Prescription</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('save_prescription/'.$createPrescription->id)}}">
                                        @csrf

                                        <div>
                                            @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Prescription</label>
                                            <textarea id="prescription" class="form-control form-control-lg @error('prescription') is-invalid @enderror" value="{{ old('prescription') }}" type="text" name="prescription" placeholder="prescription" style="width:500px; height:200px" required  autocomplete="prescription" autofocus/></textarea>

                                            @error('prescription')
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