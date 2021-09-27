<?php

function repetitionJ ($nb) {

    for ($b = 1; $b <= $nb; $b++) {
        $r = "<option value='$b'>$b</option>";
        echo $r;
    }
    
}

function repetitionM () {
    echo "
                                <option value='Janvier'>Janvier</option>
                                <option value='Fevrier'>Fevrier</option>
                                <option value='Mars'>Mars</option>
                                <option value='Avril'>Avril</option>
                                <option value='Mai'>Mai</option>
                                <option value='Juin'>Juin</option>
                                <option value='Juillet'>Juillet</option>
                                <option value='Aout'>Août</option>
                                <option value='Septembre'>Septembre</option>
                                <option value='Octobre'>Octobre</option>
                                <option value='Novembre'>Novembre</option>
                                <option value='Decembre'>Decembre</option>
                            ";

}

function repetitionA ($nb) {

    for ($b = 1960; $b <= $nb; $b++) {
        $r = "<option value='$b'>$b</option>";
        echo $r;
    }
    
}