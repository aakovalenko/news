<?php
/**
 * Created by PhpStorm.
 * User: andri
 * Date: 17.08.17
 * Time: 15:14
 */

namespace app\models;

use \dektrium\user\models\RegistrationForm as BaseRegistration;


class RegistrationForm extends BaseRegistration
{
    /**
     * @var string
     */
    public $captcha;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['captcha', 'required'];
        $rules[] = ['captcha', 'captcha'];
        return $rules;
    }
}