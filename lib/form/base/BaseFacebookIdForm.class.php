<?php

/**
 * FacebookId form base class.
 *
 * @method FacebookId getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BaseFacebookIdForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'type' => new sfWidgetFormInputText(),
      'id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'type' => new sfValidatorInteger(array('min' => -9.22337203685E+18, 'max' => 9223372036854775807, 'required' => false)),
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('facebook_id[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacebookId';
  }


}
