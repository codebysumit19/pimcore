<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - email [input]
 * - phone [input]
 * - engagementSource [input]
 * - segments [multiselect]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Prospects\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Prospects\Listing|\Pimcore\Model\DataObject\Prospects|null getByName(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Prospects\Listing|\Pimcore\Model\DataObject\Prospects|null getByEmail(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Prospects\Listing|\Pimcore\Model\DataObject\Prospects|null getByPhone(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Prospects\Listing|\Pimcore\Model\DataObject\Prospects|null getByEngagementSource(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Prospects\Listing|\Pimcore\Model\DataObject\Prospects|null getBySegments(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Prospects extends Concrete
{
public const FIELD_NAME = 'name';
public const FIELD_EMAIL = 'email';
public const FIELD_PHONE = 'phone';
public const FIELD_ENGAGEMENT_SOURCE = 'engagementSource';
public const FIELD_SEGMENTS = 'segments';

protected $classId = "prospects";
protected $className = "Prospects";
protected $name;
protected $email;
protected $phone;
protected $engagementSource;
protected $segments;


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
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return $this
*/
public function setName(?string $name): static
{
	$this->markFieldDirty("name", true);

	$this->name = $name;

	return $this;
}

/**
* Get email - Email
* @return string|null
*/
public function getEmail(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("email");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->email;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set email - Email
* @param string|null $email
* @return $this
*/
public function setEmail(?string $email): static
{
	$this->markFieldDirty("email", true);

	$this->email = $email;

	return $this;
}

/**
* Get phone - Phone
* @return string|null
*/
public function getPhone(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("phone");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->phone;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set phone - Phone
* @param string|null $phone
* @return $this
*/
public function setPhone(?string $phone): static
{
	$this->markFieldDirty("phone", true);

	$this->phone = $phone;

	return $this;
}

/**
* Get engagementSource - Engagement Source
* @return string|null
*/
public function getEngagementSource(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("engagementSource");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->engagementSource;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set engagementSource - Engagement Source
* @param string|null $engagementSource
* @return $this
*/
public function setEngagementSource(?string $engagementSource): static
{
	$this->markFieldDirty("engagementSource", true);

	$this->engagementSource = $engagementSource;

	return $this;
}

/**
* Get segments - Segments
* @return string[]|null
*/
public function getSegments(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("segments");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->segments;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set segments - Segments
* @param string[]|null $segments
* @return $this
*/
public function setSegments(?array $segments): static
{
	$this->markFieldDirty("segments", true);

	$this->segments = $segments;

	return $this;
}

}

