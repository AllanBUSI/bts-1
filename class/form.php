<?php 

class Form {
    
    public function Input($nom, $type, $class, $placeholder, $valeur) {
        echo '
            <input 
                name="'.$nom.'"
                class="'.$class.'"
                type="'.$type.'"
                value="'.$valeur.'"
                placeholder="'.$placeholder.'"
            />
        ';
    }
}

?> 