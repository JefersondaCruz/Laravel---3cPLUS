<?php
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function getAll(string $filter = null): array
    {

    }
    public function findOne(string $id): stdClasse|null
    {

    }
    public function delete(string $id): void
    {

    }
    public function new(CreateSupportDTO $dto): stdClass
    {

    }
    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        
    }
}
