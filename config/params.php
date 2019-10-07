<?php

return [
    'app.storage.url' => @$_ENV['STORAGE_URL'],

    'fileStorage.filesystemComponent' => 'fsLocal',

    'fsAwsS3.key' => '',
    'fsAwsS3.secret' => '',
    'fsAwsS3.bucket' => '',
    'fsAwsS3.region' => '',
    'fsAwsS3.endpoint' => '',
];
