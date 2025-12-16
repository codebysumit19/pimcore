<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - dealerid [input]
 * - name [input]
 * - region [input]
 * - territory [input]
 * - segments [multiselect]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Dealer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Dealer\Listing|\Pimcore\Model\DataObject\Dealer|null getByDealerid(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Dealer\Listing|\Pimcore\Model\DataObject\Dealer|null getByName(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Dealer\Listing|\Pimcore\Model\DataObject\Dealer|null getByRegion(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Dealer\Listing|\Pimcore\Model\DataObject\Dealer|null getByTerritory(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Dealer\Listing|\Pimcore\Model\DataObject\Dealer|null getBySegments(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Dealer extends Concrete
{
public const FIELD_DEALERID = 'dealerid';
public const FIELD_NAME = 'name';
public const FIELD_REGION = 'region';
public const FIELD_TERRITORY = 'territory';
public const FIELD_SEGMENTS = 'segments';

protected $classId = "dealer";
protected $className = "Dealer";
protected $dealerid;
protected $name;
protected $region;
protected $territory;
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
* Get dealerid - Dealer ID
* @return string|null
*/
public function getDealerid(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("dealerid");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->dealerid;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set dealerid - Dealer ID
* @param string|null $dealerid
* @return $this
*/
public function setDealerid(?string $dealerid): static
{
	$this->markFieldDirty("dealerid", true);

	$this->dealerid = $dealerid;

	return $this;
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

