<?php
/**
 * Created by PhpStorm.
 * User: carlosn
 * Date: 6/09/18
 * Time: 08:37 PM
 */
include ('vendor/autoload.php');

$options=[
    'host' => "localhost",
    'username' => "uid=carlos,ou=Users,dc=zend,dc=com",
    'password' => "hola",
    //'username' =>"cn=admin,dc=zend,dc=com",
    //'password' => "password",
    'port' => 389
];

$ldap = new \Zend\Ldap\Ldap($options);
$ldap->bind();
$result = $ldap->search(
    '(objectclass=*)',
    'ou=Users,dc=zend,dc=com',
    Zend\Ldap\Ldap::SEARCH_SCOPE_ONE
);

foreach ($result as $item) {
    echo $item["dn"] . ': ' . $item['cn'][0] . PHP_EOL;
}