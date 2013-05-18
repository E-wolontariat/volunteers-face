<?php

/**
 * Phone form base class.
 *
 * @method Phone getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BasePhoneForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'type' => new sfWidgetFormInputText(),
      'id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'type' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('phone[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Phone';
  }


}
