<?php

namespace App\GraphQL\Types;

use App\Models\User;
use App\Models\Profile;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProfileType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Profile',
        'description' => 'A Profile',
        'model' => Profile::class,
    ];
    
    // Định nghĩa field của type
    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'first_name' => [
                'type' => Type::string(),
            ],
            'last_name' => [
                'type' => Type::string(),
            ],
            'address' => [
                'type' => Type::string(),
            ],
            'user' => [
                'type' => GraphQL::type('Users'),
            ],
        ];
    }
    
    protected function resolveEmailField($root, $args)
    {
        return strtolower($root->email);
    }

    protected function resolveProfileField($root, $args)
    {
        return $root->user;
    }
}
