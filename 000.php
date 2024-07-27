<?php
declare(strict_types=1);
header("Content-type: application/json");


function getdivisors(int $number): array{
    $divisors = [
        "Number" => $number
    ];
    for($i = 1; $i <= 10; $i++){
        if($number % $i == 0){
            $divisors[$i]['ok'] = true;
            $divisors[$i]['response'] = "$i x ".$number/$i ;
        }else{
            // $divisors[$i] = false;
        }
    }
    return $divisors;
}

echo json_encode(getdivisors(300));

// declare(strict_types=1);




// function getdivisors(int ...$values): array{
//     $divisors = [
//         2 => [],
//         3 => [],
//         5 => [],
//     ];
//     for($i = 0; $i < count($values); $i++){
//         if($values[$i] % 2 === 0){
//             $divisors[2][] = $values[$i];
//         }
//         if($values[$i] % 3 === 0){
//             $divisors[3][] = $values[$i];
//         }
//         if($values[$i] % 5 === 0){
//             $divisors[5][] = $values[$i];
//         }
//     }
//     return $divisors;
// };


// echo json_encode(
//     getdivisors(
//     300, 12,  18,  4,
//     9,   45, 250, 34,
//     100, 25, 415, 27
//     )
// );

