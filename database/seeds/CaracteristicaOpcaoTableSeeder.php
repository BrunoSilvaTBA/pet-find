<?php

use Illuminate\Database\Seeder;

class CaracteristicaOpcaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristica_opcoes')->insert([
            ['nome_opcao' => 'Sim', 'caracteristica_id' => 6 ],
            ['nome_opcao' => 'Não', 'caracteristica_id' => 6 ],

            ['nome_opcao' => 'Carente', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Agressivo', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Brincalhão', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Carinhoso', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Seco', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Medroso', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Protetor', 'caracteristica_id' => 5 ],
            ['nome_opcao' => 'Outros', 'caracteristica_id' => 5 ],

            ['nome_opcao' => 'Preto', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Branco', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Azul', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Amarelo', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Laranja', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Cinza', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Preto com cranco', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Verde', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Vermelho', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Marrom', 'caracteristica_id' => 3 ],
            ['nome_opcao' => 'Outros', 'caracteristica_id' => 3 ],

            ['nome_opcao' => 'Preto', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Castanho', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Verde', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Cinza', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Azul', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Mel', 'caracteristica_id' => 1 ],
            ['nome_opcao' => 'Outros', 'caracteristica_id' => 1 ],

            ['nome_opcao' => 'Preto', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Branco', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Amarelado', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Cinza', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Cinza com branco', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Cinza com preto', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Preto com cranco', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Marrom', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Marrom com branco', 'caracteristica_id' => 2 ],
            ['nome_opcao' => 'Outros', 'caracteristica_id' => 2 ],

            ['nome_opcao' => 'Pequeno', 'caracteristica_id' => 4 ],
            ['nome_opcao' => 'Médio', 'caracteristica_id' => 4 ],
            ['nome_opcao' => 'Grande', 'caracteristica_id' => 4 ],

            ['nome_opcao' => 'Masculino', 'caracteristica_id' => 7 ],
            ['nome_opcao' => 'Feminino', 'caracteristica_id' => 7 ],
        ]);
    }
}
