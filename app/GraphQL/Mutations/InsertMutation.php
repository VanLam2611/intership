<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Closure;
use App\Models\TypeProduct;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class InsertMutation extends Mutation
{
    protected $attributes = [
        'name' => 'insert',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [
            'type_name' => ['name' => 'type_name', 'type' => Type::nonNull(Type::string())],
        ];
    }

    public function resolve($root, $args)
    {
        $credentials = [
            'type_name' => $args['type_name'],
        ];
        if(isset($args['type_name'])){
            $type = new TypeProduct;
            $type->type_name = $credentials['type_name'];
            $type->save();
            return ['message' => 'Insert successful!'];
        }
        return ['message' => 'Insert fails!'];
    }
}
