<?php
return [
    'language'=>'id',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=smart_ehealth_db',
            'username' => 'root',
            'password' => 'b!smill4h',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'helper' => [
            'class' => 'backend\components\Helper',
            'enableCsrfValidation' => true,
        ],
    ],
    'modules' => [
        'gridview' =>  [
             'class' => '\kartik\grid\Module'
             // enter optional module parameters below - only if you need to  
             // use your own export download action or custom translation 
             // message source
             // 'downloadAction' => 'gridview/export/download',
             // 'i18n' => []
         ]
     ]
];