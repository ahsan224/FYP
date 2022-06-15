@extends('layouts.user_type.auth')

@section('content')

<div>
    
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{url('medicine_store')}}" method="POST" role="form text-left">

                
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Medicine Name</label>
                                <div class="">
                                    <input class="form-control" value="" type="text" placeholder="Medicine Name" id="user-name" name="medicine_name">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">Quantity</label>
                                <div class="">
                                    <input class="form-control" value="" type="text" placeholder="" id="user-email" name="quantity">
                                 
                                </div>
                            </div>
                        </div>
              
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Adress</label>
                                <div class="">
                                    <input class="form-control" value="" type="text" placeholder="adress" id="user-name" name="adress">
                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">Expiray Date</label>
                                <div class="">
                                    <input class="form-control" value="" type="textfadres" placeholder="" id="user-email" name="expiray_date">
                                      
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection