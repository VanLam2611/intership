<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Closure;
use App\Models\TypeProduct;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class DeleteMutation extends Mutation
{
    protected $attributes = [
        'name' => 'delete',
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
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $credentials = [
            'type_id' => $args['type_id'],
        ];
        if(isset($args['type_id'])){
            //Find protype with `type_id`
            $type = TypeProduct::find($credentials['type_id']);
            $type->delete();
            return ['message' => 'Delete successful!'];
        }
        //Report message fails
        return ['message' => 'Delete fails!'];
    }
}
