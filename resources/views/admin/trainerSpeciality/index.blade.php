@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Trainers Speciality</strong> Dashboard</h1>
         <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{ route('trainer_speciality.create')}}" class="btn btn-success">Add New Trainers</a>
            </div>
         </div>

		<div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Trainers</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
                                <th>No</th>
								<th>Treainer Name</th>
                                <th>Speciality</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
        <div class="row mt-2">
            <div class="col-md-12">
                {{-- {{$trainers->links('pagination::bootstrap-4')}} --}}
            </div>
        </div>
	</div>
</main>

@endsection
