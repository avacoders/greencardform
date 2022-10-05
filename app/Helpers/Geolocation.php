<?php


namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class Geolocation
{

    public function Get_Address_From_Google_Maps($lat, $lon)
    {

        $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lon&key=AIzaSyBt7FxUVsbS3kMY3nnBFV7kFvFm7XdrNvM";
    
// Make the HTTP request
        $data = @file_get_contents($url);

// Parse the json response
        $jsondata = json_decode($data, true);


// If the json data is invalid, return empty array
        if (!$this->check_status($jsondata)) return array();

//        $address = array(
//            'country' => $this->google_getCountry($jsondata),
//            'province' => $this->google_getProvince($jsondata),
//            'city' => $this->google_getCity($jsondata),
//            'street' => $this->google_getStreet($jsondata),
//        );

        return $this->getText($jsondata['results']);
//        return  $this->google_getDistrict($jsondata) ||  $this->google_getStreet($jsondata) ?  $this->google_getDistrict($jsondata). ", " .  $this->google_getStreet($jsondata)  : "NOMA'LUM";
    }

    public function getText($data){
        $text = "";
        foreach ($data as $item) {
            if (is_array($item) && $this->Find_Long_Name_Given_Type("sublocality_level_1", $item["address_components"])
            && $this->Find_Long_Name_Given_Type("route", $item["address_components"]))
            {
                $text  = $this->Find_Long_Name_Given_Type("sublocality_level_1", $item["address_components"]). ", " .$this->Find_Long_Name_Given_Type("route", $item["address_components"]);
                return  $text;
            }

        }

        return "Nomalum";
    }



    public function check_status($jsondata)
    {
        if ($jsondata["status"] == "OK") return true;
        return false;
    }

    /*
    * Given Google Geocode json, return the value in the specified element of the array
    */

    public function google_getCountry($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("country", $jsondata["results"][4]["address_components"]);
    }

    public function google_getProvince($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("administrative_area_level_1", $jsondata["results"][0]["address_components"], true);
    }

    public function google_getCity($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("locality", $jsondata["results"][0]["address_components"]);
    }

    public function google_getStreet($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("street_number", $jsondata["results"][3]["address_components"]) . ' ' . $this->Find_Long_Name_Given_Type("route", $jsondata["results"][3]["address_components"]);
    }

    public function google_getPostalCode($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("postal_code", $jsondata["results"][0]["address_components"]);
    }

    public function google_getCountryCode($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("country", $jsondata["results"][0]["address_components"], true);
    }

    public function google_getDistrict($jsondata)
    {
        return $this->Find_Long_Name_Given_Type("sublocality_level_1", $jsondata["results"][3]["address_components"], true);
    }

    public function google_getAddress($jsondata)
    {
        return $jsondata["results"][0]["formatted_address"];
    }

    public function Find_Long_Name_Given_Type($type, $array, $short_name = false)
    {
        foreach ($array as $value) {
            if (in_array($type, $value["types"])) {
                if ($short_name)
                    return $value["short_name"];
                return $value["long_name"];
            }
        }
    }

}
