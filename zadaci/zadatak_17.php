<?php
    function prostBroj($broj): bool {
        if ($broj < 2) {
            return false;
        }
        
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) {
                return false;
            }
        }
        
        return true;
    }
    
    var_dump(prostBroj(7));
    var_dump(prostBroj(10));
?>
