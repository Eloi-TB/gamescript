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

    'accepted'             => 'El camp :attribute deu ser aceptat.',
    'active_url'           => 'El camp :attribute no es una URL válida.',
    'after'                => 'El camp :attribute deu ser una data posterior a :date.',
    'after_or_equal'       => 'El camp :attribute deu ser una data posterior o igual a :date.',
    'alpha'                => 'El camp :attribute només pot contenir lletras.',
    'alpha_dash'           => 'El camp :attribute només puede contener lletras, números y guions (a-z, 0-9, -_).',
    'alpha_num'            => 'El camp :attribute només puede contener lletras y números.',
    'array'                => 'El camp :attribute deu ser un array.',
    'before'               => 'El camp :attribute deu ser una data anterior a :date.',
    'before_or_equal'      => 'El camp :attribute deu ser una data anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El camp :attribute deu ser un valor entre :min y :max.',
        'file'    => 'El arxiu :attribute deu pesar entre :min y :max kilobytes.',
        'string'  => 'El camp :attribute deu contenir entre :min y :max caracteres.',
        'array'   => 'El camp :attribute deu contenir entre :min y :max elements.',
    ],
    'boolean'              => 'El camp :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El camp confirmació de :attribute no coincideix.',
    'country'              => 'El camp :attribute no es un país válid.',
    'date'                 => 'El camp :attribute no correspond amb una data válida.',
    'date_format'          => 'El camp :attribute no correspond con el formato de fecha :format.',
    'different'            => 'Els camps :attribute y :other han de ser diferents.',
    'digits'               => 'El camp :attribute deu ser un número de :digits dígits.',
    'digits_between'       => 'El camp :attribute deu contenir entre :min y :max dígits.',
    'dimensions'           => 'El camp :attribute te dimensions invalides.',
    'distinct'             => 'El camp :attribute te un valor duplicat.',
    'email'                => 'El camp :attribute no correspond amb una direcció de e-mail válida.',
    'file'                 => 'El camp :attribute deu ser un arxiu.',
    'filled'               => 'El camp :attribute es obligatori.',
    'exists'               => 'El camp :attribute no existeix.',
    'image'                => 'El camp :attribute deu ser una imagen.',
    'in'                   => 'El camp :attribute deu ser igual a algú d aquest valors :values',
    'in_array'             => 'El camp :attribute no existeix en :other.',
    'integer'              => 'El camp :attribute deu ser un número enter.',
    'ip'                   => 'El camp :attribute deu ser una direcció IP válida.',
    'json'                 => 'El camp :attribute deu ser una cadena de text JSON válida.',
    'max'                  => [
        'numeric' => 'El camp :attribute deu ser :max com máxim.',
        'file'    => 'El arxiu :attribute deu pesar :max kilobytes com máxim.',
        'string'  => 'El camp :attribute deu contener :max caracteres com máxim.',
        'array'   => 'El camp :attribute deu contener :max elementos com máxim.',
    ],
    'mimes'                => 'El camp :attribute deu ser un arxiu de tipus :values.',
    'mimetypes'            => 'El camp :attribute deu ser un arxiu de tipus :values.',
    'min'                  => [
        'numeric' => 'El camp :attribute deu tenir al menys :min.',
        'file'    => 'El arxiu :attribute deu pesar al menys :min kilobytes.',
        'string'  => 'El camp :attribute deu contenir al menys :min caracteres.',
        'array'   => 'El camp :attribute no deu contenir més de :min elements.',
    ],
    'not_in'               => 'El camp :attribute seleccionado es invalido.',
    'numeric'              => 'El camp :attribute debe ser un numero.',
    'present'              => 'El camp :attribute debe estar presente.',
    'regex'                => 'El format del campo :attribute es inválido.',
    'required'             => 'El camp :attribute es obligatori',
    'required_if'          => 'El camp :attribute es obligatori quan el camp :other es :value.',
    'required_unless'      => 'El camp :attribute es requerid a menys que :other se trobi en :values.',
    'required_with'        => 'El camp :attribute es obligatori quan :values está present.',
    'required_with_all'    => 'El camp :attribute es obligatori quan :values está present.',
    'required_without'     => 'El camp :attribute es obligatori quan :values no está present.',
    'required_without_all' => 'El camp :attribute es obligatori quan ningú camp :values hi están presents.',
    'same'                 => 'Els camps :attribute y :other han de coincidir.',
    'size'                 => [
        'numeric' => 'El camp :attribute deu ser :size.',
        'file'    => 'El arxiu :attribute deu pesar :size kilobytes.',
        'string'  => 'El camp :attribute deu contenir :size caracters.',
        'array'   => 'El camp :attribute deu contenir :size elements.',
    ],
    'state'                => 'El estat no es válido per el país seleccionat.',
    'string'               => 'El camp :attribute deu contenir solo caracteres.',
    'timezone'             => 'El camp :attribute deu contenir una zona válida.',
    'unique'               => 'l element :attribute ya está en us.',
    'uploaded'             => 'l element :attribute error al pujar.',
    'url'                  => 'El format de :attribute no correspond amb el de una URL válida.',

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
