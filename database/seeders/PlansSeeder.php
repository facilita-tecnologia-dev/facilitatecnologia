<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Plans
        $gestaoRH = DB::table('plans')->insertGetId([
            'name' => 'Gestão de RH',
            'slug' => 'gestao-de-rh',
            'description' => 'Nosso sistema oferece controle completo sobre as informações dos seus colaboradores, aliado a ferramentas inovadoras que aprimoram a gestão de RH, tornando os processos mais estratégicos.',
            'content' => '',
            'price' => '0',
        ]);

        $recrutamento = DB::table('plans')->insertGetId([
            'name' => 'Recrutamento',
            'slug' => 'recrutamento',
            'description' => 'Sistema de recrutamento',
            'content' => '',
            'price' => '0',
        ]);
        
        $gestaoEPIs = DB::table('plans')->insertGetId([
            'name' => 'Gestão de EPI\'s',
            'slug' => 'gestao-de-epis',
            'description' => 'Sistema de Gestão de EPI\'s',
            'content' => '',
            'price' => '0',
        ]);

        $gestaoTerceiros = DB::table('plans')->insertGetId([
            'name' => 'Gestão de Terceiros',
            'slug' => 'gestao-de-terceiros',
            'description' => 'Sistema de Gestão de Terceiros',
            'content' => '',
            'price' => '0',
        ]);

        $prontuarioNR20 = DB::table('plans')->insertGetId([
            'name' => 'Prontuário NR 20',
            'slug' => 'prontuario-nr20',
            'description' => 'Sistema de Prontuário NR 20',
            'content' => '',
            'price' => '0',
        ]);
        
        $almoxarifado = DB::table('plans')->insertGetId([
            'name' => 'Almoxarifado',
            'slug' => 'almoxarifado',
            'description' => 'Sistema de Almoxarifado',
            'content' => '',
            'price' => '0',
        ]);
        

        // Modules

        $adminPessoal = DB::table('modules')->insertGetId([
            'name' => 'Administração de pessoal',
            'slug' => 'administracao-de-pessoal',
            'description' => 'jdklajdskldajdkasjdlsadjadsadjadjsk',
            'content' => 'jdklajdskldajdkasjdlsadjadsadjadjskjdklajdskldajdkasjdlsadjadsadjadjsk',
            'price' => '0',
        ]);

        $cargosSalarios = DB::table('modules')->insertGetId([
            'name' => 'Cargos e Salários',
            'slug' => 'cargos-e-salarios',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $desempenho = DB::table('modules')->insertGetId([
            'name' => 'Desempenho',
            'slug' => 'desempenho',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $medicinaOcupacional = DB::table('modules')->insertGetId([
            'name' => 'Medicina Ocupacional',
            'slug' => 'medicina-ocupacional',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $recrutamentoModule = DB::table('modules')->insertGetId([
            'name' => 'Recrutamento',
            'slug' => 'recrutamento',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $gestaoEPIModule = DB::table('modules')->insertGetId([
            'name' => 'Gestão de EPI\'s',
            'slug' => 'gestao-de-epis',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $gestaoTerceiroModule = DB::table('modules')->insertGetId([
            'name' => 'Gestão de Terceiros',
            'slug' => 'gestao-de-terceiros',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $nr20Module = DB::table('modules')->insertGetId([
            'name' => 'NR 20',
            'slug' => 'nr20',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $ordensServico = DB::table('modules')->insertGetId([
            'name' => 'Ordem de serviço',
            'slug' => 'ordem-de-servico',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        $treinamentoDesenvolvimento = DB::table('modules')->insertGetId([
            'name' => 'Treinamento e desenvolvimento',
            'slug' => 'treinamento-e-desenvolvimento',
            'description' => '',
            'content' => '',
            'price' => '0',
        ]);

        // Relations

        // Gestão RH
        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $adminPessoal,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $cargosSalarios,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $desempenho,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $medicinaOcupacional,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $recrutamentoModule,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoRH,
            'module_id' => $treinamentoDesenvolvimento,
        ]);

        // -------------------------------------

        // Recrutamento
        DB::table('plan_modules')->insert([
            'plan_id' => $recrutamento,
            'module_id' => $recrutamentoModule,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $recrutamento,
            'module_id' => $cargosSalarios,
        ]);
        
        // -------------------------------------
        
        // Gestão de EPIs
        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoEPIs,
            'module_id' => $adminPessoal,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoEPIs,
            'module_id' => $cargosSalarios,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoEPIs,
            'module_id' => $gestaoEPIModule,
        ]);
        
        // -------------------------------------
        
        // Gestão de Terceiros

        DB::table('plan_modules')->insert([
            'plan_id' => $gestaoTerceiros,
            'module_id' => $gestaoTerceiroModule,
        ]);
        // -------------------------------------
        
        // Gestão de obras

        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $nr20Module,
        ]);
        
        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $adminPessoal,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $cargosSalarios,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $gestaoEPIModule,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $ordensServico,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $prontuarioNR20,
            'module_id' => $treinamentoDesenvolvimento,
        ]);
        
        // -------------------------------------
        
        // Gestão de almoxarifado
        DB::table('plan_modules')->insert([
            'plan_id' => $almoxarifado,
            'module_id' => $adminPessoal,
        ]);

        DB::table('plan_modules')->insert([
            'plan_id' => $almoxarifado,
            'module_id' => $cargosSalarios,
        ]);
        
        DB::table('plan_modules')->insert([
            'plan_id' => $almoxarifado,
            'module_id' => $gestaoEPIModule,
        ]);

        
    }
}
