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
    $validation = Search($tableau_test_2);
    echo $validation;

?>