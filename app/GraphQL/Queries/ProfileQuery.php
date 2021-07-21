<?php
namespace App\GraphQL\Queries;

use Closure;
use App\Models\Profile;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class ProfileQuery extends Query
{
    protected $attributes = [
        'name' => 'Profile',
        'description' => 'A query of Profile'
    ];
    
    public function type(): Type
    {
        // kết quả của query với paginate của laravel
        return Type::listOf(GraphQL::type('Profile'));
    }
    
    // arguments to filter query
    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'first_name' => [
                'name' => 'first_name',
                'type' => Type::string()
            ],
            'last_name' => [
                'name' => 'last_name',
                'type' => Type::string()
            ],
            'address' => [
                'name' => 'address',
                'type' => Type::string()
            ],
            'user_id' => [
                'name' => 'user_id',
                'type' => Type::int()
            ]
        ];
    }
    
    public function resolve($root, $args)
    {
        $profile = new Profile();
        if (isset($args['id'])) {
            $profile = $profile->where('id', $args['id']);
        }

        if (isset($args['first_name'])) {
            $profile = $profile->where('first_name', 'like', "%{$args['first_name']}%");
        }
        
        return $profile->get();
    }
}