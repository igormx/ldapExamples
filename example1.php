<?php
/**
 * Created by PhpStorm.
 * User: carlosn
 * Date: 6/09/18
 * Time: 08:17 PM
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
$hm = $ldap->getEntry('uid=esteban,ou=Users,dc=zend,dc=com');

var_dump($hm);