<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\filesystem\FileSystemService(array(
    'filesPath' => '/var/www/main/apps/test/data/',
    'adapters' => array(
        'taskQueueStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/taskQueueStorage'
            )
        ),
        'fileUploadDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/tao/upload'
            )
        ),
        'public' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/tao/public'
            )
        ),
        'private' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/tao/private'
            )
        ),
        'log' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/tao/log'
            )
        ),
        'sharedTmp' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/tmp'
            )
        ),
        'stateBackup' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/stateBackup'
            )
        ),
        'itemDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/taoItems/itemData'
            )
        ),
        'taoQtiItem' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/taoQtiItem'
            )
        ),
        'taoQtiTest' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/taoQtiTest'
            )
        ),
        'taoQtiTestSessionFilesystem' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/taoQtiTestSessionFilesystem'
            )
        ),
        'qtiItemPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/qtiItemPci'
            )
        ),
        'qtiItemImsPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/qtiItemImsPci'
            )
        ),
        'portableElementStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => '/var/www/main/apps/test/data/portableElement'
            )
        )
    )
));
