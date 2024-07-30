<?php
class PlansVacacionals {
    private string $llocActivitat;
    private DateTime $data;
    private string $nom;
    private PlansVacacionalsType $tipus;


    public function __construct(string $llocActivitat, string $data, string $nom, PlansVacacionalsType $tipus) {
        $this->llocActivitat = $llocActivitat;
        $this->data = new DateTime($data);
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function realitzar(){
        echo "Activitat ". $this->nom ." realitzada al lloc ". $this->llocActivitat. ".\n";
    }

    public function anular() {
        echo "L'activitat '" . $this->nom . "' ha estat anul·lada.\n";
    }

    public function getData(): DateTime {
        return $this->data;
    }
}



?>