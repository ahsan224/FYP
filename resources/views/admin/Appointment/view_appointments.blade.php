@extends("admin.admin_layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">Appointments</h3>
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
                            <th>Patient Name</th>
							<th>Description</th>
							<th>Doctor</th>
							<th>Prescription</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($patientAppointments))
						@foreach($patientAppointments as $appointment)
							<tr>
								<td>{{ $appointment->id }}</td>
								<td>{{ $appointment->Patient->name }}</td>
								<td>{{ $appointment->description }}</td>
								<td>{{ $appointment->Doctor->name }}</td>
								<td>{{ $appointment->prescription }}</td>
								@if($appointment->status == 0)
								<td style="color:red;">Pending</td>
								@endif
								@if($appointment->status == 1)
								<td style="color:green;">Approved</td>
								@endif
								<td>
									<a href="{{url('admindelete_appointment')}}/{{ $appointment->id }}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
								</td>
								<td>
									<a href="{{url('approve-appointment')}}/{{ $appointment->id }}" class="btn btn-success"><i class="align-middle" data-feather="edit-2"></i> <span class="align-middle"></span></a>
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