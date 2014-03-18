<?php

require 'vendor/autoload.php';

$sampler = new Hoa\Compiler\Llk\Sampler\BoundedExhaustive(
    // Grammar.
    Hoa\Compiler\Llk\Llk::load(new Hoa\File\Read('Grammar.pp')),
    // Token sampler.
    new Hoa\Regex\Visitor\Isotropic(new Hoa\Math\Sampler\Random()),
    // Length.
    15
);

foreach($sampler as $i => $data) {

    printf('%6d => %s' . "\n", $i, $data);

    json_decode($data);

    if(JSON_ERROR_NONE !== json_last_error()) {

        echo 'JSON failed.', "\n";

        break;
    }

    jsond_decode($data);

    if(JSON_ERROR_NONE !== jsond_last_error()) {

        echo 'JSOND failed.', "\n";

        break;
    }
}
