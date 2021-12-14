<?php

namespace Imones;

class Validation {
    static public function newCompany($formData){
        $klaidos = [];

        if(empty($formData['name'])) {
            $klaidos['name'] = " 😒❗ Prašome užpildyti pavadinimo lauką ❗😒 ";
        }
        else if(strlen($formData['name']) < 3) {
            $klaidos['name'] = " ❌ Pavadinimas negali būti trumpesnis nei 3 raidės. ❌ ";
        }

        if(empty($formData['code'])) {
            $klaidos['code'] = " 😒❗ Prašome užpildyti įmonės kodo lauką. ❗😒 ";
        }
        else if(strlen($formData['code']) < 5) {
            $klaidos['code'] = " ❌ Įmonės kodas turi būti sudarytas mažiausiai iš 5 skaičių. ❌ ";
        }

        if(empty($formData['pvm_code'])) {
            $klaidos['pvm_code'] = " 😒❗ Prašome užpildyti įmonės  kodo lauką. ❗😒 ";
        }
        else if(strlen($formData['pvm_code']) < 7) {
            $klaidos['pvm_code'] = " ❌ Įmonės pvm kodas turi būti sudarytas mažiausiai iš 7 skaičių. ❌ ";
        }

        if(empty($formData['address'])) {
            $klaidos['address'] = " 😒❗ Prašome užpildyti adreso lauką. ❗😒 ";
        }

        if(empty($formData['phone'])) {
            $klaidos['phone'] = " 😒❗ Prašome užpildyti numerio lauką. ❗😒 ";
        } else {
            $sanitized_phone = filter_var($formData['phone'], FILTER_SANITIZE_NUMBER_INT);
            if(strlen($sanitized_phone) < 9 || strlen($sanitized_phone) > 12) {
                $klaidos['phone'] = " ❌ Numeris turi būti tinkamas ❌ ";
            }
        }

        if(empty($formData['email'])) {
            $klaidos['email'] = " 😒❗ Prašome įvesti savo el. paštą. ❗😒 ";
        }
        else if(!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)){
            $klaidos['email'] = " ❌ El. paštas turi būti tinkamas ❌ ";
        }

        if(empty($formData['activity'])) {
            $klaidos['activity'] = " 😒❗ Prašome užpildyti veiklos lauką. ❗😒 ";
        }
        else if(strlen($formData['activity']) < 3) {
            $klaidos['activity'] = " ❌ Veiklos laukas turi sudaryti iš mažiausiai 3 raidžių. ❌ ";
        }
        
        if(empty($formData['owner'])) {
            $klaidos['owner'] = " 😒❗ Prašome užpildyti vadovo lauką. ❗😒 ";
        }
        else if(strlen($formData['owner']) < 3) {
            $klaidos['owner'] = " ❌ Vadovo laukas turi sudaryti iš mažiausiai 3 raidžių. ❌ ";
        }

        if (!empty($klaidos)) {
            return $klaidos;
        }

        return 'Klaidų nerasta';
    }
}