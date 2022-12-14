<?php

return [
    'format_devis_number' => "DVS".now()->format('Ym').'-',
    'payment_method' => [
        'credit_card' => [
            'name' => 'Paiement par Carte bancaire',
            'tok' => 'card',
        ],
        'virement' => [
            'name' => 'Paiement par virement bancaire',
            'tok' => 'virement'
        ],
        'sepa' => [
            'name' => 'Paiement par Prélèvement SEPA',
            'tok' => 'sepa'
        ],
    ]
];
