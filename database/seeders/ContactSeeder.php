<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            'page_id' => 4,
            'type' => 'contact-form', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 13,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Contate-nos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 13,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Seu feedback é <strong>valioso</strong>! Preencha o formulário e retornaremos seu contato em breve.<br>Sua mensagem será encaminhada para nosso whatsapp.', 
            'order' => 1, 
        ]);

        DB::table('sections')->insert([
            'page_id' => 4,
            'type' => 'system-status', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 14,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Status do sistema', 
            'order' => 1, 
        ]);
        
        DB::table('sections')->insert([
            'page_id' => 4,
            'type' => 'FAQ', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 15,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'FAQ', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 15,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Respostas para as suas perguntas mais frequentes.', 
            'order' => 1, 
        ]);



        DB::table('faq')->insert([
            'question' => 'Pergunta 1',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 1, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 2',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 2, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 3',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 3, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 4',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 4, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 5',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 5, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 6',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 6, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 7',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 7, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 8',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 8, 
        ]);

        DB::table('faq')->insert([
            'question' => 'Pergunta 9',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, saepe. Quisquam quia voluptas, a provident vero, ut fugit itaque autem nemo ipsum vitae fugiat. Modi possimus corporis recusandae explicabo voluptate.',
            'order' => 9, 
        ]);


        // ------------------------------------------------------------------
    }
}
