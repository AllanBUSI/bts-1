<?php 

class Form {
    
    public function Input($nom, $type, $class, $placeholder) {
        echo "
            <input 
                name=".$nom."
                class=".$class."
                type=".$type."
                placeholder=".$placeholder."
            />
        ";
    }
}

?> 