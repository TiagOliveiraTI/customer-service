<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\KafkaMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class KafkaHandler
{
    public function __invoke(KafkaMessage $message)
    {
        
    }
}
