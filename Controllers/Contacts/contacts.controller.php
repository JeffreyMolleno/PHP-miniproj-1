<?php
include '../../Model/Contacts/Contacts.class.php';

$contact = new Contacts('contacts.txt');

if (   !empty($_POST['first-name'])
    && !empty($_POST['middle-name'])
    && !empty($_POST['last-name']) 
    && !empty($_POST['address']) 
    && !empty($_POST['contact-number'])
    ) {

    $data = array($_POST['first-name'], $_POST['middle-name'], $_POST['last-name'], $_POST['address'], $_POST['contact-number']);

    $contact->setData($data);

    $_POST['first-name'] = '';
    $_POST['middle-name'] = '';
    $_POST['last-name'] = '';
    $_POST['address'] = '';
    $_POST['contact-number'] = '';
}

if(isset($_POST['index-remove'])){
    $gdata = $contact->removeData($_POST['index-remove']);
}
    $gdata = $contact->getData();



