<?php

namespace Pimcore\Model\DataObject\Event;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Event|false current()
 * @method DataObject\Event[] load()
 * @method DataObject\Event[] getData()
 * @method DataObject\Event[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "event";
protected $className = "Event";


/**
* Filter by eventType (Event Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByEventType ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("eventType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by eventTime (Event Time)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByEventTime ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("eventTime")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by channel (Channel)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByChannel ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("channel")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by productOrCategory (Product Or Category)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByProductOrCategory ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("productOrCategory")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerOrProspects (Customer Or Prospects)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByCustomerOrProspects ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("customerOrProspects")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by dealer (Dealer)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDealer ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("dealer")->addListingFilter($this, $data, $operator);
	return $this;
}



}
