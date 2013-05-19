<?php

/**
 * Page filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BasePageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'facebook_id'   => new sfWidgetFormFilterInput(),
      'foundation_id' => new sfWidgetFormPropelChoice(array('model' => 'Foundation', 'add_empty' => true)),
      'user_id'       => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'access_token'  => new sfWidgetFormFilterInput(),
      'last_sync'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'facebook_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foundation_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Foundation', 'column' => 'id')),
      'user_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'access_token'  => new sfValidatorPass(array('required' => false)),
      'last_sync'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('page_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Page';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'facebook_id'   => 'Number',
      'foundation_id' => 'ForeignKey',
      'user_id'       => 'ForeignKey',
      'access_token'  => 'Text',
      'last_sync'     => 'Date',
      'updated_at'    => 'Date',
      'created_at'    => 'Date',
    );
  }
}
