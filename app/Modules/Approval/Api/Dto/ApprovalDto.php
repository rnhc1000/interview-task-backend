<?php

declare(strict_types=1);

namespace App\Modules\Approval\Api\Dto;

use App\Domain\Enums\StatusEnum;
use Ramsey\Uuid\UuidInterface;

final readonly class ApprovalDto
{
    /** @param class-string $entity */
    public function __construct(
        public UuidInterface $id,
        public StatusEnum $status,
        public string $entity,
    ) {
    }
}
