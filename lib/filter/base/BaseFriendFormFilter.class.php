<?php

/**
 * Friend filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BaseFriendFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'            => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'friend_id'          => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'facebook_friend_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'friend_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'facebook_friend_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('friend_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Friend';
  }

  public function getFields()
  {
    return array(
      'user_id'            => 'ForeignKey',
      'friend_id'          => 'ForeignKey',
      'facebook_friend_id' => 'Number',
      'id'                 => 'Number',
    );
  }
}
