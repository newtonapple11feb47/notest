<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'className' => 'oat\\tao\\model\\websource\\TokenWebSource',
        'options' => array(
            'secret' => '64f4eb15ff21242089dbcdd983ddcedc',
            'path' => '/var/www/main/apps/test/data/tao/public/',
            'ttl' => 1440,
            'fsUri' => 'public',
            'id' => '5a9b16c5a5f4a'
        )
    )
));
