@extends("admin.admin_layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">Medicines</h3>
    <a href="{{url('add-medicine')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Medicines</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Medicine</option>

					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				<div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
						<th>Sr #</th>
							<th>Name Medicine</th>
							<th>Quantity</th>
							<th>Expiry Date</th>
							<th>Note</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($adminviewMedicines))
						@foreach($adminviewMedicines as $medicine)
							<tr>
							<td>{{ $medicine->id }}</td>
								<td>{{ $medicine->medicine_name }}</td>
								<td>{{ $medicine->quantity }}</td>
								<td>{{ $medicine->expiry_date }}</td>
								<td>{{ $medicine->medicine_description }}</td>
                                @if($medicine->status == 0)
                                <td style="color: red">pending</td>
                                @endif
                                @if($medicine->status == 1)
                                <td style="color: green">Approved</td>
                                @endif
								<td>
									<a href="{{url('delete-medicine')}}/{{ $medicine->id }}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
								</td>
                                <td>
									<a href="{{url('approve-medicine')}}/{{ $medicine->id }}" class="btn btn-success"><i class="align-middle" data-feather="edit-2"></i> <span class="align-middle"></span></a>
								</td>
							
							</tr>
							@endforeach
							@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection