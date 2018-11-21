<?php

use Illuminate\Database\Seeder;

class RacaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //RAÇAS CÃO
        DB::table('racas')->insert([
            [ 'especie_id' => 1 ,  'nome_raca' => 'Afghan Hound'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Airedale Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Akita'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'American Pit Bull Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'American Staffordshire'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Australian Cattle Dog (Boiadeiro Australiano)'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Australian Shepherd (Pastor Australiano)'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Beagle'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Basset Hound'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Bichon Frisé'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Bloodhound'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Border Collie'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Boston Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Boxer'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Bull Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Buldogue Americano'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Buldogue Campeiro'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Buldogue Francês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Buldogue Inglês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Bullmastiff'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Cane Corso'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Cavalier King Charles Spaniel'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Chinese Crested Dog (Cão de Crista Chinês)'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Chihuahua'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Chow Chow'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Cocker Spaniel Americano'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Cocker Spaniel Inglês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Collie'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Dachshund / Teckel'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Dobermann'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Dogue Alemão'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Dogue de Bordeaux'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Dálmata'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Fila Brasileiro'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Fox Paulistinha'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Fox Terrier de Pelo Duro'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Golden Retriever'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Husky Siberiano'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Jack Russel Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Komondor'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Kuvasz'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Labrador Retriever'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Lhasa Apso'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Malamute do Alasca'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Maltês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Mastiff'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Mastim Napolitano'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Old English Sheepdog'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Papillon'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pastor Alemão'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pastor Belga'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pastor de Shetland'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pastor Branco Suíço'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pastor Maremano Abruzês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pequinês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pinscher'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pointer'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Poodle Toy'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Pug'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Rottweiler'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Rhodesian Ridgeback'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Samoieda'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Schnauzer Gigante'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Schnauzer Miniatura'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Schnauzer Standard'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Scottish Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Setter Inglês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Setter Irlandês'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Shar Pei'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Shiba Inu'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'São Bernardo'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Shih Tzu'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Spitz Alemão Anão (Lulu da Pomerânia)'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Staffordshire Bull Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Weimaraner'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Welsh Corgi Pembroke'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Welsh Corgi Cardigan'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'West Highland White Terrier (Westie)'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Yorkshire Terrier'],
            [ 'especie_id' => 1 ,  'nome_raca' => 'Vira lata'],
        ]);

        //racas gatos
        DB::table('racas')->insert([
            [ 'especie_id' => 2 ,  'nome_raca' => 'Persa e Himalaia'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Siamês'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Maine Coon'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Angorá'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Sphynx'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Ragdoll'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Ashera'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'American Shorthair'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Exótico'],
            [ 'especie_id' => 2 ,  'nome_raca' => 'Sem raça definida'],
        ]);

        //especies de aves
        DB::table('racas')->insert([
            [ 'especie_id' => 3 ,  'nome_raca' => 'Ema'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Azulona'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Macuco'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Inhambu-de-cabeça-vermelha'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Tururim'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Inhambuguaçu'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Codorna-do-nordeste'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Pato-do-mato'],
            [ 'especie_id' => 3 ,  'nome_raca' => 'Pato-de-crista'],
            [ 'especie_id' => 3 ,  'nome_raca' => '	flamingo'],

        ]);
    }
}
