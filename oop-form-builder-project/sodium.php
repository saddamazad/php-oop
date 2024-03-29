<?php
class Sodium {
    static public function addForm($id): Sodium { // return `Sodium` object instance, for method chaining
        return new Sodium();
    }

    public function addColumn($columnSize): Sodium { // return `Sodium` object instance, for method chaining

    }

    // take UNLIMITED params as arguments, parameter should be of `FieldInterface` type
    public function addFields(FieldInterface ...$fields): Sodium {

    }

    //public function addFields(): Sodium {}
}

class FieldFactory {
    static public function createTextField(): FieldInterface { // return `FieldInterface` type object instance

    }

    static public function createRadio(): FieldInterface { // return `FieldInterface` type object instance

    }
}



class TextField extends AbstractField {

}

class Radio extends AbstractField {

}

interface FieldInterface {
    static public function create($id):FieldInterface; // return type `FieldInterface`

    public function setId(): FieldInterface; // return type `FieldInterface`, for method chaining
    public function setLabel(): FieldInterface;
    public function setDefault(): FieldInterface;
    public function setValue(): FieldInterface;
}

class AbstractField implements FieldInterface {
    static public function create($id):FieldInterface {} // return type `FieldInterface`

    public function setId(): FieldInterface {} // return type `FieldInterface`, for method chaining
    public function setLabel(): FieldInterface {}
    public function setDefault(): FieldInterface {}
    public function setValue(): FieldInterface {}
}

//Sodium::addForm("myform")->addColumn()->addFields()->addColumn(30)->addFields();

/*
Sodium::addForm("myform")->addColumn()->addFields(
    [
        FieldFactory::createTextField()->setId()->setDefault()->setValue(),
        FieldFactory::createRadio()->setLabel()
    ]
);
*/

Sodium::addForm("myform")->addColumn()->addFields(
    FieldFactory::createTextField()->setId()->setDefault()->setValue(),
    FieldFactory::createRadio()->setLabel()
);


Sodium::addForm("myform")->addFields(
    TextField::create("id")->setDefault()->setValue(),
    Radio::create()->setLabel()
);