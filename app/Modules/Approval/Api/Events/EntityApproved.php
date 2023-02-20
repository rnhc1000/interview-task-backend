<?php

declare(strict_types=1);

namespace App\Modules\Approval\Api\Events;

use App\Modules\Approval\Api\Dto\ApprovalDto;

final readonly class EntityApproved
{
    public function __construct(
        public ApprovalDto $approvalDto
    ) {
    }
}
