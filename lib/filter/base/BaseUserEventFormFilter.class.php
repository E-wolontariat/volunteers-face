<?php

/**
 * UserEvent filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BaseUserEventFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'foundation_id'     => new sfWidgetFormPropelChoice(array('model' => 'Foundation', 'add_empty' => true)),
      'facebook_event_id' => new sfWidgetFormFilterInput(),
      'user_id'           => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'foundation_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Foundation', 'column' => 'id')),
      'facebook_event_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('user_event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserEvent';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'foundation_id'     => 'ForeignKey',
      'facebook_event_id' => 'Number',
      'user_id'           => 'ForeignKey',
      'updated_at'        => 'Date',
      'created_at'        => 'Date',
    );
  }
}
