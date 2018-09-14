<?php

class MainView {
        
	function __construct($page) {

		$this->$page();
                
	}

	public function index() { 
                
                $args = array(

                        AboutPresenter::lista(),
                        ProjectPresenter::listRandom( 3 ),
                        TeamPresenter::listRandom( 3 ),
                        NoticePresenter::lista( 2 ),
                        EdictPresenter::lista( 2 )

                );

                $sobre     = $args[0];
                $projetos  = $args[1];
                $alunos    = $args[2];
                $novidades = $args[3];
                $editais   = $args[4];

                require_once __STATIC__.'head.php';
                require_once __STATIC__.'nav-bar.php'; 

                require_once __STATIC__.'home.php'; 
                require_once __STATIC__.'footer.php';

	}

}
