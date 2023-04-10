<?php

namespace App;


class Users
{
    protected array $users = [
        ['id' => 1, 'firstName' => 'John', 'lastName' => 'Doe', 'email' => 'john.doe@example.com'],
        ['id' => 2, 'firstName' => 'Jane', 'lastName' => 'Doe', 'email' => 'jane.doe@example.com'],
        ['id' => 3, 'firstName' => 'Alice', 'lastName' => 'Smith', 'email' => 'alice.smith@example.com'],
        ['id' => 4, 'firstName' => 'Bob', 'lastName' => 'Johnson', 'email' => 'bob.johnson@example.com'],
        ['id' => 5, 'firstName' => 'Charlie', 'lastName' => 'Brown', 'email' => 'charlie.brown@example.com'],
        ['id' => 6, 'firstName' => 'Diana', 'lastName' => 'Ross', 'email' => 'diana.ross@example.com'],
        ['id' => 7, 'firstName' => 'Eddie', 'lastName' => 'Murphy', 'email' => 'eddie.murphy@example.com'],
        ['id' => 8, 'firstName' => 'Fiona', 'lastName' => 'Apple', 'email' => 'fiona.apple@example.com'],
        ['id' => 9, 'firstName' => 'George', 'lastName' => 'Washington', 'email' => 'george.washington@example.com'],
        ['id' => 10, 'firstName' => 'Hannah', 'lastName' => 'Montana', 'email' => 'hannah.montana@example.com'],
        ['id' => 11, 'firstName' => 'Ian', 'lastName' => 'McKellen', 'email' => 'ian.mckellen@example.com'],
        ['id' => 12, 'firstName' => 'Julia', 'lastName' => 'Roberts', 'email' => 'julia.roberts@example.com'],
        ['id' => 13, 'firstName' => 'Kevin', 'lastName' => 'Spacey', 'email' => 'kevin.spacey@example.com'],
        ['id' => 14, 'firstName' => 'Laura', 'lastName' => 'Palmer', 'email' => 'laura.palmer@example.com'],
        ['id' => 15, 'firstName' => 'Mike', 'lastName' => 'Tyson', 'email' => 'mike.tyson@example.com'],
    ];

    public function getUsers()
    {
        return $this->users;
    }
}