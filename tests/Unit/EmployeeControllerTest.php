<?php

namespace Tests\Unit;

use App\User;
use App\Employee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    public function testCreateReturnsView()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('/dashboard/employees/create');

        $response->assertSuccessful()
            ->assertViewIs('employees.create');
    }

    public function testEditReturnsView()
    {
        $user = factory(User::class)->make();
        $employee = factory(Employee::class)->create();

        $response = $this->actingAs($user)
                         ->get('/dashboard/employees/{$employee->id}/edit');
        $response->assertSuccessful()
                 ->assertViewIs('employees.edit');
    }

    public function testIndexReturnsView()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
                         ->get('/dashboard/employees');

        $response->assertSuccessful()
                 ->assertViewIs('employees.index');
    }

    // TODO: test that all can be filled
    public function testStoreMethodCreatesEmployee() {
        $attributes = [
            'name' => $this->faker->name(),
            'title' => $this->faker->word(),

        ];

        Employee::create($attributes);

        $response = $this->assertDatabaseHas('employees', $attributes);

    }

    public function testDeleteMethodDeletesUser() {
        $employee = factory(Employee::class)->create();
        
        $employee = Employee::where('name', $employee->name)->first();
        $attributes = [
            'name' => $employee->name,
            'title' => $employee->title
        ];

        Employee::destroy($employee->id);

        $this->assertDatabaseMissing('employees', $attributes);
    }

    // TODO: create test for updating all user attributes
}
