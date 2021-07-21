<?php
namespace App\GraphQL\Queries;

use Closure;
use App\Models\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'Users',
        'description' => 'A query of users'
    ];
    
    public function type(): Type
    {
        // kết quả của query với paginate của laravel
        return Type::listOf(GraphQL::type('Users'));
    }
    
    // arguments to filter query
    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::string()
            ]
        ];
    }
    
    public function resolve($root, $args)
    {
        $users = new User();
        if (isset($args['id'])) {
            $users = $users->where('id', $args['id']);
        }

        if (isset($args['email'])) {
            $users = $users->where('email', 'like', "%{$args['email']}%");
        }
        
        return $users->get();
    }
}