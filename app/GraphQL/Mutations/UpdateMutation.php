<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Closure;
use App\Models\TypeProduct;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class UpdateMutation extends Mutation
{
    protected $attributes = [
        'name' => 'update',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [
            'type_id' => ['name' => 'type_id', 'type' => Type::nonNull(Type::int())],
            'type_name' => ['name' => 'type_name', 'type' => Type::nonNull(Type::string())],
        ];
    }

    public function resolve($root, $args)
    {
        $credentials = [
            'type_id' => $args['type_id'],
            'type_name' => $args['type_name'],
        ];
        if(isset($args['type_name'])){
            $type = TypeProduct::find($credentials['type_id']);
            $type->type_name = $credentials['type_name'];
            $type->save();
            return ['message' => 'Update successful!'];
        }
        return ['message' => 'Update fails!'];
    }
}
