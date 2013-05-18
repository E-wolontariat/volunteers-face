<?php

/**
 * FacebookId filter form base class.
 *
 * @package    facebook-answers
 * @subpackage filter
 * @author     Jakub Dziwoki
 */
abstract class BaseFacebookIdFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'type' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'type' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('facebook_id_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacebookId';
  }

  public function getFields()
  {
    return array(
      'type' => 'Number',
      'id'   => 'Number',
    );
  }
}
