<?php 
    $tableau_test = [
        'titre' => 'Godzilla',
        'type' => 'film',
    ];
    $tableau_test_2 = [
        'titre' => 'Godzilla 2'
    ];

    function Search(array $tableau_test) : string{
        if(array_key_exists('type', $tableau_test)){
            $searched = $tableau_test['type'];

        }else{
            $searched = 'non renseigne';
        }
        return $searched;
    }

    function NewElement(string $element, array $tableau_test){
        for($i = 0; $i = count($tableau_test); $i++){
            if($tableau_test[$i] == 0){
                array_push($tableau_test, $element);
            }else{
                echo 'tableau complet';
            }
        }
        return $tableau_test;

    }
    $validation = Search($tableau_test_2);
    echo $validation;
    $ajout = NewElement('MIB', $tableau_test);

?>