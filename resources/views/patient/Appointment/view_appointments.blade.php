@extends("patient.patient_layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">Appointments</h3>
	<a href="{{url('create-appointment')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Appointment</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Description</option>
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
							<th>Description</th>
							<th>Doctor</th>
							<th>Prescription</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($appointments))
						@foreach($appointments as $appointment)
							<tr>
								<td>{{ $appointment->id }}</td>
								<td>{{ $appointment->description }}</td>
								@if($appointment->status == 1)
								<td>{{ $appointment->Doctor->name }}</td>
								@endif
								@if($appointment->status == 0)
								<td style="color: red;">Doctor will show if you request approve</td>
								@endif
								<td>{{ $appointment->prescription }}</td>
								@if($appointment->status == 0)
								<td style="color:red;">Pending</td>
								@endif
								@if($appointment->status == 1)
								<td style="color:green;">Approved</td>
								@endif
								<td>
									<a href="{{url('delete_appointment')}}/{{ $appointment->id }}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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