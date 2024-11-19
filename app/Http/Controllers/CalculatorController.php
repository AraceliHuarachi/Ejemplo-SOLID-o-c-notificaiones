<?php

namespace App\Http\Controllers;

class CalculatorController extends Controller
{
    public function calculator()
    {
        // Datos en PHP
        $datos =
            [
                [
                    'idCargo' => 1,
                    'nombre' => "Marcela",
                    'primerApellido' => "Cayo",
                    'segundoApellido' => "Aruquipa",
                    'mes' => 8,
                    'anio' => 2024,
                    'salario' => 7000,
                    'descuentos' => 10,
                    'idSupervisor' => null,
                ],
                [
                    'idCargo' => 2,
                    'nombre' => "Carlos",
                    'primerApellido' => "Mendoza",
                    'segundoApellido' => "López",
                    'mes' => 7,
                    'anio' => 2024,
                    'salario' => 5000,
                    'descuentos' => 8,
                    'idSupervisor' => 1,
                ],
                [
                    'idCargo' => 3,
                    'nombre' => "Ana",
                    'primerApellido' => "Pérez",
                    'segundoApellido' => "Ramírez",
                    'mes' => 6,
                    'anio' => 2024,
                    'salario' => 4000,
                    'descuentos' => 5,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 4,
                    'nombre' => "Luis",
                    'primerApellido' => "Quispe",
                    'segundoApellido' => "Villca",
                    'mes' => 9,
                    'anio' => 2024,
                    'salario' => 3500,
                    'descuentos' => 7,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 5,
                    'nombre' => "María",
                    'primerApellido' => "Choque",
                    'segundoApellido' => "Condori",
                    'mes' => 10,
                    'anio' => 2024,
                    'salario' => 2500,
                    'descuentos' => 3,
                    'idSupervisor' => 4,
                ],
                [
                    'idCargo' => 1,
                    'nombre' => "Jorge",
                    'primerApellido' => "Salas",
                    'segundoApellido' => "Huanca",
                    'mes' => 8,
                    'anio' => 2024,
                    'salario' => 6800,
                    'descuentos' => 6,
                    'idSupervisor' => null,
                ],
                [
                    'idCargo' => 2,
                    'nombre' => "Verónica",
                    'primerApellido' => "Silva",
                    'segundoApellido' => "Mamani",
                    'mes' => 7,
                    'anio' => 2024,
                    'salario' => 5200,
                    'descuentos' => 4,
                    'idSupervisor' => 1,
                ],
                [
                    'idCargo' => 3,
                    'nombre' => "Guillermo",
                    'primerApellido' => "Camacho",
                    'segundoApellido' => "Llanos",
                    'mes' => 5,
                    'anio' => 2024,
                    'salario' => 4300,
                    'descuentos' => 10,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 4,
                    'nombre' => "Natalia",
                    'primerApellido' => "Mamani",
                    'segundoApellido' => "Callisaya",
                    'mes' => 11,
                    'anio' => 2024,
                    'salario' => 3600,
                    'descuentos' => 8,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 5,
                    'nombre' => "Pedro",
                    'primerApellido' => "Choque",
                    'segundoApellido' => "Quispe",
                    'mes' => 12,
                    'anio' => 2024,
                    'salario' => 2400,
                    'descuentos' => 5,
                    'idSupervisor' => 4,
                ],
                [
                    'idCargo' => 1,
                    'nombre' => "Sofía",
                    'primerApellido' => "Arce",
                    'segundoApellido' => "Cabrera",
                    'mes' => 6,
                    'anio' => 2024,
                    'salario' => 7100,
                    'descuentos' => 9,
                    'idSupervisor' => null,
                ],
                [
                    'idCargo' => 2,
                    'nombre' => "David",
                    'primerApellido' => "López",
                    'segundoApellido' => "Poma",
                    'mes' => 3,
                    'anio' => 2024,
                    'salario' => 5100,
                    'descuentos' => 7,
                    'idSupervisor' => 1,
                ],
                [
                    'idCargo' => 3,
                    'nombre' => "Fernanda",
                    'primerApellido' => "Vargas",
                    'segundoApellido' => "Rojas",
                    'mes' => 5,
                    'anio' => 2024,
                    'salario' => 4100,
                    'descuentos' => 6,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 4,
                    'nombre' => "Miguel",
                    'primerApellido' => "Callisaya",
                    'segundoApellido' => "Huanca",
                    'mes' => 4,
                    'anio' => 2024,
                    'salario' => 3700,
                    'descuentos' => 5,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 5,
                    'nombre' => "Clara",
                    'primerApellido' => "Ticona",
                    'segundoApellido' => "Zeballos",
                    'mes' => 2,
                    'anio' => 2024,
                    'salario' => 2600,
                    'descuentos' => 4,
                    'idSupervisor' => 4,
                ],
                [
                    'idCargo' => 1,
                    'nombre' => "Hugo",
                    'primerApellido' => "González",
                    'segundoApellido' => "Pérez",
                    'mes' => 1,
                    'anio' => 2024,
                    'salario' => 7300,
                    'descuentos' => 3,
                    'idSupervisor' => null,
                ],
                [
                    'idCargo' => 2,
                    'nombre' => "Beatriz",
                    'primerApellido' => "Herrera",
                    'segundoApellido' => "Cruz",
                    'mes' => 7,
                    'anio' => 2024,
                    'salario' => 5400,
                    'descuentos' => 8,
                    'idSupervisor' => 1,
                ],
                [
                    'idCargo' => 3,
                    'nombre' => "Tomás",
                    'primerApellido' => "Ramos",
                    'segundoApellido' => "Velasco",
                    'mes' => 9,
                    'anio' => 2024,
                    'salario' => 4200,
                    'descuentos' => 2,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 4,
                    'nombre' => "Paula",
                    'primerApellido' => "Cruz",
                    'segundoApellido' => "Blanco",
                    'mes' => 12,
                    'anio' => 2024,
                    'salario' => 3800,
                    'descuentos' => 6,
                    'idSupervisor' => 2,
                ],
                [
                    'idCargo' => 5,
                    'nombre' => "Adriana",
                    'primerApellido' => "Morales",
                    'segundoApellido' => "Reyes",
                    'mes' => 10,
                    'anio' => 2024,
                    'salario' => 2700,
                    'descuentos' => 10,
                    'idSupervisor' => 4,
                ],
            ];

        // Lista de puestos laborales
        $jsonPuestos =
            [
                [
                    'id' => 1,
                    'nombre' => "Director de finanzas",
                ],
                [
                    'id' => "2",
                    'nombre' => "Encargado de finanzas",
                ],
                [
                    'id' => "3",
                    'nombre' => "Contador",
                ],
                [
                    'id' => "4",
                    'nombre' => "Auditor",
                ],
                [
                    'id' => "5",
                    'nombre' => "Auxiliar",
                ],
            ];

        // Cabecera
        echo '<h1>Listado</h1>';

        // Solucion al punto 1: Listado
        echo '<hr>';
        echo '<ul>';
        $salario = 0;
        $descuentos = 0;
        foreach ($datos as $item) {
            echo '<li>';
            $salario = $item['salario'] + $salario;
            $condescuentos = $item['descuentos'] / 100 * $item['salario'];
            $descuentos = $condescuentos + $descuentos;

            print_r($item['nombre'] . " " . $item['primerApellido'] . " " . $item['segundoApellido']);
            foreach ($jsonPuestos as $itemp) {
                if ($item['idCargo'] == $itemp['id']) {
                    echo '<br>';
                    print_r($itemp['nombre']);
                    echo '</br>';
                };
            }
            echo '</li>';
        };
        echo '</ul>';

        echo '<hr>';

        echo '<h1>Reporte 1</h1>';
        echo '<p>Sumatoria de Salarios: </p>';
        print_r($salario);

        print_r($descuentos);




        echo '<hr>';

        // Listado de ayuda... 
        // echo '<pre>';
        // print_r($datos);
        // echo '</pre>';
    }

    public function lista()
    {
        return 'hola';
    }
    public function sumasal()
    {
        return 1 + 1;
    }
}
