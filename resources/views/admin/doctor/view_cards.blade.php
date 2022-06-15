@extends("admin.admin_layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Cards</h3>
	<a href="{{url('add-card')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Card</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Card Name</option>
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
							<th>Card Name</th>
							<th>Card</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($cards))
						@foreach($cards as $card)
							<tr>
								<td>{{ $card->id }}</td>
								<td>{{ $card->name }}</td>
								<td>
									<img src="/img/cards/{{ $card->card }}" style="width:150px">
								</td>
								<td>
									<a href="{{url('edit-lecture')}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-card')}}/{{ $card->id }}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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