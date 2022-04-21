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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
        'titre' => [
            'required' => 'Le champ titre est obligatoire',
            'unique' => 'Le titre existe déjà',
        ],
        'description' => [
            'required' => 'Le champ description est obligatoire',
        ],
        'prix' => [
            'required' => 'Le champ prix est obligatoire',
        ],
        'image' => [
            'required' => 'Le champ image est obligatoire',
            'image' => 'Veuillez choisir une image valide',
            'mimes' => 'Seuls les fichiers : :values sont accéptés',
            'uploaded' => 'la taille du fichier :attribute ne doit pas dépasser 2mg',
        ],
        'categories_id' => [
            'required' => 'Le champ catégorie est obligatoire',
        ],
        'nom' => [
            'required' => 'Le champ nom est obligatoire',
            'unique' => 'Le nom existe déjà',
        ],
        'status' => [
            'required' => 'Le champ disponibilité est obligatoire',
        ],
        'quantite' => [
            'required' => 'Le champ quantité est obligatoire',
        ],
        'prix_total' => [
            'required' => 'Le champ prix TTC est obligatoire',
        ],
        'total_recu' => [
            'required' => 'Le champ total est obligatoire',
        ],
        'paiement_status' => [
            'required' => 'Le champ statut de paiement est obligatoire',
        ],
        'nom' => [
            'required' => 'Le champ nom  est obligatoire',
        ],
        'Nature' => [
            'required' => 'Le champ Nature est obligatoire',
        ],
        'CIN_RC_IF' => [
            'required' => 'Le champ CIN_RC_IF est obligatoire',
        ],

    'civilite' => [
            'required' => 'Le champ civilite est obligatoire',
        ],
    
     'date_naissance' => [
        'required' => 'Le champ date naissance est obligatoire',
    ],

     'genre' => [
        'required' => 'Le champ genre  est obligatoire',
    ],

     'Situation_familiale' => [
        'required' => 'Le champ Situation familiale  est obligatoire',
    ],
    
     'Ville' => [
        'required' => 'Le champ Ville est obligatoire',
    ],
     'code_postale' => [
        'required' => 'Le champ code postale  est obligatoire',
    ],
     'telephone_fixe_mobile' => [
        'required' => 'Le champ telephone fixe  est obligatoire',
    ],
    
     'telephone_mobile' => [
        'required' => 'Le champ telephone mobile est obligatoire',
    ],
     'email' => [
        'required' => 'Le champ email est obligatoire',
    ],
    
     'categoriepermi' => [
        'required' => 'Le champ catégorie de permis est obligatoire',
    ],
    
     'lien_avec_le_souscripteur' => [
        'required' => 'Le champ lien avec le souscripteur  est obligatoire',
    ],
     'CSP' => [
        'required' => 'Le champ CSP est obligatoire',
    ], 

     'datepermis' => [
        'required' => 'Le champ datepermis est obligatoire',
    ],
     'numeropermi' => [
        'required' => 'Le champ numeropermi est obligatoire',
    ],
    
     'address' => [
        'required' => 'Le champ address est obligatoire',
    ],
        'paiement_type' => [
            'required' => 'Le champ type de paiement est obligatoire',
        ],
        'garantie_id' => [
            'required' => 'Le champ garanties est obligatoire',
        ],
        'vehicule_id' => [
            'required' => 'Le champ vehicule est obligatoire',
        ],
        'client_id' => [
            'required' => 'Le champ client est obligatoire',
        ],
        'change' => [
            'required' => 'Le champ RESTE  est obligatoire',
        ],
        'from' => [
            'required' => 'Le champ date de début est obligatoire',
        ],
        'to' => [
            'required' => 'Le champ date de fin est obligatoire',
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

    'attributes' => [],

];
