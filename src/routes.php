<?php
$routes = [
    'metadata',
    'createAccount',
    'editAccountInfo',
    'getAccountInfo',
    'revokeAccessToken',
    'createPage',
    'editPage',
    'getPage',
    'getPageList',
    'getViews'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

