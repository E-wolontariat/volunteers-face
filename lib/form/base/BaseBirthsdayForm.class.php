<?php

/**
 * Birthsday form base class.
 *
 * @method Birthsday getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BaseBirthsdayForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'type' => new sfWidgetFormDateTime(),
      'id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'type' => new sfValidatorDateTime(array('required' => false)),
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('birthsday[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Birthsday';
  }


}
