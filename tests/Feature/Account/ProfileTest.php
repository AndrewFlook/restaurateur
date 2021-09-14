<?php

namespace Tests\Feature\Account;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_user_can_navigate_to_account_dashboard() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->get('/account');
        $response->assertStatus(200);
        $response->assertSee('Account Settings');
    }

    public function test_user_can_navigate_to_profile_settings_page() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response = $this->get('/account/profile');
        $response->assertStatus(200);
        $response->assertSee($user->email);
    }

    public function test_user_can_update_profile_settings() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->get('/account/profile');
        $response->assertStatus(200);
        $response = $this->post('/account/profile', [
            'name_first' => $this->faker->firstName,
            'name_last' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
        ]);
        $response->assertSessionHasNoErrors();
        $response = $this->get('/account/profile');
        $response->assertStatus(200);
    }
}
