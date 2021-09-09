<?php

namespace app\models;

use yii\db\ActiveRecord;

class Employee extends ActiveRecord
{

    private $name;
    private $email;
    private $address;
    private $phone_number;

    public function rules()
    {
        return [
            [ ['name','email','address','phone_number'],'required']
        ];
    }


}
