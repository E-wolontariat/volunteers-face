<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sat May 18 19:43:42 2013
 *
 * @method UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserQuery orderByFacebookId($order = Criteria::ASC) Order by the facebook_id column
 * @method UserQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method UserQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method UserQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method UserQuery orderByBirthsday($order = Criteria::ASC) Order by the birthsday column
 * @method UserQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method UserQuery orderByLastIp($order = Criteria::ASC) Order by the last_ip column
 * @method UserQuery orderByIsSecured($order = Criteria::ASC) Order by the is_secured column
 * @method UserQuery orderByLongToken($order = Criteria::ASC) Order by the long_token column
 * @method UserQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method UserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method UserQuery groupById() Group by the id column
 * @method UserQuery groupByFacebookId() Group by the facebook_id column
 * @method UserQuery groupByFirstName() Group by the first_name column
 * @method UserQuery groupByLastName() Group by the last_name column
 * @method UserQuery groupByGender() Group by the gender column
 * @method UserQuery groupByEmail() Group by the email column
 * @method UserQuery groupByBirthsday() Group by the birthsday column
 * @method UserQuery groupByPhone() Group by the phone column
 * @method UserQuery groupByLastIp() Group by the last_ip column
 * @method UserQuery groupByIsSecured() Group by the is_secured column
 * @method UserQuery groupByLongToken() Group by the long_token column
 * @method UserQuery groupByUpdatedAt() Group by the updated_at column
 * @method UserQuery groupByCreatedAt() Group by the created_at column
 *
 * @method UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserQuery leftJoinFriendRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the FriendRelatedByUserId relation
 * @method UserQuery rightJoinFriendRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FriendRelatedByUserId relation
 * @method UserQuery innerJoinFriendRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the FriendRelatedByUserId relation
 *
 * @method UserQuery leftJoinFriendRelatedByFriendId($relationAlias = null) Adds a LEFT JOIN clause to the query using the FriendRelatedByFriendId relation
 * @method UserQuery rightJoinFriendRelatedByFriendId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FriendRelatedByFriendId relation
 * @method UserQuery innerJoinFriendRelatedByFriendId($relationAlias = null) Adds a INNER JOIN clause to the query using the FriendRelatedByFriendId relation
 *
 * @method UserQuery leftJoinPage($relationAlias = null) Adds a LEFT JOIN clause to the query using the Page relation
 * @method UserQuery rightJoinPage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Page relation
 * @method UserQuery innerJoinPage($relationAlias = null) Adds a INNER JOIN clause to the query using the Page relation
 *
 * @method User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method User findOneById(int $id) Return the first User filtered by the id column
 * @method User findOneByFacebookId(string $facebook_id) Return the first User filtered by the facebook_id column
 * @method User findOneByFirstName(string $first_name) Return the first User filtered by the first_name column
 * @method User findOneByLastName(string $last_name) Return the first User filtered by the last_name column
 * @method User findOneByGender(boolean $gender) Return the first User filtered by the gender column
 * @method User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method User findOneByBirthsday(string $birthsday) Return the first User filtered by the birthsday column
 * @method User findOneByPhone(string $phone) Return the first User filtered by the phone column
 * @method User findOneByLastIp(string $last_ip) Return the first User filtered by the last_ip column
 * @method User findOneByIsSecured(boolean $is_secured) Return the first User filtered by the is_secured column
 * @method User findOneByLongToken(string $long_token) Return the first User filtered by the long_token column
 * @method User findOneByUpdatedAt(string $updated_at) Return the first User filtered by the updated_at column
 * @method User findOneByCreatedAt(string $created_at) Return the first User filtered by the created_at column
 *
 * @method array findById(int $id) Return User objects filtered by the id column
 * @method array findByFacebookId(string $facebook_id) Return User objects filtered by the facebook_id column
 * @method array findByFirstName(string $first_name) Return User objects filtered by the first_name column
 * @method array findByLastName(string $last_name) Return User objects filtered by the last_name column
 * @method array findByGender(boolean $gender) Return User objects filtered by the gender column
 * @method array findByEmail(string $email) Return User objects filtered by the email column
 * @method array findByBirthsday(string $birthsday) Return User objects filtered by the birthsday column
 * @method array findByPhone(string $phone) Return User objects filtered by the phone column
 * @method array findByLastIp(string $last_ip) Return User objects filtered by the last_ip column
 * @method array findByIsSecured(boolean $is_secured) Return User objects filtered by the is_secured column
 * @method array findByLongToken(string $long_token) Return User objects filtered by the long_token column
 * @method array findByUpdatedAt(string $updated_at) Return User objects filtered by the updated_at column
 * @method array findByCreatedAt(string $created_at) Return User objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'User', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserQuery) {
            return $criteria;
        }
        $query = new UserQuery();
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
     * @return   User|User[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   User A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `FACEBOOK_ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER`, `EMAIL`, `BIRTHSDAY`, `PHONE`, `LAST_IP`, `IS_SECURED`, `LONG_TOKEN`, `UPDATED_AT`, `CREATED_AT` FROM `user` WHERE `ID` = :p0';
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
            $obj = new User();
            $obj->hydrate($row);
            UserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return User|User[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|User[]|mixed the list of results, formatted by the current formatter
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the facebook_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFacebookId(1234); // WHERE facebook_id = 1234
     * $query->filterByFacebookId(array(12, 34)); // WHERE facebook_id IN (12, 34)
     * $query->filterByFacebookId(array('min' => 12)); // WHERE facebook_id > 12
     * </code>
     *
     * @param     mixed $facebookId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByFacebookId($facebookId = null, $comparison = null)
    {
        if (is_array($facebookId)) {
            $useMinMax = false;
            if (isset($facebookId['min'])) {
                $this->addUsingAlias(UserPeer::FACEBOOK_ID, $facebookId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($facebookId['max'])) {
                $this->addUsingAlias(UserPeer::FACEBOOK_ID, $facebookId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::FACEBOOK_ID, $facebookId, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstName)) {
                $firstName = str_replace('*', '%', $firstName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastName)) {
                $lastName = str_replace('*', '%', $lastName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the gender column
     *
     * Example usage:
     * <code>
     * $query->filterByGender(true); // WHERE gender = true
     * $query->filterByGender('yes'); // WHERE gender = true
     * </code>
     *
     * @param     boolean|string $gender The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByGender($gender = null, $comparison = null)
    {
        if (is_string($gender)) {
            $gender = in_array(strtolower($gender), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UserPeer::GENDER, $gender, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the birthsday column
     *
     * Example usage:
     * <code>
     * $query->filterByBirthsday('fooValue');   // WHERE birthsday = 'fooValue'
     * $query->filterByBirthsday('%fooValue%'); // WHERE birthsday LIKE '%fooValue%'
     * </code>
     *
     * @param     string $birthsday The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByBirthsday($birthsday = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($birthsday)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $birthsday)) {
                $birthsday = str_replace('*', '%', $birthsday);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::BIRTHSDAY, $birthsday, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phone)) {
                $phone = str_replace('*', '%', $phone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the last_ip column
     *
     * Example usage:
     * <code>
     * $query->filterByLastIp('fooValue');   // WHERE last_ip = 'fooValue'
     * $query->filterByLastIp('%fooValue%'); // WHERE last_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByLastIp($lastIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastIp)) {
                $lastIp = str_replace('*', '%', $lastIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::LAST_IP, $lastIp, $comparison);
    }

    /**
     * Filter the query on the is_secured column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSecured(true); // WHERE is_secured = true
     * $query->filterByIsSecured('yes'); // WHERE is_secured = true
     * </code>
     *
     * @param     boolean|string $isSecured The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByIsSecured($isSecured = null, $comparison = null)
    {
        if (is_string($isSecured)) {
            $is_secured = in_array(strtolower($isSecured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UserPeer::IS_SECURED, $isSecured, $comparison);
    }

    /**
     * Filter the query on the long_token column
     *
     * Example usage:
     * <code>
     * $query->filterByLongToken('fooValue');   // WHERE long_token = 'fooValue'
     * $query->filterByLongToken('%fooValue%'); // WHERE long_token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $longToken The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByLongToken($longToken = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($longToken)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $longToken)) {
                $longToken = str_replace('*', '%', $longToken);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::LONG_TOKEN, $longToken, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Friend object
     *
     * @param   Friend|PropelObjectCollection $friend  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFriendRelatedByUserId($friend, $comparison = null)
    {
        if ($friend instanceof Friend) {
            return $this
                ->addUsingAlias(UserPeer::ID, $friend->getUserId(), $comparison);
        } elseif ($friend instanceof PropelObjectCollection) {
            return $this
                ->useFriendRelatedByUserIdQuery()
                ->filterByPrimaryKeys($friend->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFriendRelatedByUserId() only accepts arguments of type Friend or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FriendRelatedByUserId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinFriendRelatedByUserId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FriendRelatedByUserId');

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
            $this->addJoinObject($join, 'FriendRelatedByUserId');
        }

        return $this;
    }

    /**
     * Use the FriendRelatedByUserId relation Friend object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FriendQuery A secondary query class using the current class as primary query
     */
    public function useFriendRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFriendRelatedByUserId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FriendRelatedByUserId', 'FriendQuery');
    }

    /**
     * Filter the query by a related Friend object
     *
     * @param   Friend|PropelObjectCollection $friend  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFriendRelatedByFriendId($friend, $comparison = null)
    {
        if ($friend instanceof Friend) {
            return $this
                ->addUsingAlias(UserPeer::ID, $friend->getFriendId(), $comparison);
        } elseif ($friend instanceof PropelObjectCollection) {
            return $this
                ->useFriendRelatedByFriendIdQuery()
                ->filterByPrimaryKeys($friend->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFriendRelatedByFriendId() only accepts arguments of type Friend or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FriendRelatedByFriendId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinFriendRelatedByFriendId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FriendRelatedByFriendId');

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
            $this->addJoinObject($join, 'FriendRelatedByFriendId');
        }

        return $this;
    }

    /**
     * Use the FriendRelatedByFriendId relation Friend object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FriendQuery A secondary query class using the current class as primary query
     */
    public function useFriendRelatedByFriendIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFriendRelatedByFriendId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FriendRelatedByFriendId', 'FriendQuery');
    }

    /**
     * Filter the query by a related Page object
     *
     * @param   Page|PropelObjectCollection $page  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPage($page, $comparison = null)
    {
        if ($page instanceof Page) {
            return $this
                ->addUsingAlias(UserPeer::ID, $page->getUserId(), $comparison);
        } elseif ($page instanceof PropelObjectCollection) {
            return $this
                ->usePageQuery()
                ->filterByPrimaryKeys($page->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPage() only accepts arguments of type Page or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Page relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinPage($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Page');

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
            $this->addJoinObject($join, 'Page');
        }

        return $this;
    }

    /**
     * Use the Page relation Page object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PageQuery A secondary query class using the current class as primary query
     */
    public function usePageQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Page', 'PageQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   User $user Object to remove from the list of results
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function prune($user = null)
    {
        if ($user) {
            $this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
