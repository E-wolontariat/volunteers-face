<?php

/**
 * UserEvent form base class.
 *
 * @method UserEvent getObject() Returns the current form's model object
 *
 * @package    facebook-answers
 * @subpackage form
 * @author     Jakub Dziwoki
 */
abstract class BaseUserEventForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'facebook_event_id' => new sfWidgetFormInputText(),
      'page_id'           => new sfWidgetFormPropelChoice(array('model' => 'Page', 'add_empty' => true)),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'facebook_event_id' => new sfValidatorInteger(array('min' => -9.2233720368548E+18, 'max' => 9223372036854775807, 'required' => false)),
      'page_id'           => new sfValidatorPropelChoice(array('model' => 'Page', 'column' => 'id', 'required' => false)),
      'updated_at'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserEvent';
  }


}
