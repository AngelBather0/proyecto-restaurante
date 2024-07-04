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

    'accepted'             => 'Поле :attribute должно быть принято.',
    'active_url'           => 'Поле :attribute содержит недействительный URL.',
    'after'                => 'Поле :attribute должно содержать дату после :date.',
    'after_or_equal'       => 'Поле :attribute должно содержать дату после или равную :date.',
    'alpha'                => 'Поле :attribute должно содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать только буквы, цифры и дефисы.',
    'alpha_num'            => 'Поле :attribute может содержать только буквы и цифры.',
    'array'                => 'Поле :attribute должно быть массивом.',
    'before'               => 'Поле :attribute должно содержать дату до :date.',
    'before_or_equal'      => 'Поле :attribute должно содержать дату до или равную :date.',
    'between'              => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Поле :attribute должно быть между :min и :max килобайт.',
        'string'  => 'Поле :attribute должно содержать от :min до :max символов.',
        'array'   => 'Поле :attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'              => 'Поле :attribute должно быть true или false.',
    'confirmed'            => 'Поле :attribute не совпадает с подтверждением.',
    'date'                 => 'Поле :attribute не является датой.',
    'date_equals'          => 'Поле :attribute должно быть датой, равной :date.',
    'date_format'          => 'Поле :attribute не соответствует формату :format.',
    'different'            => 'Поля :attribute и :other должны быть разными.',
    'digits'               => 'Поле :attribute должно быть :digits цифрами.',
    'digits_between'       => 'Поле :attribute должно содержать от :min до :max цифр.',
    'dimensions'           => 'Поле :attribute содержит недопустимые размеры изображения.',
    'distinct'             => 'Поле :attribute имеет повторяющееся значение.',
    'email'                => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with'            => 'Поле :attribute должно заканчиваться одним из следующих значений: :values',
    'exists'               => 'Выбранное значение для :attribute недействительно.',
    'file'                 => 'Поле :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute должно быть заполнено.',
    'gt'                   => [
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'file'    => 'Поле :attribute должно быть больше чем :value килобайт.',
        'string'  => 'Поле :attribute должно содержать больше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать больше чем :value элементов.',
    ],
    'gte'                  => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file'    => 'Поле :attribute должно быть больше или равно :value килобайт.',
        'string'  => 'Поле :attribute должно быть больше или равно :value символов.',
        'array'   => 'Поле :attribute должно содержать :value или больше элементов.',
    ],
    'image'                => 'Поле :attribute должно быть изображением.',
    'in'                   => 'Выбранное значение для :attribute недействительно.',
    'in_array'             => 'Поле :attribute не существует в :other.',
    'integer'              => 'Поле :attribute должно быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4'                 => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6'                 => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json'                 => 'Поле :attribute должно быть JSON строкой.',
    'lt'                   => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file'    => 'Поле :attribute должно быть меньше чем :value килобайт.',
        'string'  => 'Поле :attribute должно содержать меньше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать меньше чем :value элементов.',
    ],
    'lte'                  => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file'    => 'Поле :attribute должно быть меньше или равно :value килобайт.',
        'string'  => 'Поле :attribute должно быть меньше или равно :value символов.',
        'array'   => 'Поле :attribute не должно содержать более :value элементов.',
    ],
    'max'                  => [
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'file'    => 'Поле :attribute не может быть больше :max килобайт.',
        'string'  => 'Поле :attribute не может быть длиннее :max символов.',
        'array'   => 'Поле :attribute не может содержать больше :max элементов.',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'mimetypes'            => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Поле :attribute должно быть не менее :min килобайт.',
        'string'  => 'Поле :attribute должно содержать не менее :min символов.',
        'array'   => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'not_in'               => 'Выбранное значение для :attribute недействительно.',
    'not_regex'            => 'Формат поля :attribute недействителен.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'password'             => 'Неверный пароль.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'Поле :attribute имеет недопустимый формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно, если :other не находится в :values.',
    'required_with'        => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_with_all'    => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_without'     => 'Поле :attribute обязательно, когда :values отсутствует.',
    'required_without_all' => 'Поле :attribute обязательно, когда ни одно из :values не присутствует.',
    'same'                 => 'Поля :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть размером :size.',
        'file'    => 'Поле :attribute должно быть размером :size килобайт.',
        'string'  => 'Поле :attribute должно содержать :size символов.',
        'array'   => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with'          => 'Поле :attribute должно начинаться с одного из следующих значений: :values',
    'string'               => 'Поле :attribute должно быть строкой.',
    'timezone'             => 'Поле :attribute должно быть допустимой зоной.',
    'unique'               => 'Такое значение поля :attribute уже существует.',
    'uploaded'             => 'Ошибка загрузки :attribute.',
    'url'                  => 'Поле :attribute имеет недопустимый формат URL.',
    'uuid'                 => 'Поле :attribute должно быть действительным UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
