<?php


declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'No rule sets specified in Validation configuration.',
    'ruleNotFound'    => '"{0}" is not a valid rule.',
    'groupNotFound'   => '"{0}" is not a validation rules group.',
    'groupNotArray'   => '"{0}" rule group must be an array.',
    'invalidTemplate' => '"{0}" is not a valid Validation template.',

    // Rule Messages
    'alpha'                 => 'El campo {field} solo puede contener caracteres alfabeticos.',
    'alpha_dash'            => 'El campo {field} solo puede contener caracteres alfanumericos, guiones y guiones bajos.',
    'alpha_numeric'         => 'El campo {field} solo puede contener caracteres alfanumericos.',
    'alpha_numeric_punct'   => 'El campo {field} solo puede contener caracteres alfanumericos, espacios y los siguientes caracteres: ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'El campo {field} solo puede contener caracteres alfanumericos y espacios.',
    'alpha_space'           => 'El campo {field} solo puede contener caracteres alfabeticos y espacios.',
    'decimal'               => 'El campo {field} debe contener un numero decimal.',
    'differs'               => 'El campo {field} debe ser diferente al campo {param}.',
    'equals'                => 'El campo {field} debe ser exactamente: {param}.',
    'exact_length'          => 'El campo {field} debe tener exactamente {param} caracteres de longitud.',
    'field_exists'          => 'El campo {field} debe existir.',
    'greater_than'          => 'El campo {field} debe contener un numero mayor que {param}.',
    'greater_than_equal_to' => 'El campo {field} debe contener un numero mayor o igual que {param}.',
    'hex'                   => 'El campo {field} solo puede contener caracteres hexadecimales.',
    'in_list'               => 'El campo {field} debe ser uno de los siguientes: {param}.',
    'integer'               => 'El campo {field} debe contener un entero.',
    'is_natural'            => 'El campo {field} solo debe contener digitos.',
    'is_natural_no_zero'    => 'El campo {field} solo debe contener digitos y debe ser mayor que cero.',
    'is_not_unique'         => 'El campo {field} debe contener un valor existente en la base de datos.',
    'is_unique'             => 'El campo {field} debe contener un valor unico.',
    'less_than'             => 'El campo {field} debe contener un numero menor que {param}.',
    'less_than_equal_to'    => 'El campo {field} debe contener un numero menor o igual que {param}.',
    'matches'               => 'El campo {field} no coincide con el campo {param}.',
    'max_length'            => 'El campo {field} no puede exceder los {param} caracteres de longitud.',
    'min_length'            => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
    'not_equals'            => 'El campo {field} no puede ser: {param}.',
    'not_in_list'           => 'El campo {field} no debe ser uno de los siguientes: {param}.',
    'numeric'               => 'El campo {field} debe contener solo numeros.',
    'regex_match'           => 'El campo {field} no coincide con el formato correcto.',
    'required'              => 'El campo {field} es requerido.',
    'required_with'         => 'El campo {field} es requerido cuando {param} este presente.',
    'required_without'      => 'El campo {field} es requerido cuando {param} no este  presente.',
    'string'                => 'El campo {field} debe ser una cadena valida.',
    'timezone'              => 'El campo {field} debe contener una zona horaria valida.',
    'valid_base64'          => 'El campo {field} debe contener una cadena base64 valida.',
    'valid_email'           => 'El campo {field} debe contener una direcci n de correo electronico valida.',
    'valid_emails'          => 'El campo {field} debe contener todas las direcciones de correo electronico validas.',
    'valid_ip'              => 'El campo {field} debe contener una direccion IP valida.',
    'valid_url'             => 'El campo {field} debe contener una URL valida.',
    'valid_url_strict'      => 'El campo {field} debe contener una URL valida.',
    'valid_date'            => 'El campo {field} debe contener una fecha valida.',
    'valid_json'            => 'El campo {field} debe contener un JSON valido.',

    // Credit Cards
    'valid_cc_num' => '{field} no parece ser un numero de tarjeta de credito valido.',

    // Files
    'uploaded' => '{field} no es un archivo valido subido.',
    'max_size' => '{field} es demasiado grande.',
    'is_image' => '{field} no es un archivo de imagen valido subido.',
    'mime_in'  => '{field} no tiene un tipo MIME valido.',
    'ext_in'   => '{field} no tiene una extension de archivo v lida.',
    'max_dims' => '{field} es demasiado ancho o demasiado alto.',
    'min_dims' => '{field} es demasiado estrecho o demasiado corto.',
];
