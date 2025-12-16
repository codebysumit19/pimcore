<?php

namespace Pimcore\Model\DataObject\Prospects;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Prospects|false current()
 * @method DataObject\Prospects[] load()
 * @method DataObject\Prospects[] getData()
 * @method DataObject\Prospects[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "prospects";
protected $className = "Prospects";


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
* Filter by engagementSource (Engagement Source)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByEngagementSource ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("engagementSource")->addListingFilter($this, $data, $operator);
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
