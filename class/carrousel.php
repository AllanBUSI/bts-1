<?php

class Carrousel {

    private function Image($array) {
        $html = '';
        foreach ($array as $key => $a) {
            if ($key == 0) {
                $html .= '<div class="carousel-item active">
                    <img src="'.$a.'" class="d-block w-100" alt="..." />
                </div>';
            } else {
                $html .= '<div class="carousel-item">
                    <img src="'.$a.'" class="d-block w-100" alt="..." />
                </div>';
            }
        }
        return $html;
    }

    public function Read($array) {
        return '<div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        '.$this->Image($array).'
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>';
    }

}

?>



