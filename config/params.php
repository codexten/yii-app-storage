<?php

return [
    'app.storage.url' => @$_ENV['STORAGE_URL'],

    'fileStorage.filesystemComponent' => 'fsLocal',

    'fsAWS.key' => '',
    'fsAWS.secret' => '',
    'fsAWS.bucket' => '',
    'fsAWS.region' => '',
];
