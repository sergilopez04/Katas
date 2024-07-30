<?php

class EntregaItAcademy {
    private string $nom;
    private string $sprint;
    private DateTime $dataEntrega;
    private string $linkGithub;
    private string $comentaris;

    public function __construct(string $nom, string $sprint, string $dataEntrega, string $linkGithub, string $comentaris) {
        $this->nom = $nom;
        $this->sprint = $sprint;
        $this->dataEntrega = new DateTime($dataEntrega);
        $this->linkGithub = $linkGithub;
        $this->comentaris = $comentaris;
    }

    public function entregar() {
        echo "L'entrega '" . $this->nom . "' ha estat entregada.\n";
    }

    public function reentregar() {
        echo "L'entrega '" . $this->nom . "' ha estat reentregada.\n";
    }

    public function getDataEntrega(): DateTime {
        return $this->dataEntrega;
    }
}

?>