<?php

namespace Tests\Feature\Account;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SecurityTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_user_can_navigate_to_account_security_settings() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response = $this->get('/account/security');
        $response->assertStatus(200);
        $response->assertSee('regular basis');
    }

    public function test_user_can_update_account_security_settings() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->get('/account/security/');
        $response->assertStatus(200);
        $response->assertSee('changing your password');
        $response = $this->post('/account/security', [
            'old_password' => 'password',
            'new_password' => 'np1',
            'new_password_confirm' => 'np1',
        ]);
        $response = $this->get('/account/security');
        $response->assertSessionHasNoErrors();
        $response->assertStatus(200);
    }
}
