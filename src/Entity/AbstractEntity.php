<?php

namespace App\Entity;

use Doctrine\Common\Util\ClassUtils;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * @ORM\MappedSuperclass
 */
abstract class AbstractEntity
{

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned"=true})
     */
    protected $id;

    /**
     * @var Uuid
     *
     * @ORM\Column(type="uuid_binary", nullable=false, unique=true)
     */
    protected $uniqueId;

    /**
     * @var bool
     */
    protected $isChanged;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by_id", referencedColumnName="id")
     * })
     */
    protected $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="created_at", nullable=true)
     */
    protected $createdAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modified_by_id", referencedColumnName="id")
     * })
     */
    protected $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="modified_at", nullable=true)
     */
    protected $modifiedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deleted_by_id", referencedColumnName="id")
     * })
     */
    protected $deletedBy;

    /**
     * @var User This user will be set either as creating or updating user by the life cycle events. See onInsert() and onUpdate().
     */
    protected $editingUser;

    /**
     * @var string Fully qualified name of the class for responses.
     */
    protected $fqn;

    /**
     * @param User $editingUser
     * @return AbstractEntity
     */
    public function setEditingUser(User $editingUser): AbstractEntity
    {
        $this->editingUser = $editingUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AbstractEntity
     */
    public function setId(int $id): AbstractEntity
    {
        $this->id = $id;

        return $this;
    }

    /**
     * UUID v4.
     * @return string
     */
    public function getUniqueId(): string
    {
        if ($this->uniqueId instanceof Uuid) {
            $result = (string)$this->uniqueId->toString();
        } else {
            $result = (string)$this->uniqueId;
        }
        return $result;
    }

    /**
     * UUID v4.
     * @param string $uniqueId
     * @return AbstractEntity
     */
    public function setUniqueId(string $uniqueId): AbstractEntity
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param User $createdBy
     * @return AbstractEntity
     */
    public function setCreatedBy(User $createdBy): AbstractEntity
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return AbstractEntity
     */
    public function setCreatedAt(?\DateTime $createdAt): AbstractEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return User
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param User|null $modifiedBy
     * @return AbstractEntity
     */
    public function setModifiedBy($modifiedBy): AbstractEntity
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     * @return AbstractEntity
     */
    public function setModifiedAt(?\DateTime $modifiedAt): AbstractEntity
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return User
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * @param User $deletedBy
     * @return AbstractEntity
     */
    public function setDeletedBy(?User $deletedBy): AbstractEntity
    {
        $this->deletedBy = $deletedBy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isChanged(): bool
    {
        return (bool)$this->isChanged;
    }

    /**
     * @param bool $isChanged
     * @return AbstractEntity
     */
    public function setIsChanged(?bool $isChanged): AbstractEntity
    {
        $this->isChanged = (bool)$isChanged;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullyQualifiedName(): string
    {
        $this->fqn = ClassUtils::getClass($this);
        return $this->fqn;
    }

    /**
     * Returns the datamodel specific name of the entity.
     * @return string
     */
    public function getDatamodelName(): string
    {
        $className = ClassUtils::getRealClass(get_class($this));

        return str_replace('\\Entity\\', '.', $className);
    }

    /**
     * return entity cache name by replacing `\` with `.`
     *
     * @return string
     */
    public function getCacheName()
    {
        $className = ClassUtils::getRealClass(get_class($this));

        return strtolower(str_replace('\\','.', $className));
    }

    public function getCacheKey(): string
    {
        return "{$this->getCacheName()}.{$this->getId()}";
    }

    /**
     * @throws \Exception
     */
    public function __clone()
    {
        $this->id = null;
        $this->uniqueId = Uuid::uuid4()->toString();
        $this->setCreatedAt(new \DateTime());
    }
}
