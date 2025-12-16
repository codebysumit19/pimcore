<?php

namespace Pimcore\Model\DataObject\Dealer;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Dealer|false current()
 * @method DataObject\Dealer[] load()
 * @method DataObject\Dealer[] getData()
 * @method DataObject\Dealer[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "dealer";
protected $className = "Dealer";


/**
* Filter by dealerid (Dealer ID)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDealerid ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("dealerid")->addListingFilter($this, $data, $operator);
	return $this;
}

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
