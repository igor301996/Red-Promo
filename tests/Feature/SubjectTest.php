<?php

namespace Tests\Feature;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubjectTest extends TestCase
{

    public function testIndex()
    {
        $user = User::factory()->make();
        $this->actingAs($user);
        $response = $this->get('api/subject/index');

        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $this->actingAs(User::first());
        $subject = Subject::factory()->make()->toArray();

        $response = $this->json('POST', 'api/subject/create/', $subject);
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $this->actingAs(User::first());
        $subject = Subject::factory()->make()->toArray();
        $id = Subject::inRandomOrder()->first()->id;

        $response = $this->json('PUT', 'api/subject/update/' . $id, $subject);
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $this->actingAs(User::first());
        $id = Subject::inRandomOrder()->first()->id;

        $response = $this->get('api/subject/show/' . $id);
        $response->assertStatus(200);
    }

    public function testDestroy()
    {
        $this->actingAs(User::first());
        $id = Subject::inRandomOrder()->first()->id;

        $response = $this->delete('api/subject/destroy/' . $id);
        $response->assertStatus(200);
    }


}
