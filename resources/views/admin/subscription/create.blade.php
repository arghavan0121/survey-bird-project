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
                        <form method="POST"   action="{{ route('admin.subscriptions.store')}}" >
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

                                  <input data-jdp hidden  class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" name="starts_at" value="" onchange="console.log" id="starts_at">

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
                                        <input data-jdp placeholder="YYYY/mm/dd" class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" id="ends" value="{{ old('ends_at') }}" onchange="console.log">
                                        <input data-jdp hidden  class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" name="ends_at" value="" onchange="console.log" id="ends_at">
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



<script type="text/javascript">
    jalaliDatepicker.startWatch({
        separatorChar: "/",
        minDate: "attr",
        maxDate: "attr",
        changeMonthRotateYear: true,
        showTodayBtn: true,
        showEmptyBtn: true
    });
    document.getElementById("starts_at").addEventListener("jdp:change", function (e) { console.log(e) });
    document.getElementById("ends_at").addEventListener("jdp:change", function (e) { console.log(e) });



    $(document).ready(function(){
        var myButton = $("#submit");
        var start = $("#start");
        var end = $("#ends");
        myButton.click(function(){

            var inputStart = start.val();
            var inputDateStart = moment.from(inputStart, 'fa', 'YYYY/M/D ').format('YYYY/M/D');
            document.getElementById('starts_at').value = inputDateStart;

            var inputEnd = end.val();
            var inputDateEnd = moment.from(inputEnd, 'fa', 'YYYY/M/D ').format('YYYY/M/D');
            document.getElementById('ends_at').value = inputDateEnd;

        });
    });

</script>

@endsection
