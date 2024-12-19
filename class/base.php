<?php 

class Base {

    public function Title($title) {
        return "<title>".$title."</title>";
    }

    public function Liste($array) {
        foreach ($array as $a) {
            echo "<h1>".$a."</h1>";
        }
    }

    public function Table($header, $data) {
        echo "<table><tr>";
        
        foreach ($header as $a) {
            echo "<th>".$a."</th>";
        }
                
        echo "</tr>";

        foreach ($data as $a) {
            echo "<tr>";
            foreach ($a as $d) {
                echo "<td>".$d."</td>";
            }
            echo "</tr>";
        } 
        
        echo "</table>";
    }
}