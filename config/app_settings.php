<?php

return [
        'sections' => [
            'general' => [
                'title' => 'عمومی',
                'inputs' => [
                    [
                        'label' => 'نام وبسایت',
                        'key' => 'APP_NAME',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'محیط',
                        'key' => 'APP_ENV',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'سطح اشکال زدایی',
                        'key' => 'APP_DEBUG',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'مسیر وبسایت',
                        'key' => 'APP_URL',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],
                ]
            ],

            'mail' => [
                'title' => 'ایمیل',
                'inputs' => [
                    [
                        'label' => 'میزبان هاست',
                        'key' => 'MAIL_DRIVER',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'میزبان',
                        'key' => 'MAIL_HOST',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'درگاه',
                        'key' => 'MAIL_PORT',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'نام کاربری',
                        'key' => 'MAIL_USERNAME',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'رمز عبور',
                        'key' => 'MAIL_PASSWORD',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ],

                    [
                        'label' => 'رمزگذاری',
                        'key' => 'MAIL_ENCRYPTION',
                        'storage' => 'env',
                        'type' => 'text',
                        'class' => 'col-sm-6',
                    ]
                ]
            ],

            'localization' => [
                'title' => 'بومی سازی',
                'inputs' => [
                    [
                        'label' => 'واحد پول',
                        'key' => 'currency',
                        'storage' => 'database',
                        'type' => 'text',
                        'class' => 'col-sm-2',
                    ]
                ]
            ],
        ]
    ];
