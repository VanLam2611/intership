<?php

namespace App\GraphQL\Mutations;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;
use App\Models\User;

class RegisterMutation extends Mutation
{
    protected $attributes = [
        'name' => 'RegisterMutation',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [
            'name' => ['name' => 'name', 'type' => Type::nonNull(Type::string())],
            'email' => ['name' => 'email', 'type' => Type::nonNull(Type::string())],
            'password' => ['name' => 'password', 'type' => Type::nonNull(Type::string())],
        ];
    }

    public function resolve($root, $args)
    {
        $credentials = [
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => $args['password']
        ];
        if (isset($credentials['name']) && isset($credentials['email']) && isset($credentials['password'])) {
            $user = new User;
            $user->name = $credentials['name'];
            $user->email = $credentials['email'];
            $credentials['password'] = bcrypt($credentials['password']);
            $user->password = $credentials['password'];
            //Create new user
            $user->save();
            return [
                'success' => $user->createToken('myApi')->accessToken,
                'username' => $user->name,
            ];
        }
        return [
            'message' => 'Falis',
        ];
    }
}
