<?php


class Task {
    public function __construct(private string $title, private string $description, private DateTime $createdAt, private bool $isDpne)
    {
        
    }
}

