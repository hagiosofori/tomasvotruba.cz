<?php

declare(strict_types=1);

namespace TomasVotruba\Website\Twig;

use Symplify\Statie\Contract\Templating\FilterProviderInterface;

final class TalksCountFilterProvider implements FilterProviderInterface
{
    /**
     * @return callable[]
     */
    public function provide(): array
    {
        return [
            /** @var mixed $talksByTopic */
            'talks_count' => function (array $talksByTopic): int {
                $count = 0;
                foreach ($talksByTopic as $talks) {
                    $count += count($talks['events']);
                }

                return $count;
            },
        ];
    }
}
