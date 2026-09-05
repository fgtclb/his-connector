<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncRecord
{
    /**
     * @param SyncFieldInterface[] $fields
     */
    public function __construct(
        public string $tableName,
        public int $storagePage,
        public SyncField $syncIdentifier,
        public ?SyncField $relation = null,
        public int|string|null $insertUpdateId = null,
        private array $fields = [],
    ) {}

    public function withInsertUpdateId(int|string $insertUpdateId): self
    {
        return new self(
            tableName: $this->tableName,
            storagePage: $this->storagePage,
            syncIdentifier: $this->syncIdentifier,
            relation: $this->relation,
            insertUpdateId: $insertUpdateId,
            fields: $this->fields,
        );
    }

    public function withFields(SyncFieldInterface ...$fields): self
    {
        return new self(
            tableName: $this->tableName,
            storagePage: $this->storagePage,
            syncIdentifier: $this->syncIdentifier,
            relation: $this->relation,
            insertUpdateId: $this->insertUpdateId,
            fields: $fields,
        );
    }

    /**
     * @return SyncFieldInterface[]
     */
    public function getIdentifyingFields(): array
    {
        $fields = [];
        $fields[] = new SyncField('pid', $this->storagePage);
        $fields[] = $this->syncIdentifier;
        if ($this->relation instanceof SyncField) {
            $fields[] = $this->relation;
        }
        return $fields;
    }

    /**
     * @return SyncFieldInterface[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }
}
