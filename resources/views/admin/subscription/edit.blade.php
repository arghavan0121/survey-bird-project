@extends('layouts.admin', ['title' => 'Subscriptions'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('ویرایش اشتراک') }}</h3>
                        </div>
                        <form role="form" method="POST" action="{{ route('admin.subscriptions.update', $subscription) }}">
                            {{csrf_field()}}
                            @method('put')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="plan_id"
                                        class="col-sm-3 col-form-label "> {{__('طرح')}}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="plan_id">
                                            @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}"
                                                {{ ($plan->id == $subscription->plan_id) ? 'selected' : '' }}>
                                                {{ $plan->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label ">{{ __('زمان شروع') }}</label>
                                    <div class="col-sm-4">
                                        <input data-jdp placeholder="YYYY/mm/dd" class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" id="start"  value="{{ old('starts_at', $subscription->starts_at?$subscription->starts_at->format('Y-m-d'):'') }}" onchange="console.log">
                                        <input data-jdp hidden class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" name="starts_at" id="starts_at" value="" onchange="console.log">
                                        @if ($errors->has('starts_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('starts_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label ">{{ __('زمان پایان') }}</label>
                                    <div class="col-sm-4">
                                        <input data-jdp placeholder="YYYY/mm/dd" class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" id="ends"   value="{{ old('ends_at', $subscription->ends_at?$subscription->ends_at->format('Y-m-d'):'') }}" onchange="console.log">
                                        <input data-jdp hidden class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" name="ends_at"   id="ends_at"  value="" onchange="console.log">
                                    @if ($errors->has('ends_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('ends_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-right"></label>
                                    <div class="col-sm-6">
                                        <button type="submit"
                                            class="btn btn-primary" id="submit">{{ __('ارسال')}}</button>
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
