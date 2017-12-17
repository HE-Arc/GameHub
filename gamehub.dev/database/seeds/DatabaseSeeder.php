<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('games')->insert([
            'id'       => 1,
            'name'     => "Assassin's Creed III",
            'grade'    => 5,
            'picture'  => 'Assassin_s_Creed_III.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 2,
            'name'     => 'Battlefield 4',
            'grade'    => 3,
            'picture'  => 'battlefield-4.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 3,
            'name'     => 'Kerbal Space Program',
            'grade'    => 5,
            'picture'  => 'Kerbal_Space_Program.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 4,
            'name'     => 'Wolfenstein: The New Order',
            'grade'    => 3,
            'picture'  => 'Wolfenstein_The_New_Order.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 5,
            'name'     => 'Far Cry 3',
            'grade'    => 5,
            'picture'  => 'Far_Cry_3.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 6,
            'name'     => 'Call of Duty: Modern Warfare 2',
            'grade'    => 4,
            'picture'  => 'Call_of_Duty_Modern_Warfare_2.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 7,
            'name'     => 'The Elder Scrolls V: Skyrim',
            'grade'    => 5,
            'picture'  => 'The_Elder_Scrolls_V_Skyrim.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 8,
            'name'     => 'Just Cause 3',
            'grade'    => 3,
            'picture'  => 'Just_Cause_3.jpg',
        ]);

        DB::table('games')->insert([
            'id'       => 9,
            'name'     => 'The Witcher 3: Wild Hunt',
            'grade'    => 5,
            'picture'  => 'The_Witcher_3_Wild_Hunt.jpg',
        ]);


        //Password14
        DB::table('users')->insert([
          'id'       => 1,
          'name'     => 'jean',
          'email'    => 'jean@bluewin.ch',
          'password' => '$2y$10$Q6X13hXvCmBbCi1A7T5joe.1F.yZHHr85hv6ovs2E9jE7f5RWTkOS',
        ]);
        //4KT3CJw
        DB::table('users')->insert([
          'id'       => 2,
          'name'     => 'Salda',
          'email'    => 'Salda@gmail.com',
          'password' => '$2y$10$phrQ8q1sgtkO9UqzCi9Z7OkAJvGgereVI.UTamku7CmWvRULwstna',
        ]);
        //mKf1A9M
        DB::table('users')->insert([
          'id'       => 3,
          'name'     => 'Urukubal',
          'email'    => 'Urukubal@gmail.com',
          'password' => '$2y$10$VUeWxHfTMbkxNT39cubvzuBRGfNgOGdyqL0tRLOdjU8aGkz6y2X5O',
        ]);
        //5Gvz4J4
        DB::table('users')->insert([
          'id'       => 4,
          'name'     => 'Luzog',
          'email'    => 'Luzog@gmail.com',
          'password' => '$2y$10$HGais5WDtLlxVRxVjzR5/OSTvO1up//e.qFQMM3SqbWQOyg3Ip/fq',
        ]);
        //ZtMBlWg
        DB::table('users')->insert([
          'id'       => 5,
          'name'     => 'Donabon',
          'email'    => 'Donabon@gmail.com',
          'password' => '$2y$10$MDaiCgGIfUfR8faR2iK6qOyJoua5ySKsKL9b4GQb3BxsQ5E2bLH8G',
        ]);
        //MPYLHz2
        DB::table('users')->insert([
          'id'       => 6,
          'name'     => 'Gaea',
          'email'    => 'Gaea@gmail.com',
          'password' => '$2y$10$1lCWNcE2vXqqohsiMRwm/ef2kSoaMQ6wZI01neE58fyu4hu8hSfBK',
        ]);

        DB::table('comments')->insert([
          'user_id'          => 1,
          'game_id'          => 1,
                'title'      => 'moyen',
                'content'    => "Un dix sévère, mais logique au vu de la balance actuelle des éléments en présence.
Dans les très bonnes choses, il faut noter:
- L'environemment, très immersif, une nouvelle fois ! Les graphismes et l'aspect visuel a été soigné. La mer a un rendu exceptionnel, beaucoup de détails. On sent vraiment que l'on traverse des états chahutés et les prémices de la guerre civile. Les cartes sont gigantesques et bien foutues.
- Le mode naval qui est une grande réussite. Après une bonne prise en main, il y a moyen de passer d'excellents moments.",
                'created_at' => date('Y-m-d H:i:s', "1513510019"),
                'updated_at' => date('Y-m-d H:i:s', "1513510019"),
            ]);

        DB::table('comments')->insert([
          'user_id'          => 4,
          'game_id'          => 1,
                'title'      => 'au top',
                'content'    => "c'est un vrai coup de coeur que j'ai eu pour ce jeux n'ayant pas jouer à assassin's creed 1 et 2 je ne me suis pas sentie perdu dans l'histoire, le jeux à aucuns défaut majeur, les batailles navales sont juste exceptionnel très gros réalisme le mode multi joueurs et aussi très bien fait pour moi ce jeux vaux un bon 19 sur 20 je vous le conseille.",
                'created_at' => date('Y-m-d H:i:s', "1513512345"),
                'updated_at' => date('Y-m-d H:i:s', "1513512345"),
            ]);
         DB::table('comments')->insert([
          'user_id'          => 5,
          'game_id'          => 1,
                'title'      => 'magnifique',
                'content'    => "Ubisoft nous étonnera toujours! Après un Assassin's creed Revelations décevant, AC III nous replonge dans la saga ! Avec ce nouveau volet, Ubisoft a mit la barre très haute en développant un des best-seller de l'année ! Très bonne qualité graphique et des paysages magnifiques à voir ! Jouabilité parfaite en repensant la manière de jouer ! Son extraordinaire surtout en jouant avec un casque pro-gaming !
Sur ce profitons de ce jeu magnifique qui est Assassin's creed III !",
                'created_at' => date('Y-m-d H:i:s', "1513518765"),
                'updated_at' => date('Y-m-d H:i:s', "1513518765"),
            ]);
          DB::table('comments')->insert([
          'user_id'          => 6,
          'game_id'          => 1,
                'title'      => 'Super jeu',
                'content'    => "Super jeu, ayant joué à tous les AC, je devrais commencer à me lasser du genre qui du coup n'est plus nouveau. Or AC III renouvelle la série là où ses prédécesseur ont echoué, juste magnifique ! L'alliance de nouveauté dans les détails et aussi celle qui accompagne le nouveau personnage donne un écart entre AC II et AC III aussi grand, voir plus que celui entre les deux premiers",
                'created_at' => date('Y-m-d H:i:s', "1513519012"),
                'updated_at' => date('Y-m-d H:i:s', "1513519012"),
            ]);
           DB::table('comments')->insert([
          'user_id'          => 3,
          'game_id'          => 2,
                'title'      => 'super',
                'content'    => "J'adore le jeu, je m'amuse dessus , les graphismes sont excellents, y'a quelque maps qui sont énormes, la campagne est énorme, il manque juste un peu de contenue.Ça va même me faire remplacer Overwatch.Mais bon vu que y'a pas la France ...",
                'created_at' => date('Y-m-d H:i:s', "1513515454"),
                'updated_at' => date('Y-m-d H:i:s', "1513515454"),
            ]);
            DB::table('comments')->insert([
          'user_id'          => 2,
          'game_id'          => 2,
                'title'      => 'décevant',
                'content'    => "Uniquement 6 mission, peu de contenu pour que les joueurs achètent les DLC (armes Russes et Française dans les DLC à 14e alors que ce sont des armes typique de la deuxième guerre mondiale). Multijoueur répétitif. Bref un jeu qui bafoue l'histoire et dont on se lasse rapidement.",
                'created_at' => date('Y-m-d H:i:s', "1513510009"),
                'updated_at' => date('Y-m-d H:i:s', "1513510009"),
            ]);
             DB::table('comments')->insert([
          'user_id'          => 1,
          'game_id'          => 3,
                'title'      => 'Jouissif',
                'content'    => "Un bon petit jeu indé, bien qu'au début toutes vos création risques fortement de finir en miettes dans un feu d'artifice jouissif, au fur et a mesure on commence a comprendre les ficelles, a envoyer nos premier kerbiens en dehors de l'attraction terrestre, voir même sur la mün (la lune du jeu) en un mot comme en en cent : Jouissif !",
                'created_at' => date('Y-m-d H:i:s', "1513517639"),
                'updated_at' => date('Y-m-d H:i:s', "1513517639"),
            ]);
              DB::table('comments')->insert([
          'user_id'          => 4,
          'game_id'          => 3,
                'title'      => 'addictif',
                'content'    => "un jeu plus qu'addictif, et passionnant.
un peu compliqué pour débuter car il faut comprendre 2, 3 notions de physique mais il n'y a rien de mieux que de se construire une station spatiale en orbite autour de la terre ou alors aller conquérir l'espace.",
                'created_at' => date('Y-m-d H:i:s', "1513516019"),
                'updated_at' => date('Y-m-d H:i:s', "1513516019"),
            ]);
               DB::table('comments')->insert([
          'user_id'          => 5,
          'game_id'          => 3,
                'title'      => 'aucun regret',
                'content'    => "Ce jeu a avalé des centaines d'heures de ma vie... Et je ne regrette rien!

L'apprentissage par l'échec, la mise en place de plans de plus en plus ambitions, l'abondance en mods divers et variés, et une gentille petite introduction à la mécanique spatiale... Ce jeu offre déjà beaucoup, et a encore tant à offrir!

Seuls bémols : l'optimisation qui est encore très perfectible, ainsi que le rythme des mises à jours qui tend à l'irrégularité.",
                'created_at' => date('Y-m-d H:i:s', "1513513233"),
                'updated_at' => date('Y-m-d H:i:s', "1513513233"),
            ]);
                DB::table('comments')->insert([
          'user_id'          => 6,
          'game_id'          => 4,
                'title'      => 'ne plaira pas à tous le monde',
                'content'    => "Le jeu ne sera pas apprécié par tout le monde et vise (je pense) un public plus âgé que la moyenne qu'on trouve sur les FPS million sellers.

La faute/grâce à un gameplay très old-school et un systême de progression à l'ancienne. On traverse des couloirs en bourrinant du nazi-robot, on cherche des passages secrets en ramassant des bouts d'armures, kits de soins et autres munitions, on s'infiltre au couteau, cinématique assez classe, on re-bourrine. Du classique mais plutôt maîtrisé en sorte.",
                'created_at' => date('Y-m-d H:i:s', "1513514444"),
                'updated_at' => date('Y-m-d H:i:s', "1513514444"),
            ]);
                 DB::table('comments')->insert([
          'user_id'          => 3,
          'game_id'          => 5,
                'title'      => 'énorme',
                'content'    => "Un bac à sable pour grands, voilà, tout est dit.
Un solo absolument fou, un scénario addictif, une durée de vie colossale, un gameplay rafraîchissant et riche, des graphismes somptueux, une bande sonore excellente, un multi honnête et plaisant ( retour de l'éditeur ), et que dire de cette île.. bref, ce Far Cry est une perle du jeu vidéo.",
                'created_at' => date('Y-m-d H:i:s', "1513517123"),
                'updated_at' => date('Y-m-d H:i:s', "1513517123"),
            ]);
                  DB::table('comments')->insert([
          'user_id'          => 2,
          'game_id'          => 5,
                'title'      => 'Les gens sont fous',
                'content'    => "Comment peut-on dire que Far Cry 3 est le meilleur jeu de l'année 2012 ? Désolé les mecs mais j'ai dû rater quelque chose là",
                'created_at' => date('Y-m-d H:i:s', "1513512112"),
                'updated_at' => date('Y-m-d H:i:s', "1513512112"),
            ]);
                   DB::table('comments')->insert([
          'user_id'          => 1,
          'game_id'          => 5,
                'title'      => 'Merci Ubisoft',
                'content'    => "Far Cry 3 est un soft immensément riche et profond, doté d'un univers foisonnant de vie permettant à un redoutable gameplay, décomplexé et jouissif, de s'exprimer à plein! :)
Merci Ubisoft, Le jeu vidéo à son meilleur. ;)

",
                'created_at' => date('Y-m-d H:i:s', "1513519019"),
                'updated_at' => date('Y-m-d H:i:s', "1513519019"),
            ]);
                    DB::table('comments')->insert([
          'user_id'          => 5,
          'game_id'          => 6,
                'title'      => 'Tricknooby',
                'content'    => "Mw2 est le seul COD que je considère comme un bon FPS.
Malgré ses défaut et le virus dont il est infecté (tricknooby) il reste un superbe défouloir a jouer entre potes.",
                'created_at' => date('Y-m-d H:i:s', "1513516565"),
                'updated_at' => date('Y-m-d H:i:s', "1513516565"),
            ]);
                     DB::table('comments')->insert([
          'user_id'          => 4,
          'game_id'          => 6,
                'title'      => "Venant d'un fan",
                'content'    => "Je suis un très grand amateur de COD, et je croit que MW2 est l'un des meilleur. La campagne est génial (un peu difficile mais bon), le Spec-ops sont très accrocheur, et le multi semble beaucoup mieux réaliser que celui de MW3",
                'created_at' => date('Y-m-d H:i:s', "1513518809"),
                'updated_at' => date('Y-m-d H:i:s', "1513518809"),
            ]);
                      DB::table('comments')->insert([
          'user_id'          => 2,
          'game_id'          => 6,
                'title'      => 'trop beau',
                'content'    => "Déjà que le premier opus de la série était époustouflant mais alors celui là est plus que magnifique. Les graphismes sont tout simplement beau , les armes sont uniques, ce jeux est vraiment bien. Malgré une histoire terminée vite, on ne peu jouer à Modern Warfare 2 sans passez par le multi qui est le jeux multijoueur de tout les temps pour moi.",
                'created_at' => date('Y-m-d H:i:s', "1513511345"),
                'updated_at' => date('Y-m-d H:i:s', "1513511345"),
            ]);
                       DB::table('comments')->insert([
          'user_id'          => 1,
          'game_id'          => 7,
                'title'      => 'Equilibré',
                'content'    => "La difficulté est très agréablement bien dosée, les rencontres dynamiques aléatoires sont époustouflantes, et l'immersion est totale, tant les dialogues sont bien écrits et les voix-offs qui leur donnent vie sont bonnes. Un excellent jeu, un must-have, une nouvelle référence. (Baldur's gate et d'autres sont des mythes, mais là, une nouvelle page de l'histoire est en train de s'écrire)",
                'created_at' => date('Y-m-d H:i:s', "1513512222"),
                'updated_at' => date('Y-m-d H:i:s', "1513512222"),
            ]);
                        DB::table('comments')->insert([
          'user_id'          => 5,
          'game_id'          => 7,
                'title'      => "Le jeu de l'année",
                'content'    => "Graphisme incroyable , bon scénario , doublage français sympathique , et une durée de vie incroyable , pour moi skyrim est le jeu de l'année , il assure comme ses grand frère Oblivion etc... Game of year pour moi !",
                'created_at' => date('Y-m-d H:i:s', "1513513434"),
                'updated_at' => date('Y-m-d H:i:s', "1513513434"),
            ]);
                         DB::table('comments')->insert([
          'user_id'          => 6,
          'game_id'          => 7,
                'title'      => 'beau travail',
                'content'    => "L'un des meilleur des elder scrolls et un très très bon rpg, les graphismes sont très beaux, les combats sont asser bien foutu, et les musique et l'audio j'en bave quand je met le casque. Vraiment rien a rajouter sur ce magnifique jeu que j'y joue encore et encore",
                'created_at' => date('Y-m-d H:i:s', "1513510234"),
                'updated_at' => date('Y-m-d H:i:s', "1513510234"),
            ]);
                          DB::table('comments')->insert([
          'user_id'          => 3,
          'game_id'          => 8,
                'title'      => 'mouais',
                'content'    => "Surement pas le jeu de cette fin d'année c'est sur, il faut dire qu'il sort après les grosses licences et donc est un peu mis de côté.
Cependant, Just Cause 3 a toujours la même recette que ses ainés, une bonne dose de fun et d'humour, des graphismes correct, j'insiste surtout sur une liberté d'action totale.",
                'created_at' => date('Y-m-d H:i:s', "1513500123"),
                'updated_at' => date('Y-m-d H:i:s', "1513500123"),
            ]);
                             DB::table('comments')->insert([
          'user_id'          => 2,
          'game_id'          => 9,
                'title'      => 'Une claque',
                'content'    => "Depuis Game of Thrones : Le Trône de Fer je n'avais plus ressenti cette imprégnation scénaristique dans un jeu vidéo, cette dernière aventure de Geralt malheureusement, est bien le meilleur, en tout point ! Des personnages attachants, intéressants, dans un monde aussi grand, vivant, et aussi beau, j'ai pris une claque certaine !",
                'created_at' => date('Y-m-d H:i:s', "1513515630"),
                'updated_at' => date('Y-m-d H:i:s', "1513515630"),
            ]);
                              DB::table('comments')->insert([
          'user_id'          => 3,
          'game_id'          => 9,
                'title'      => 'Au top',
                'content'    => "Un jeu exceptionnel, qui ne réinvente rien mais qui représente une sorte d'aboutissement du jeu de rôle dans son format actuel (avec cinématiques, quêtes, combats, potions, etc.). On ne pourra pas faire beaucoup mieux que The Witcher 3 sans revoir en profondeur les mécaniques du jeu de rôle solo.",
                'created_at' => date('Y-m-d H:i:s', "1513517319"),
                'updated_at' => date('Y-m-d H:i:s', "1513517319"),
            ]);
                               DB::table('comments')->insert([
          'user_id'          => 4,
          'game_id'          => 9,
                'title'      => 'Parfait',
                'content'    => "Que dire après une dizaine d'heure de jeu, si ce n'est que les mots qui me viennent à l'esprit ne sont pas à la hauteur pour décrire ce chef d'oeuvre qu'est The Witcher 3 Wild Hunt.
Je tiens à féliciter CD Projekt pour leur immense travail et sérieux qu'ils ont pu apporter pour nous réaliser un jeu tout simplement parfait. Oui vous avez bien lu",
                'created_at' => date('Y-m-d H:i:s', "1513513029"),
                'updated_at' => date('Y-m-d H:i:s', "1513513029"),
            ]);


        DB::table('comment_votes')->insert([
            'comment_id'=> 1,
            'user_id'   => 1,
            'note'      => 1,
        ]);


        DB::table('comment_votes')->insert([
            'comment_id'=> 2,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 2,
            'user_id'   => 2,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 2,
            'user_id'   => 3,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 2,
            'user_id'   => 4,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 3,
            'user_id'   => 1,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 3,
            'user_id'   => 5,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 4,
            'user_id'   => 3,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 6,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 7,
            'user_id'   => 2,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 7,
            'user_id'   => 4,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 9,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 9,
            'user_id'   => 4,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 9,
            'user_id'   => 3,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 12,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 13,
            'user_id'   => 1,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 13,
            'user_id'   => 2,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 15,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 17,
            'user_id'   => 1,
            'note'      => -1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 20,
            'user_id'   => 1,
            'note'      => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 22,
            'user_id'   => 6,
            'note'      => 1,
        ]);

        DB::table('games_user')->insert([
            'games_id'=> 1,
            'user_id'   => 2,
            'grade'    => 5,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 2,
            'user_id'   => 2,
            'grade'    => 3,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 3,
            'user_id'   => 2,
            'grade'    => 5,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 4,
            'user_id'   => 2,
            'grade'    => 3,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 5,
            'user_id'   => 2,
            'grade'    => 5,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 6,
            'user_id'   => 2,
            'grade'    => 4,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 7,
            'user_id'   => 2,
            'grade'    => 5,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 8,
            'user_id'   => 2,
            'grade'    => 3,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 9,
            'user_id'   => 2,
            'grade'    => 4,
            'played'      => 1,
        ]);
        DB::table('games_user')->insert([
            'games_id'=> 9,
            'user_id'   => 4,
            'grade'    => 5,
            'played'      => 1,
        ]);

    }
}
