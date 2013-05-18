<?php

/**
 * Round form base class.
 *
 * @method Round getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BaseRoundForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'from'         => new sfWidgetFormDateTime(),
      'to'           => new sfWidgetFormDateTime(),
      'show_results' => new sfWidgetFormInputCheckbox(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'from'         => new sfValidatorDateTime(array('required' => false)),
      'to'           => new sfValidatorDateTime(array('required' => false)),
      'show_results' => new sfValidatorBoolean(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('round[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Round';
  }


}
