<?php

/**
 * User filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BaseUserFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'facebook_id' => new sfWidgetFormFilterInput(),
      'first_name'  => new sfWidgetFormFilterInput(),
      'last_name'   => new sfWidgetFormFilterInput(),
      'gender'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'email'       => new sfWidgetFormFilterInput(),
      'birthsday'   => new sfWidgetFormFilterInput(),
      'phone'       => new sfWidgetFormFilterInput(),
      'last_ip'     => new sfWidgetFormFilterInput(),
      'is_secured'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'facebook_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'first_name'  => new sfValidatorPass(array('required' => false)),
      'last_name'   => new sfValidatorPass(array('required' => false)),
      'gender'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'email'       => new sfValidatorPass(array('required' => false)),
      'birthsday'   => new sfValidatorPass(array('required' => false)),
      'phone'       => new sfValidatorPass(array('required' => false)),
      'last_ip'     => new sfValidatorPass(array('required' => false)),
      'is_secured'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'facebook_id' => 'Number',
      'first_name'  => 'Text',
      'last_name'   => 'Text',
      'gender'      => 'Boolean',
      'email'       => 'Text',
      'birthsday'   => 'Text',
      'phone'       => 'Text',
      'last_ip'     => 'Text',
      'is_secured'  => 'Boolean',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
