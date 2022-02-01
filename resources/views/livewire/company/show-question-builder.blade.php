<div class="card-body pl-0 pr-0">
    <div>
        @if (session()->has('message'))
{{--            <div class="alert alert-success">--}}
{{--                {{ session('message') }}--}}
{{--            </div>--}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    @section('buttonCustom')
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">افزودن سوال
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($questionTypes as $type => $label)
                    <a class="dropdown-item si-quadron" href="javascript:void(0);"
                       wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')">{{ $label }}</a>
                @endforeach
            </div>
        </div>
    @endsection

    @includeWhen($questions->isEmpty(), 'company.shared.empty', [
        'heading' => __('اولین سوال خود را اضافه کنید'),
        'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
از صنعت چاپ و با استفاده از طراحان گرافیک است.',
    ])

    @if(!$questions->isEmpty())
        <div class="row">
            <div class="col-lg-3">
                <div class="mt-3">
                    @yield('buttonCustom')
                </div>
                <div class="question-tab question-left">
                    <ul id="myTab" role="tablist">
                        @foreach($questions as $question)
                            <li wire:click="showQuestion('{{ $question->id }}')"
                                class="@if($activeQuestion && $question->id == $activeQuestion->id) active @endif si-quadron">{{ $question->text }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <form wire:submit.prevent="submit">
                    <div class="row">
                        @if($activeQuestion)
                            <div class="col-lg-8">
                                <div class="question-tab">
                                    <div class="question-title">
                                        <div class="col-md-3 col-5 px-0">
                                            <strong>{{ ucwords(implode(' ', explode('-', $activeQuestion->type))) }}</strong>
                                        </div>
                                        <div class="col-lg-9 col-md-7 col-7 px-0 pt-2">
                                            <div class="title-2">
                                                <a href="javascript:void(0);" class="border-0 bg-transparent"
                                                   wire:click="deleteQuestion('{{ $activeQuestion->id }}')">
                                                    <i class="fas fa-trash-alt text-danger btn-sm"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 px-0 mb-3 mt-1">
                                        <textarea class="form-control col-md-12 mx-auto" rows="2"
                                                  wire:model.defer="activeQuestion.text" required="required"></textarea>
                                    </div>
                                    <div class="col-md-12 px-0 mb-3 mt-1">
                                        <label for="visibility">{{ __('آپلود تصویر برای سوال شما (اختیاری)') }}</label>
                                        <input type="file" class="form-control mb-3 ims" wire:model="image">
                                        @error('image')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                        @if ($activeQuestion->image)
                                            <i>تصویر آپلود شده:</i>
                                            <div class="list-card-image"><img class="item-img-question mb-3"
                                                                              src="{{url('/storage/'.$activeQuestion->image) }}">
                                            </div>
                                        @endif
                                    </div>

                                    @if(in_array($activeQuestion->type, ['multiple-choices', 'dropdown', 'yes-no']))
                                        @foreach($choices as $key => $choice)
                                            <div class="next-choice">
                                                <div class="col-md-12 col-12 px-0 d-flex">
                                                    <div class="col-md-10 px-0">
                                                        <input type="text" class="form-control"
                                                               wire:model.debounce.500ms="choices.{{ $key }}">
                                                    </div>

                                                    @if($activeQuestion->type != 'yes-no')
                                                        <div class="col-md-2 col-2">
                                                            <a href="javascript:void(0);" wire:key="{{ $key }}"
                                                               class="border-0 bg-transparent float-left"
                                                               wire:click="deleteChoice('{{ $key }}')">
                                                                <i class="fas fa-trash-alt text-danger btn-sm"></i>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                        @if(in_array($activeQuestion->type, ['multiple-choices', 'dropdown']))
                                            <div class="col-md-12 text-left mx-auto pl-0 mb-30">
                                                <button class="btn btn-info btn-sm"
                                                        wire:click.prevent="addChoice({{ $activeQuestion->id }})"><i
                                                        class="fas fa-plus mr-2"></i>{{ __('انتخاب کنید') }}</button>
                                            </div>
                                        @endif
                                    @endif
                                    @if(in_array($activeQuestion->type, [ 'slider']))
                                        <label
                                            for="visibility">{{ __('مقدار حداقل و حداکثر دامنه خود را برای نوار لغزنده وارد کنید') }}</label>
                                        @foreach($choices as $key => $choice)
                                            <div class="next-choice">
                                                <div class="col-md-12 col-12 px-0 d-flex">
                                                    <div class="col-md-10 px-0">
                                                        <input type="number" class="form-control"
                                                               wire:model.debounce.500ms="choices.{{ $key }}">
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <br>

                                    <button type="submit" class="btn btn-primary w-100 mb-3 mt-10"><i
                                            class="far fa-save mr-2"></i>{{ __('ذخیره') }}</button>


                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="question-tab question-right">
                                    <div class="form-group col-md-12 px-0">
                                        <label for="visibility">{{ __('قابلیت دیده شدن') }}</label>
                                        <select wire:model.defer="activeQuestion.visibility" class="form-control">
                                            <option value="1" selected>{{ __('بله') }}</option>
                                            <option value="0">{{ __('خیر') }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 px-0">
                                        <label for="position">{{ __('جایگاه سوال') }}</label>
                                        <select wire:model.defer="activeQuestion.position" class="form-control">
                                            @foreach(range(1, $questions->count()) as $position)
                                                <option value="{{ $position }}"
                                                        @if($activeQuestion->position == $position) selected @endif>{{ $position }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 px-0">
                                        <label for="required">{{ __('ضروری') }}</label>
                                        <select wire:model.defer="activeQuestion.is_required" class="form-control">
                                            <option value="1" selected>{{ __('بله') }}</option>
                                            <option value="0">{{ __('خیر') }}</option>
                                        </select>
                                    </div>

                                    @if($activeQuestion->attributes)
                                        @if(array_key_exists('choice_selection_count', $activeQuestion->attributes))
                                            <input type="hidden"
                                                   wire:model.defer="activeQuestion.attributes.choice_selection_count"
                                                   value="1">
                                        @endif

                                        @if(array_key_exists('randomize_choice', $activeQuestion->attributes))
                                            <div class="form-group col-md-12 px-0">
                                                <label for="randomize_choice">{{ __('انتخاب تصادفی') }}</label>
                                                <select wire:model.defer="activeQuestion.attributes.randomize_choice"
                                                        class="form-control">
                                                    <option value="1" selected>{{ __('بله') }}</option>
                                                    <option value="0">{{ __('خیر') }}</option>
                                                </select>
                                            </div>
                                        @endif

                                        @if(array_key_exists('max_chars', $activeQuestion->attributes))
                                            <div class="form-group col-md-12 px-0">
                                                <label for="max_chars">{{ __('حداکثر کاراکترها') }}</label>
                                                <input type="text" class="form-control"
                                                       wire:model.defer="activeQuestion.attributes.max_chars">
                                            </div>
                                        @endif

                                        @if(array_key_exists('date_format', $activeQuestion->attributes))
                                            <div class="form-group col-md-12 px-0">
                                                <label for="date_format">{{ __('فرمت تاریخ') }}</label>
                                                <select wire:model.defer="activeQuestion.attributes.date_format"
                                                        class="form-control">
                                                    <option value="MMDDYYYY" selected>MMDDYYYY</option>
                                                    <option value="DDMMYYYY">DDMMYYYY</option>
                                                    <option value="YYYYMMDD">YYYYMMDD</option>
                                                </select>
                                            </div>
                                        @endif

                                        @if(array_key_exists('alphabetical_order', $activeQuestion->attributes))
                                            <div class="form-group col-md-12 px-0">
                                                <label for="alphabetical_order">{{ __('به ترتیب حروف الفبا') }}</label>
                                                <select wire:model.defer="activeQuestion.attributes.alphabetical_order"
                                                        class="form-control">
                                                    <option value="1" selected>{{ __('بله') }}</option>
                                                    <option value="0">{{ __('خیر') }}</option>
                                                </select>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <div class="question-tab p-3" style="overflow:hidden; height:400px;">
                                    <p class="text-center">{{ __('برای ویرایش سوال از پنل سمت چپ روی آن کلیک کنید.') }}</p>

                                    <img src="{{ asset('company/img/no-question-selected.png') }}" class="img-fluid">
                                </div>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
