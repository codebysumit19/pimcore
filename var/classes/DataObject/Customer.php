<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - email [input]
 * - phone [input]
 * - dealer_id [input]
 * - region [input]
 * - territory [input]
 * - engagementsource [input]
 * - segments [multiselect]
 * - isMasterProfile [booleanSelect]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Customer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByName(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByEmail(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByPhone(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByDealer_id(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByRegion(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByTerritory(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByEngagementsource(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getBySegments(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Customer extends Concrete
{
public const FIELD_NAME = 'name';
public const FIELD_EMAIL = 'email';
public const FIELD_PHONE = 'phone';
public const FIELD_DEALER_ID = 'dealer_id';
public const FIELD_REGION = 'region';
public const FIELD_TERRITORY = 'territory';
public const FIELD_ENGAGEMENTSOURCE = 'engagementsource';
public const FIELD_SEGMENTS = 'segments';
public const FIELD_IS_MASTER_PROFILE = 'isMasterProfile';

protected $classId = "customer";
protected $className = "Customer";
protected $name;
protected $email;
protected $phone;
protected $dealer_id;
protected $region;
protected $territory;
protected $engagementsource;
protected $segments;
protected $isMasterProfile;


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
* Get dealer_id - Dealer_id
* @return string|null
*/
public function getDealer_id(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("dealer_id");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->dealer_id;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set dealer_id - Dealer_id
* @param string|null $dealer_id
* @return $this
*/
public function setDealer_id(?string $dealer_id): static
{
	$this->markFieldDirty("dealer_id", true);

	$this->dealer_id = $dealer_id;

	return $this;
}

/**
* Get region - Region
* @return string|null
*/
public function getRegion(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("region");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->region;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set region - Region
* @param string|null $region
* @return $this
*/
public function setRegion(?string $region): static
{
	$this->markFieldDirty("region", true);

	$this->region = $region;

	return $this;
}

/**
* Get territory - Territory
* @return string|null
*/
public function getTerritory(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("territory");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->territory;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set territory - Territory
* @param string|null $territory
* @return $this
*/
public function setTerritory(?string $territory): static
{
	$this->markFieldDirty("territory", true);

	$this->territory = $territory;

	return $this;
}

/**
* Get engagementsource - Engagement Source
* @return string|null
*/
public function getEngagementsource(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("engagementsource");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->engagementsource;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set engagementsource - Engagement Source
* @param string|null $engagementsource
* @return $this
*/
public function setEngagementsource(?string $engagementsource): static
{
	$this->markFieldDirty("engagementsource", true);

	$this->engagementsource = $engagementsource;

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

/**
* Get isMasterProfile - IsMasterProfile
* @return bool|null
*/
public function getIsMasterProfile(): ?bool
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("isMasterProfile");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->isMasterProfile;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set isMasterProfile - IsMasterProfile
* @param bool|null $isMasterProfile
* @return $this
*/
public function setIsMasterProfile(?bool $isMasterProfile): static
{
	$this->markFieldDirty("isMasterProfile", true);

	$this->isMasterProfile = $isMasterProfile;

	return $this;
}

}

