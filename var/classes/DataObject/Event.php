<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - eventType [select]
 * - eventTime [datetime]
 * - channel [select]
 * - productOrCategory [input]
 * - customerOrProspects [manyToOneRelation]
 * - dealer [manyToOneRelation]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Event\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByEventType(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByEventTime(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByChannel(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByProductOrCategory(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByCustomerOrProspects(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByDealer(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Event extends Concrete
{
public const FIELD_EVENT_TYPE = 'eventType';
public const FIELD_EVENT_TIME = 'eventTime';
public const FIELD_CHANNEL = 'channel';
public const FIELD_PRODUCT_OR_CATEGORY = 'productOrCategory';
public const FIELD_CUSTOMER_OR_PROSPECTS = 'customerOrProspects';
public const FIELD_DEALER = 'dealer';

protected $classId = "event";
protected $className = "Event";
protected $eventType;
protected $eventTime;
protected $channel;
protected $productOrCategory;
protected $customerOrProspects;
protected $dealer;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get eventType - Event Type
* @return string|null
*/
public function getEventType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("eventType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->eventType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set eventType - Event Type
* @param string|null $eventType
* @return $this
*/
public function setEventType(?string $eventType): static
{
	$this->markFieldDirty("eventType", true);

	$this->eventType = $eventType;

	return $this;
}

/**
* Get eventTime - Event Time
* @return \Carbon\Carbon|null
*/
public function getEventTime(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("eventTime");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->eventTime;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set eventTime - Event Time
* @param \Carbon\Carbon|null $eventTime
* @return $this
*/
public function setEventTime(?\Carbon\Carbon $eventTime): static
{
	$this->markFieldDirty("eventTime", true);

	$this->eventTime = $eventTime;

	return $this;
}

/**
* Get channel - Channel
* @return string|null
*/
public function getChannel(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("channel");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->channel;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set channel - Channel
* @param string|null $channel
* @return $this
*/
public function setChannel(?string $channel): static
{
	$this->markFieldDirty("channel", true);

	$this->channel = $channel;

	return $this;
}

/**
* Get productOrCategory - Product Or Category
* @return string|null
*/
public function getProductOrCategory(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productOrCategory");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productOrCategory;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productOrCategory - Product Or Category
* @param string|null $productOrCategory
* @return $this
*/
public function setProductOrCategory(?string $productOrCategory): static
{
	$this->markFieldDirty("productOrCategory", true);

	$this->productOrCategory = $productOrCategory;

	return $this;
}

/**
* Get customerOrProspects - Customer Or Prospects
* @return \Pimcore\Model\DataObject\Customer|\Pimcore\Model\DataObject\Prospects|null
*/
public function getCustomerOrProspects(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("customerOrProspects");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("customerOrProspects")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set customerOrProspects - Customer Or Prospects
* @param \Pimcore\Model\DataObject\Customer|\Pimcore\Model\DataObject\Prospects|null $customerOrProspects
* @return $this
*/
public function setCustomerOrProspects(?\Pimcore\Model\Element\AbstractElement $customerOrProspects): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("customerOrProspects");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCustomerOrProspects();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $customerOrProspects);
	if (!$isEqual) {
		$this->markFieldDirty("customerOrProspects", true);
	}
	$this->customerOrProspects = $fd->preSetData($this, $customerOrProspects);
	return $this;
}

/**
* Get dealer - Dealer
* @return \Pimcore\Model\DataObject\Dealer|null
*/
public function getDealer(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("dealer");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("dealer")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set dealer - Dealer
* @param \Pimcore\Model\DataObject\Dealer|null $dealer
* @return $this
*/
public function setDealer(?\Pimcore\Model\Element\AbstractElement $dealer): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("dealer");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getDealer();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $dealer);
	if (!$isEqual) {
		$this->markFieldDirty("dealer", true);
	}
	$this->dealer = $fd->preSetData($this, $dealer);
	return $this;
}

}

