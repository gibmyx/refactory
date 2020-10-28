<?php
use App\Form\Request;
use App\Origin\Origin_2;
use App\Refactory\Refactory_2;

//Example 2, Origin
//one
try {
    $formMale = (new Request())->getFormRequestMale();
    (new Origin_2())->execute($formMale);
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//two
try {
    $formFemale = (new Request())->getFormRequestFemale();
    (new Origin_2())->execute($formFemale);
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//three
try {
    $formError = (new Request())->getFormRequestError();
    (new Origin_2())->execute($formError);
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//######################################################################################################################
//Example 2, Refactory
//one
try {
    $formMale = (new Request())->getFormRequestMale();
    (new Refactory_2($formMale))->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//two
try {
    $formFemale = (new Request())->getFormRequestFemale();
    (new Refactory_2($formFemale))->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//three
try {
    $formError = (new Request())->getFormRequestError();
    (new Refactory_2($formError))->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}
