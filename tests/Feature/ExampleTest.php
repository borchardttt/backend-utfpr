<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_verificar_se_numero_e_impar()
    {
        $numero = 5;
        $eImpar = $numero % 2 === 1;

        $this->assertTrue($eImpar);
    }

    public function test_resultado_da_adicao()
    {
        $resultado = 2 + 3;

        $this->assertEquals(5, $resultado);
    }

    public function test_array_tem_tres_elementos()
    {
        $array = [1, 2, 3];

        $this->assertCount(3, $array);
    }


}
