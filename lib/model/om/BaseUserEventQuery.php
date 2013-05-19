<?php


/**
 * Base class that represents a query for the 'user_event' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun May 19 13:05:12 2013
 *
 * @method UserEventQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserEventQuery orderByFoundationId($order = Criteria::ASC) Order by the foundation_id column
 * @method UserEventQuery orderByFacebookEventId($order = Criteria::ASC) Order by the facebook_event_id column
 * @method UserEventQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method UserEventQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method UserEventQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method UserEventQuery groupById() Group by the id column
 * @method UserEventQuery groupByFoundationId() Group by the foundation_id column
 * @method UserEventQuery groupByFacebookEventId() Group by the facebook_event_id column
 * @method UserEventQuery groupByUserId() Group by the user_id column
 * @method UserEventQuery groupByUpdatedAt() Group by the updated_at column
 * @method UserEventQuery groupByCreatedAt() Group by the created_at column
 *
 * @method UserEventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserEventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserEventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserEventQuery leftJoinFoundation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Foundation relation
 * @method UserEventQuery rightJoinFoundation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Foundation relation
 * @method UserEventQuery innerJoinFoundation($relationAlias = null) Adds a INNER JOIN clause to the query using the Foundation relation
 *
 * @method UserEventQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method UserEventQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method UserEventQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method UserEvent findOne(PropelPDO $con = null) Return the first UserEvent matching the query
 * @method UserEvent findOneOrCreate(PropelPDO $con = null) Return the first UserEvent matching the query, or a new UserEvent object populated from the query conditions when no match is found
 *
 * @method UserEvent findOneById(int $id) Return the first UserEvent filtered by the id column
 * @method UserEvent findOneByFoundationId(int $foundation_id) Return the first UserEvent filtered by the foundation_id column
 * @method UserEvent findOneByFacebookEventId(string $facebook_event_id) Return the first UserEvent filtered by the facebook_event_id column
 * @method UserEvent findOneByUserId(int $user_id) Return the first UserEvent filtered by the user_id column
 * @method UserEvent findOneByUpdatedAt(string $updated_at) Return the first UserEvent filtered by the updated_at column
 * @method UserEvent findOneByCreatedAt(string $created_at) Return the first UserEvent filtered by the created_at column
 *
 * @method array findById(int $id) Return UserEvent objects filtered by the id column
 * @method array findByFoundationId(int $foundation_id) Return UserEvent objects filtered by the foundation_id column
 * @method array findByFacebookEventId(string $facebook_event_id) Return UserEvent objects filtered by the facebook_event_id column
 * @method array findByUserId(int $user_id) Return UserEvent objects filtered by the user_id column
 * @method array findByUpdatedAt(string $updated_at) Return UserEvent objects filtered by the updated_at column
 * @method array findByCreatedAt(string $created_at) Return UserEvent objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUserEventQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserEventQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'UserEvent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserEventQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UserEventQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserEventQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserEventQuery) {
            return $criteria;
        }
        $query = new UserEventQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   UserEvent|UserEvent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserEventPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserEventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   UserEvent A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `FOUNDATION_ID`, `FACEBOOK_EVENT_ID`, `USER_ID`, `UPDATED_AT`, `CREATED_AT` FROM `user_event` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new UserEvent();
            $obj->hydrate($row);
            UserEventPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return UserEvent|UserEvent[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|UserEvent[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserEventPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserEventPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UserEventPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the foundation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFoundationId(1234); // WHERE foundation_id = 1234
     * $query->filterByFoundationId(array(12, 34)); // WHERE foundation_id IN (12, 34)
     * $query->filterByFoundationId(array('min' => 12)); // WHERE foundation_id > 12
     * </code>
     *
     * @see       filterByFoundation()
     *
     * @param     mixed $foundationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByFoundationId($foundationId = null, $comparison = null)
    {
        if (is_array($foundationId)) {
            $useMinMax = false;
            if (isset($foundationId['min'])) {
                $this->addUsingAlias(UserEventPeer::FOUNDATION_ID, $foundationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foundationId['max'])) {
                $this->addUsingAlias(UserEventPeer::FOUNDATION_ID, $foundationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserEventPeer::FOUNDATION_ID, $foundationId, $comparison);
    }

    /**
     * Filter the query on the facebook_event_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFacebookEventId(1234); // WHERE facebook_event_id = 1234
     * $query->filterByFacebookEventId(array(12, 34)); // WHERE facebook_event_id IN (12, 34)
     * $query->filterByFacebookEventId(array('min' => 12)); // WHERE facebook_event_id > 12
     * </code>
     *
     * @param     mixed $facebookEventId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByFacebookEventId($facebookEventId = null, $comparison = null)
    {
        if (is_array($facebookEventId)) {
            $useMinMax = false;
            if (isset($facebookEventId['min'])) {
                $this->addUsingAlias(UserEventPeer::FACEBOOK_EVENT_ID, $facebookEventId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($facebookEventId['max'])) {
                $this->addUsingAlias(UserEventPeer::FACEBOOK_EVENT_ID, $facebookEventId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserEventPeer::FACEBOOK_EVENT_ID, $facebookEventId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UserEventPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UserEventPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserEventPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(UserEventPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(UserEventPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserEventPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(UserEventPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(UserEventPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserEventPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Foundation object
     *
     * @param   Foundation|PropelObjectCollection $foundation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserEventQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFoundation($foundation, $comparison = null)
    {
        if ($foundation instanceof Foundation) {
            return $this
                ->addUsingAlias(UserEventPeer::FOUNDATION_ID, $foundation->getId(), $comparison);
        } elseif ($foundation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserEventPeer::FOUNDATION_ID, $foundation->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByFoundation() only accepts arguments of type Foundation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Foundation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function joinFoundation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Foundation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Foundation');
        }

        return $this;
    }

    /**
     * Use the Foundation relation Foundation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FoundationQuery A secondary query class using the current class as primary query
     */
    public function useFoundationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFoundation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Foundation', 'FoundationQuery');
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserEventQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(UserEventPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserEventPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   UserEvent $userEvent Object to remove from the list of results
     *
     * @return UserEventQuery The current query, for fluid interface
     */
    public function prune($userEvent = null)
    {
        if ($userEvent) {
            $this->addUsingAlias(UserEventPeer::ID, $userEvent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
