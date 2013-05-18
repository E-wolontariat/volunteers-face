<?php

/**
 * Answer filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BaseAnswerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'round_id'   => new sfWidgetFormPropelChoice(array('model' => 'Round', 'add_empty' => true)),
      'content'    => new sfWidgetFormFilterInput(),
      'is_winner'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'round_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Round', 'column' => 'id')),
      'content'    => new sfValidatorPass(array('required' => false)),
      'is_winner'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'user_id'    => 'ForeignKey',
      'round_id'   => 'ForeignKey',
      'content'    => 'Text',
      'is_winner'  => 'Boolean',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
