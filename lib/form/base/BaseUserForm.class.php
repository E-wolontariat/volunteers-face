<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'facebook_id' => new sfWidgetFormInputText(),
      'first_name'  => new sfWidgetFormInputText(),
      'last_name'   => new sfWidgetFormInputText(),
      'gender'      => new sfWidgetFormInputCheckbox(),
      'email'       => new sfWidgetFormInputText(),
      'birthsday'   => new sfWidgetFormInputText(),
      'phone'       => new sfWidgetFormInputText(),
      'last_ip'     => new sfWidgetFormInputText(),
      'is_secured'  => new sfWidgetFormInputCheckbox(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'facebook_id' => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'first_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender'      => new sfValidatorBoolean(array('required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'birthsday'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_ip'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'is_secured'  => new sfValidatorBoolean(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
