<?php

$root = [
    'value' => 4,
    'children' => [
        [
            'value' => 2,
            'children' => [
                ['value' => 1],
                ['value' => 3],
            ],
        ],
        [
            'value' => 6,
            'children' => [
                ['value' => 5],
                ['value' => 7],
            ],
        ],
    ],
];

// Helper function to visualize the visiting of a node.
function visit(array $item): int
{
    return $item['value'];
}


function preOrder(array $item)
{
    // First we visit the node itself.
    $output[] = visit($item);

    // Then apply the algorithm to every child from left -> right.
    foreach ($item['children'] ?? [] as $child) {
        $output[] = preOrder($child);
    }

    return implode(', ', $output);
}

echo preOrder($root);