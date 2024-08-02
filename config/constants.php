<?php
return [
    'APP_NAME' => 'RetroCube',
    'ADMIN_DATE_FORMAT' => 'm-d-Y h:i A',
    'SECRET_KEY' => 'base64:We4I6vFnREZq5ST1/pu2dHuTxT9Adj/5rMm23uLfM/k=',
    'PAGINATION_LIMIT' => 20,
    'admin_auth_token' => 'zekkmdvhkm',
    'PAGE_LEVEL_PLUGINS' => [
        'datatable' => [
            'css' => [
                'admin/assets/global/plugins/datatables/datatables.min.css',
                'admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
            ],
            'js' => [
                'admin/assets/global/scripts/datatable.js',
                'admin/assets/global/plugins/datatables/datatables.min.js',
                'admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
            ]
        ]
    ]
];
