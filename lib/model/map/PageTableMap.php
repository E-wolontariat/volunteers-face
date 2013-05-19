<?php



/**
 * This class defines the structure of the 'page' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun May 19 13:55:19 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class PageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PageTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('page');
        $this->setPhpName('Page');
        $this->setClassname('Page');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('FACEBOOK_ID', 'FacebookId', 'BIGINT', false, null, null);
        $this->addForeignKey('FOUNDATION_ID', 'FoundationId', 'INTEGER', 'foundation', 'ID', false, null, null);
        $this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', false, null, null);
        $this->addColumn('ACCESS_TOKEN', 'AccessToken', 'VARCHAR', false, 255, null);
        $this->addColumn('LAST_SYNC', 'LastSync', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Foundation', 'Foundation', RelationMap::MANY_TO_ONE, array('foundation_id' => 'id', ), null, null);
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
            'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
        );
    } // getBehaviors()

} // PageTableMap
