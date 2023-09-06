@extends('layouts.home')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Reservation</h6>
                <h1 class="mb-5">Hotel Booking</h1>
            </div>
            {{-- <div class="col-md-12">
                <div>
                    <form action="">
                        <div class="form-group">
                            <div class="">
                                <label for="name" class="form-label"><b>Name</b></label>
                            </div>
                            <div class="d-flex">
                                <input type="text" name="fname" id="fname" class="form-control me-3"
                                    placeholder="first name">
                                <input type="text" name="lname" id="lname" class="form-control"
                                    placeholder="last name">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-md-3">
                                <label for="email" class="form-label"><b>Email</b></label>
                            </div>
                            <div class="col-md-6 d-flex">
                                <input type="email" name="email" id="email" class="form-control me-3"
                                    placeholder="Please Type example@gmail.com">
                            </div>
                        </div>
                        <div class="form-group mt-3 d-flex">
                            <div class="row">
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
                                        <a class="btn px-2 me-2 addRoom" id=""><i
                                                class="fa-solid text-primary fa-plus"></i></a>
                                        <a class="btn deleteRoom px-0"><i class="fa-solid  text-danger fa-minus"
                                                id="0"></i></a>
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
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="form-group">
                        <div class="">
                            <label for="name" class="form-label"><b>Name</b></label>
                        </div>
                        <div class="d-flex">
                            <input type="text" name="fname" id="fname" class="form-control me-3"
                                placeholder="first name">
                            <input type="text" name="lname" id="lname" class="form-control"
                                placeholder="last name">
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" name="email" id="email" class="form-control me-3"
                            placeholder="Please Type example@gmail.com">
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="guests" class="form-label">No of Guests</label>
                        <input type="number" name="guests" id="guests" class="form-control">
                    </div>
                    <div class="row room_add " id="row0">
                        <div class="col-md-6 my-3">
                            <label for="room" class="form-label"><b>Room Type</b></label>
                            <select name="room" id="" class="form-select">
                                <option value="0" selected disabled>Please Select Room Type</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Luxury Room</option>
                                <option value="4">Family Room</option>
                            </select>
                        </div>
                        <div class="col-md-5 my-3">
                            <label for="room" class="form-label"><b>Room Number</b></label>
                            <select name="room" id="" class="form-select">
                                <option value="0" selected disabled>Please Select Room Type</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Luxury Room</option>
                                <option value="4">Family Room</option>
                            </select>
                        </div>
                        <div class="col-md-1 my-5">
                            <div class="d-flex">
                                <a class="btn px-2 me-2 addRoom" id=""><i
                                        class="fa-solid text-primary fa-plus"></i></a>
                                <a class="btn deleteRoom px-0 removeRoom"><i class="fa-solid  text-danger fa-minus"
                                        id="0"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="check_in" class="form-label">Check In Date && Time</label>
                        <input type="datetime-local" name="check_in" id="check_in" class="form-control">
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="check_out" class="form-label">Check Out Date && Time</label>
                        <input type="datetime-local" name="check_out" id="check_out" class="form-control">
                    </div>
                    <div class="col-md-12 my-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var btnCount = 0;

        //add another Site Area
        $(document).on('click', '.addRoom', function() {
            ++btnCount;
            var content = `
                    <div class="row room_add " id="row${btnCount}">
                        <div class="col-md-6 my-3">
                            <label for="room" class="form-label"><b>Room Type</b></label>
                            <select name="room" id="" class="form-select">
                                <option value="0" selected disabled>Please Select Room Type</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Luxury Room</option>
                                <option value="4">Family Room</option>
                            </select>
                        </div>
                        <div class="col-md-5 my-3">
                            <label for="room" class="form-label"><b>Room Number</b></label>
                            <select name="room" id="" class="form-select">
                                <option value="0" selected disabled>Please Select Room Type</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Luxury Room</option>
                                <option value="4">Family Room</option>
                            </select>
                        </div>
                        <div class="col-md-1 my-5">
                            <div class="d-flex">
                                <a class="btn px-2 me-2 addRoom" id=""><i
                                        class="fa-solid text-primary fa-plus"></i></a>
                                <a class="btn deleteRoom px-0 removeRoom"><i class="fa-solid  text-danger fa-minus"
                                    id="row${btnCount}"></i></a>
                            </div>
                        </div>
                    </div>  `;
            $('.room_add').append(content);
        });

        $(document).on('click', '.removeRoom', function() {
            if (btnCount != 0) {
                var row = $(this).attr('id');
                alert(row);
                $(row).remove();
                --btnCount;
            } else {
                alert("You can't delete Room Type!");
            }
        })
    </script>
@endsection
