<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\Provider\DinosaursProvider;
use KNPLabs\Routing\Controller;

class ListDinosaurs implements Controller
{
    private $dinosaursProvider;

    public function __construct(DinosaursProvider $dinosaursProvider)
    {
        $this->dinosaursProvider = $dinosaursProvider;
    }

    public function handleRequest(): void
    {
        if (isset($_GET['q'])) {
            $rq = $_GET['q'];
        } else {
            $rq='';
        }
        if ($rq) {
            $dinosaurs = $this->dinosaursProvider->searchByName($rq);
        }
        else {
            $dinosaurs = $this->dinosaursProvider->all();
        }

       ViewRenderer::render('listDinosaurs.php', [
            'dinosaurs' => $dinosaurs,
            'q'=>$rq
        ]);
    }
}
