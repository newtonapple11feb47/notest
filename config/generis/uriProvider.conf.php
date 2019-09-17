<?php
/**
 * The Uri Provider configuration contains the service to be used
 * to generate unique URI for newly created resources
 * 
 * Providers must implement UriProvider
 * 
 * Default uri provider is core_kernel_uri_DatabaseSerialUriProvider
 * 
 * Alternatives:
 *     core_kernel_uri_AdvKeyValueUriProvider
 *     oat\generis\model\kernel\uri\MicrotimeRandUriProvider
 *     oat\generis\model\kernel\uri\Bin2HexUriProvider
 * 
 * @see core_kernel_uri_UriService
 */
return new oat\oatbox\config\ConfigurationService(array(
    'config' => new core_kernel_uri_DatabaseSerialUriProvider(array(
        'persistence' => 'default',
        'namespace' => 'http://192.168.1.114/apps/test/tao-teating.rdf#'
    ))
));
