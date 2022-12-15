<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Mail per nuova prenotazione',
    'email_message' => 'Questa persona ha prenotato :
',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'info@locandadelviale.it',
    'to' => 'andrei.timpea@gmail.com'
    ),
    'fields' => array(
    'nome' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'telefono' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'persone' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'persone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'persone\' is required.'
    )
    ),
    'data' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'data',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'data\' is required.'
    )
    ),
    'message' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Per qualsiasi informazioni o se ha delle richeste, puo scriverci',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Per qualsiasi informazioni o se ha delle richeste, puo scriverci\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>