<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute باید پذیرفته شود.',
    'active_url' => ':attribute یک آدرس معتبر نیست.',
    'after' => ':attribute باید تاریخ بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخ بعد یا مساوی :date باشد.',
    'alpha' => ':attribute ممکن است فقط شامل حروف باشد.',
    'alpha_dash' => ':attribute ممکن است فقط شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute ممکن است فقط شامل حروف و اعداد باشد.',
    'array' => ':attribute  باید یک آرایه باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخ قبل یا مساوی :date باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلو بایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max موارد باشد.',
    ],
    'boolean' => 'فیلد :attribute باید درست یا نادرست باشد.',
    'confirmed' => 'تکرار :attribute مطابقت ندارد.',
    'date' => ':attribute تاریخ معتبری نیست.',
    'date_equals' => ':attribute باید تاریخی برابر با :date باشد.',
    'date_format' => ':attribute با قالب :format مطابقت ندارد..',
    'different' => ':attribute و :other باید متفاوت باشد.',
    'digits' => ':attribute باید ارقام :digits باشد.',
    'digits_between' => ':attribute باید بین :min و :max ارقام باشد.',
    'dimensions' => ':attribute دارای ابعاد تصویر نامعتبر است.',
    'distinct' => 'فیلد  :attribute دارای یک مقدار تکراری است..',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از: :values به پایان برسد..',
    'exists' => ':attribute انتخاب شده نامعتبر است.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => 'فیلد  :attribute باید دارای یک مقدار باشد..',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file' => ':attribute باید بیشتر از :value کیلو بایت باشد.',
        'string' => ':attribute باید بزرگتر از :value کاراکتر باشد.',
        'array' => ':attribute باید بیش از :value مورد داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی :value کیلو بایت یاشد.',
        'string' => ':attribute باید بزرگتر یا مساوی :value کاراکتر باشد.',
        'array' => ':attribute باید  :value مورد یا بیشتر داشته باشد.',
    ],
    'image' => ':attribute باید تصویر باشد.',
    'in' => ':attribute انتخاب شده نامعتبر است.',
    'in_array' => 'فیلد :attribute در وجود ندارد :other.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'file' => ':attribute باید کمتر از :value کیلو بایت یاشد.',
        'string' => ':attribute باید کمتر از  :value کاراکتر باشد.',
        'array' => ':attribute باید کمتر از :value مورد باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کمتر یا مساوی:value باشد.',
        'file' => ':attribute باید کمتر یا مساوی :value کیلو بایت باشد.',
        'string' => ':attribute باید کمتر یا مساوی :value کاراکتر.',
        'array' => ':attribute نباید بیشتر از :value مورد باشد.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بیشتر از :max باشد.',
        'file' => ':attribute ممکن است بیشتر از :max کیلو بایت یاشد.',
        'string' => ':attribute ممکن است بیشتر از :max کاراکتر باشد.',
        'array' => ':attribute ممکن است بیشتر از :max مقدار باشد.',
    ],
    'mimes' => ':attribute باید فایلی از نوع: :values باشد.',
    'mimetypes' => ':attribute باید فایلی از نوع: :values باشد.',
    'min' => [
        'numeric' => ':attribute باید حداقل :min باشد.',
        'file' => ':attribute باید حداقل :min کیلو بایت یاشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
        'array' => ':attribute باید حداقل  :min مورد باشد.',
    ],
    'not_in' => ' :attribute انتخاب شده نامعتبر است.',
    'not_regex' => 'قالب  :attribute نامعتبر است..',
    'numeric' => ' :attribute باید یک عدد باشد.',
    'password' => 'رمز عبور نادرست است.',
    'present' => 'قسمت  :attribute باید وجود داشته باشد..',
    'regex' => 'قالب  :attribute نامعتبر است.',
    'required' => 'فیلد  :attribute به صورت الزامی می باشد.',
    'required_if' => 'وقتی فیلد :attribute الزامی می باشد که  :other در :value باشد.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'وقتی فیلد  :attribute الزامی می یاشد که :values وجود دارد.',
    'required_with_all' => 'وقتی فیلد :attribute الزامی می باشد که :values وجود دارد.',
    'required_without' => 'فیلد :attribute زمانی لازم است که  :values وجود نداشته باشد.',
    'required_without_all' => 'فیلد :attribute زمانی لازم است که هیچ یک از :values ها وجود نداشته باشد.',
    'same' => ':attribute و :other باید مطابقت داشته باشد.',
    'size' => [
        'numeric' => ':attribute باید :size باشد.',
        'file' => ':attribute باید :size کیلو بایت یاشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
        'array' => ':attribute باید شامل  :size مورد باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر شروع شود:  :values.',
    'string' => ':attribute باید یک رشته باشد',
    'timezone' => ':attribute باید یک ناحیه معتبر باشد.',
    'unique' => ':attribute قبلاً گرفته شده است.',
    'uploaded' => ':attribute  بارگذاری نشد.',
    'url' => ' :attribute قالب نامعتبر است',
    'uuid' => ':attribute باید یک UUID معتبر باشد.

',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title'=>'عنوان',
        'name'=>'نام',
        'goodbye_text'=>'متن تشکر',
        'welcome_message'=>'متن خوش آمدگویی',
        'email'=>'ایمیل',
        'body'=>'متن',
        'description'=>'توضیحات',
        'code'=>'کد',
        'price'=>'هزینه',
        'interval'=>'نوع اشتراک',
        'plan_id'=>'انتخاب طرح',
        'user_id'=>'انتخاب کاربر',
        'starts_at'=>'تاریخ شروع',
        'ends_at'=>'تاریخ پایان',
        'envato_purchase_code'=>'انتخاب کاربر',
        'redirect_url'=>'تغییر مسیر',
        'question_color'=>'رنگ سوال',
        'answer_color'=>'رنگ جواب',
        'button_color'=>'رنگ دکمه',
        'button_text_color'=>'رنگ  متن دکمه',
        'background_color'=>'رنگ  پس زمینه',

    ],

];
