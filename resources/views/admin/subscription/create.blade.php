@extends('layouts.admin', ['title' => 'Create Subscription'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('افزودن اشتراک') }}</h3>
                        </div>
                        <form method="POST"  action="{{ route('admin.subscriptions.store')}}" >
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="plan_id"
                                        class="col-sm-3 col-form-label "> {{__('طرح')}}</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="plan_id">
                                            <option selected disabled>{{ __('انتخاب طرح') }}</option>
                                            @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">
                                                {{ $plan->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('plan_id')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="plan_id"
                                        class="col-sm-3 col-form-label "> {{__('کاربر')}}</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="user_id">
                                            <option selected disabled>{{ __('انتخاب کاربر') }}</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label ">{{ __('تاریخ شروع') }}</label>
                                    <div class="col-sm-4">
                                  <input data-jdp placeholder="YYYY/mm/dd"  class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" id="start" value="{{ old('starts_at') }}" onchange="console.log">

                                  <input data-jdp hidden  class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" name="starts_at" value="" onchange="console.log" id="countdown_end_date">


                                        {{--                                        <input--}}
{{--                                            id="countdown_end_date"--}}
{{--                                            type="text"--}}
{{--                                            class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}"--}}
{{--                                            value=""--}}
{{--                                            autocomplete="off"--}}
{{--                                        />--}}
{{--                                        <input--}}
{{--                                            id="countdown_end_date_send"--}}
{{--                                            type="text"--}}
{{--                                            class="form-control"--}}
{{--                                            name="starts_at"--}}
{{--                                            value=""--}}
{{--                                            autocomplete="off"--}}
{{--                                            hidden--}}
{{--                                        />--}}
                                         @if ($errors->has('starts_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('starts_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label ">{{ __('تاریخ پایان') }}</label>
                                    <div class="col-sm-4">
                                        <input data-jdp placeholder="YYYY/mm/dd" class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" name="ends_at"  value="{{ old('ends_at') }}">
                                        @if ($errors->has('ends_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('ends_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label "></label>
                                    <div class="col-sm-6">
                                        <button type="submit" id="submit" class="btn btn-primary">{{ __('ارسال') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<script>
    jalaliDatepicker.startWatch({
        separatorChar: "/",
        minDate: "attr",
        maxDate: "attr",
        changeMonthRotateYear: true,
        showTodayBtn: true,
        showEmptyBtn: true
    });

    document.getElementById("countdown_end_date").addEventListener("jdp:change", function (e) { console.log(e) });



    $(document).ready(function(){
        var myButton = $("#submit");
        var myInput = $("#start");
        myButton.click(function(){
            var inputValue = myInput.val();
            // var mm = moment(inputValue).locale('en').format('YYYY/MM/DD');
            // alert(mm);


            document.getElementById('countdown_end_date').value = inputValue;

        });
    });

</script>



{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        const max_data = new Date();--}}
{{--        max_data.setDate(max_data.getDate() + 30);--}}

{{--        var persian_data = new persianDate();--}}
{{--        document.getElementById("countdown_end_date").innerHTML =--}}
{{--            persian_data.format("YYYY/MM/DD");--}}

{{--        $("#countdown_end_date").pDatepicker({--}}
{{--            responsive: true,--}}
{{--            altField: "#countdown_end_date_send",--}}
{{--            altFieldFormatter: function (unixDate) {--}}
{{--                var persian_data = new persianDate(unixDate)--}}
{{--                    .toLocale("en")--}}
{{--                    .toCalendar("gregorian")--}}
{{--                    .format("YYYY/MM/DD H:mm:ss");--}}
{{--                return persian_data;--}}
{{--            },--}}
{{--            minDate: new Date(),--}}
{{--            autoClose: false,--}}
{{--            timePicker: {--}}
{{--                enabled: true,--}}
{{--                meridiem: {--}}
{{--                    enabled: true,--}}
{{--                },--}}
{{--            },--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
@endsection
