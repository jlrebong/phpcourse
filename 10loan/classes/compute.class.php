<?php

class Compute {
    private $terms = [
        ['term' => '12', 'value' => 0],
        ['term' => '18', 'value' => 0],
        ['term' => '24', 'value' => 0],
        ['term' => '30', 'value' => 0],
        ['term' => '36', 'value' => 0],
        
    ];

    private $interest='1.14';

    // Constructor with property promotion
    public function __construct(private $loan_amount = 0) {
    }

    public function computeInstallment() {
        $totalAmount = $this->loan_amount * $this->interest;

        foreach ($this->terms as $key=>$term) {
            $monthly = $totalAmount / $term['term'];
            $this->terms[$key]['value'] = $monthly;
        }
    }

    public function getLoanDetails() {
        return $this->terms;
    }


}