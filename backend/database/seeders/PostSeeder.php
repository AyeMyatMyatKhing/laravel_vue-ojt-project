<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i = 0;$i < 10; $i++){
        //     DB::table('posts')->insert([
        //         'title'=>Str::random(15),
        //         'description'=>Str::random(50),
        //         'status' => 0,
        //         'created_user_id'=> 1,
        //         'created_at' => now()
        //     ]);
        // }

        DB::table('posts')->insert([
            'title' => 'HTML',
            'description'=>'HTML stands for Hyper Text Markup Language.
            HTML is the standard markup language for Web pages.
            HTML elements are the building blocks of HTML pages.
            HTML elements are represented by <> tags',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'CSS',
            'description'=>'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=>now()
        ]);
        DB::table('posts')->insert([
            'title' => 'JS',
            'description'=>'avaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Bootstrap',
            'description'=>'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'HTML',
            'description'=>'HTML stands for Hyper Text Markup Language.
            HTML is the standard markup language for Web pages.
            HTML elements are the building blocks of HTML pages.
            HTML elements are represented by <> tags',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'CSS',
            'description'=>'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=>now()
        ]);
        DB::table('posts')->insert([
            'title' => 'JS',
            'description'=>'avaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Bootstrap',
            'description'=>'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'HTML',
            'description'=>'HTML stands for Hyper Text Markup Language.
            HTML is the standard markup language for Web pages.
            HTML elements are the building blocks of HTML pages.
            HTML elements are represented by <> tags',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'CSS',
            'description'=>'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=>now()
        ]);
        DB::table('posts')->insert([
            'title' => 'JS',
            'description'=>'avaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Bootstrap',
            'description'=>'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components',
            'status'=> 0,
            'created_user_id'=> 1,
            'created_at'=> now()
        ]);
    }
}
