@extends('layouts.home')

@section('content')
        <div class="container-fluid mt-3">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Reservation</h6>
                <h1 class="mb-5">Hotel Booking</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="d-flex">
                        <div>
                            <form action="">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label"><b>Name</b></label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <input type="text" name="fname" id="fname" class="form-control me-3" placeholder="first name">
                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="last name">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="col-md-3">
                                            <label for="email" class="form-label"><b>Email</b></label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <input type="email" name="email" id="email" class="form-control me-3" placeholder="Please Type Email @gmail.com">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3 d-flex">
                                      <div class="row" >
                                        <div class="col-md-3">
                                            <label for="room" class="form-label"><b>Room Type</b></label>
                                            <select name="room" id="" class="form-select">
                                                <option value="0" selected disabled>Please Select Room Type</option>
                                                <option value="1">Single Room</option>
                                                <option value="2">Double Room</option>
                                                <option value="3">Luxury Room</option>
                                                <option value="4">Family Room</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 ms-2">
                                            <label for="room" class="form-label"><b>Room Number</b></label>
                                            <select name="room" id="" class="form-select">
                                                <option value="0" selected disabled>Please Select Room Type</option>
                                                <option value="1">Single Room</option>
                                                <option value="2">Double Room</option>
                                                <option value="3">Luxury Room</option>
                                                <option value="4">Family Room</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1 col-sm-2 col-2">
                                            <div class="d-flex mt-4 justify-content-end">
                                                <a class="btn px-2 me-2 addRoom" id=""><i class="fa-solid text-primary fa-plus"></i></a>
                                                <a class="btn deleteRoom px-0"><i class="fa-solid  text-danger fa-minus" id="0"></i></a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="col-md-3">
                                            <label for="guests" class="form-label">No of Guests</label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <input type="number" name="guests" id="guests" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="col-md-3">
                                            <label for="check_in" class="form-label">Check In Date && Time</label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <input type="datetime-local" name="check_in" id="check_in" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="col-md-3">
                                            <label for="check_out" class="form-label">Depature Date && Time</label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <input type="datetime-local" name="check_out" id="check_out" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="col-md-3">
                                            <label for="description" class="form-label">Special Request</label>
                                        </div>
                                        <div class="col-md-7 d-flex">
                                            <textarea name="description" id="description" cols="30" rows="1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>
                            <img src="img/background1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var btnCount = 0;

            //add another Site Area
            $(document).on('click', '.addRoom', function() {
                ++btnCount;
                var content = ` <div class="mb-3" id="row${btnCount}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=""
                                                for="area_site_lat">{{ trans('cruds.customer_location.fields.area_site_lat') }}</label>
                                            <input
                                                class="form-control {{ $errors->has('area_site_lat') ? 'is-invalid' : '' }}"
                                                type="text" name="area_site_lat[]" id="area_site_lat${btnCount}"
                                               >
                                            @if ($errors->has('area_site_lat'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('area_site_lat') }}
                                                </div>
                                            @endif
                                            <span
                                                class="help-block">{{ trans('cruds.customer_location.fields.area_site_lat_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class=""
                                                for="area_site_long">{{ trans('cruds.customer_location.fields.area_site_long') }}</label>
                                            <input
                                                class="form-control {{ $errors->has('area_site_long') ? 'is-invalid' : '' }}"
                                                type="text" name="area_site_long[]" id="area_site_long${btnCount}"
                                                >
                                            @if ($errors->has('area_site_long'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('area_site_long') }}
                                                </div>
                                            @endif
                                            <span
                                                class="help-block">{{ trans('cruds.customer_location.fields.area_site_long_helper') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="d-flex mt-4 justify-content-end">
                                            <a class="btn addSiteArea px-0 me-1" id=""><i
                                                    class='bx bx-plus text-primary fw-bold fs-4'></i></a>
                                            <a class="btn deleteSiteArea px-0" id="row${btnCount}" data-delete="1"><i
                                                    class='bx bx-minus text-danger fw-bold fs-4'
                                                    id="0"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                $('#container').append(content);
            });
        </script>
@endsection

