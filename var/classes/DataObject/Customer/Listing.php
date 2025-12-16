<?php

namespace Pimcore\Model\DataObject\Customer;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Customer|false current()
 * @method DataObject\Customer[] load()
 * @method DataObject\Customer[] getData()
 * @method DataObject\Customer[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "customer";
protected $className = "Customer";


/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByName ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by email (Email)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByEmail ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("email")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by phone (Phone)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByPhone ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("phone")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by dealer_id (Dealer_id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDealer_id ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("dealer_id")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by region (Region)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByRegion ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("region")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by territory (Territory)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByTerritory ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("territory")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by engagementsource (Engagement Source)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByEngagementsource ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("engagementsource")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by segments (Segments)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterBySegments ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("segments")->addListingFilter($this, $data, $operator);
	return $this;
}



}
