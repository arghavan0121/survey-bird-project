<?php

namespace App\Traits;

trait QuestionBuilder
{
    public $types = [
        [
            'key' => 'multiple-choices',
            'title' => 'چند انتخابی',
            'attributes' => [
                'choice_selection_count' => 1,
                'randomize_choice' => 0,
                'choices' => [
                    '',
                    '',
                ],
            ],
        ],

        [
            'key' => 'phone',
            'title' => 'تلفن',
        ],

        [
            'key' => 'email',
            'title' => 'ایمیل',
        ],

        [
            'key' => 'short-text',
            'title' => 'متن کوتاه',
            'attributes' => [
                'max_chars' => 50,
            ],
        ],

        [
            'key' => 'long-text',
            'title' => 'متن بلند',
            'attributes' => [
                'max_chars' => 200,
            ],
        ],

        [
            'key' => 'yes-no',
            'title' => 'بله / خیر',
            'attributes' => [
                'choices' => [
                    1 => 'بله',
                    2 => 'خیر',
                ],
            ],
        ],

        [
            'key' => 'rating',
            'title' => 'رتبه بندی',
            'attributes' => [
                'choices' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                ],
            ],
        ],

        [
            'key' => 'date',
            'title' => 'تاریخ',
            'attributes' => [
                'date_format' => 'MMDDYYYY',
            ],
        ],

        [
            'key' => 'number',
            'title' => 'عدد',
        ],

        [
            'key' => 'dropdown',
            'title' => 'منو کشویی',
            'attributes' => [
                'alphabetical_order' => false,
                'randomize' => false,
                'choices' => [],
            ],
        ],
        [
            'key' => 'slider',
            'title' => 'نوار لغزنده',
            'attributes' => [
                'choice_selection_count' => 1,
                'randomize_choice' => 0,
                'choices' => [
                    0,
                    100,
                ],
            ],
        ]
    ];

    public function getQuestionTypes()
    {
        return collect($this->types)->pluck('title', 'key');
    }

    public function getQuestionAttribute($type)
    {
        $attributes = collect($this->types)->where('key', $type)->first();

        return (isset($attributes['attributes'])) ? $attributes['attributes'] : null;
    }
}
