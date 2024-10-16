<?php

namespace App\Models;

use Illuminate\Support\Arr;

class job
{
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '₹1,00,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '₹50,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '₹40,000'
            ]
        ];
    }

    public static function find(int $id): array {
        $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
        if(!$job) {
            abort(404);
        }
        return $job;
    }
}