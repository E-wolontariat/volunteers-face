<?php



/**
 * This class defines the structure of the 'friend' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sat May 18 14:08:26 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class FriendTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.FriendTableMap';

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
        $this->setName('friend');
        $this->setPhpName('Friend');
        $this->setClassname('Friend');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', false, null, null);
        $this->addForeignKey('FRIEND_ID', 'FriendId', 'INTEGER', 'user', 'ID', false, null, null);
        $this->addColumn('FACEBOOK_FRIEND_ID', 'FacebookFriendId', 'BIGINT', false, null, null);
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserRelatedByUserId', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('UserRelatedByFriendId', 'User', RelationMap::MANY_TO_ONE, array('friend_id' => 'id', ), null, null);
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
        );
    } // getBehaviors()

} // FriendTableMap
