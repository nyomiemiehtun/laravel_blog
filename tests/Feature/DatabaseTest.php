<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_post_model()
    {
        Post::factory()->count(3)->create();

        $this->assertDatabaseCount('posts', 3);
    }

    public function test_the_posts_user_relationship()
    {
        $user = User::factory()
         ->hasPosts(5)
         ->create();

         $this->assertDatabaseCount('posts',5);
         $this->assertDatabaseCount('users',1);
         $this->assertDatabaseHas('posts',[
            'user_id' => $user->id,
         ]);
    }

    public function test_the_authentication()
    {
        $user = User::factory()->create([
            'password' => Hash::make('abc123'),
        ]);
        $this->post('/login',[
            'email' => $user->email,
            'password' => 'abc123',
        ]);
        $this -> assertAuthenticated();
    }
}
