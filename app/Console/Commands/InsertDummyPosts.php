<?php
namespace App\Console\Commands;
use App\Service;
use Illuminate\Console\Command;
class InsertDummyPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:dummy';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        app()->setLocale('en');
        $post1 = new Service();
        $post1->name = 'Wash Station Fatima';
        $post1->address = 'Rua São João de Deus, Lot 20 - Shop 1, Cova da Iria, 2495-456 Fátima';
        $post1->slug = 'wash station';
        $post1->save();
        $post2 = new Service();
        $post2->name = 'LSS Laundry Self-Service';
        $post2->address = 'Shop 1- Rua José Gonçalves, nº63 (Tranversal to Marquês de Pombal, Rua dos CTT) Now shop 2 in the street of the School, Planalto-Marinheiros (0.71 mi) Leiria 2410-121 Leiria';
        $post2->slug = 'self-service';
        $post2->save();
        app()->setLocale('fr');
        $post1->name= 'Station de lavage Fátima';
        $post1->address = 'Rua São João de Deus, Lot 20 - Boutique 1, Cova da Iria, 2495-456 Fátima';
        $post1->slug = 'lavage fátima';
        $post1->save();
        $post2->name = 'LSS Lavandaria Self-Service';
        $post2->address = 'Magasin 1- Rua José Gonçalves, nº63 (Tranversal à Marquês de Pombal, Rua dos CTT) Maintenant magasin 2 dans la rue de l';
        $post2->slug = 'lss lavandaria';
        $post2->save();
    }
}