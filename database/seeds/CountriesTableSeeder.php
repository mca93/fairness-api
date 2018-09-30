<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country;

        $country->name = "Afghanistan";
        $country->country_code = '93';
        $country->iso_code = 'AF / AFG';
        $country->business_status = 'High Risk';
        $country->save();
        
        $country = new Country;

        $country->name = "Albania";
        $country->country_code = '355';
        $country->iso_code = 'AL / ALB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Algeria";
        $country->country_code = '213';
        $country->iso_code = 'DZ / DZA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "American Samoa";
        $country->country_code = '1-684';
        $country->iso_code = 'AS / ASM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Andorra";
        $country->country_code = '376';
        $country->iso_code = 'AD / AND';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Angola";
        $country->country_code = '244';
        $country->iso_code = 'AO / AGO';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Anguilla";
        $country->country_code = '1-264';
        $country->iso_code = 'AI / AIA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "American Samoa";
        $country->country_code = '1-684';
        $country->iso_code = 'AS / ASM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Antarctica";
        $country->country_code = '642';
        $country->iso_code = 'AQ / ATA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Antigua and Barbuda";
        $country->country_code = '1-268';
        $country->iso_code = 'AG / ATG';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Argentina";
        $country->country_code = '54';
        $country->iso_code = 'AR / ARG';
        $country->business_status = 'Good';
        $country->save();
        
        $country = new Country;

        $country->name = "Armenia";
        $country->country_code = '374';
        $country->iso_code = 'AM / ARM';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Aruba";
        $country->country_code = '297';
        $country->iso_code = 'AW / ABW';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Australia";
        $country->country_code = '61';
        $country->iso_code = 'AU / AUS';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Austria";
        $country->country_code = '43';
        $country->iso_code = 'AT / AUT';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Azerbaijan";
        $country->country_code = '994';
        $country->iso_code = 'AZ / AZE';
        $country->business_status = 'Good';
        $country->save();
        
        $country = new Country;

        $country->name = "Bahamas";
        $country->country_code = '1-242';
        $country->iso_code = 'BS / BHS';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bahamas";
        $country->country_code = '1-242';
        $country->iso_code = 'BS / BHS';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bahrain";
        $country->country_code = '973';
        $country->iso_code = 'BH / BHR';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bangladesh";
        $country->country_code = '880';
        $country->iso_code = 'BD / BGD';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Barbados";
        $country->country_code = '1-246';
        $country->iso_code = 'BB / BRB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Belarus";
        $country->country_code = '375';
        $country->iso_code = 'BY / BLR';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Belgium";
        $country->country_code = '32';
        $country->iso_code = 'BE / BEL';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Belize";
        $country->country_code = '501';
        $country->iso_code = 'BZ / BLZ';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Benin";
        $country->country_code = '229';
        $country->iso_code = 'BJ / BEN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bermuda";
        $country->country_code = '1-441';
        $country->iso_code = 'BM / BMU';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bhutan";
        $country->country_code = '975';
        $country->iso_code = 'BT / BTN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bolivia";
        $country->country_code = '591';
        $country->iso_code = 'BO / BOL';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bosnia and Herzegovina";
        $country->country_code = '387';
        $country->iso_code = 'BA / BIH';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Botswana";
        $country->country_code = '267';
        $country->iso_code = 'BW / BWA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Brazil";
        $country->country_code = '55';
        $country->iso_code = 'BR/ BRA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "British Indian Ocean Territory";
        $country->country_code = '246';
        $country->iso_code = 'IO / IOT';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "British Virgin Islands";
        $country->country_code = '1-284';
        $country->iso_code = 'VG / VGB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Brunei";
        $country->country_code = '673';
        $country->iso_code = 'BN / BRN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Bulgaria";
        $country->country_code = '359';
        $country->iso_code = 'BG / BGR';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Burkina Faso";
        $country->country_code = '226';
        $country->iso_code = 'BF/ BFA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Burundi";
        $country->country_code = '257';
        $country->iso_code = 'BI / BDI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cambodia";
        $country->country_code = '855';
        $country->iso_code = 'KH / KHM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cameroon";
        $country->country_code = '237';
        $country->iso_code = 'CM / CMR';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Canada";
        $country->country_code = '1';
        $country->iso_code = 'CA / CAN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cape Verde";
        $country->country_code = '238';
        $country->iso_code = 'CV / CPV';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cayman Islands";
        $country->country_code = '1-345';
        $country->iso_code = 'KY / CYM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Central African Republic";
        $country->country_code = '236';
        $country->iso_code = 'CF / CAF';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Chad";
        $country->country_code = '235';
        $country->iso_code = 'TD / TCD';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Chile";
        $country->country_code = '56';
        $country->iso_code = 'CL / CHL';
        $country->business_status = 'Good';
        $country->save();

        
        $country = new Country;

        $country->name = "China";
        $country->country_code = '86';
        $country->iso_code = 'CN / CHN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Christmas Island";
        $country->country_code = '61';
        $country->iso_code = 'CX / CXR';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cocos Islands";
        $country->country_code = '61';
        $country->iso_code = 'CC / CCK';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Colombia";
        $country->country_code = '57';
        $country->iso_code = 'CO / COL';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Comoros";
        $country->country_code = '269';
        $country->iso_code = 'KM / COM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cook Islands";
        $country->country_code = '682';
        $country->iso_code = 'CK / COK';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Costa Rica";
        $country->country_code = '506';
        $country->iso_code = 'CR / CRI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Croatia";
        $country->country_code = '385';
        $country->iso_code = 'HR / HRV';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cuba";
        $country->country_code = '53';
        $country->iso_code = 'CU / CUB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Curacao";
        $country->country_code = '599';
        $country->iso_code = 'CW / CUW';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Cyprus";
        $country->country_code = '357';
        $country->iso_code = 'CY / CYP';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Czech Republic";
        $country->country_code = '420';
        $country->iso_code = 'CZ / CZE';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Democratic Republic of the Congo";
        $country->country_code = '243';
        $country->iso_code = 'CD / COD';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Denmark";
        $country->country_code = '45';
        $country->iso_code = 'DK / DNK';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Djibouti";
        $country->country_code = '253';
        $country->iso_code = 'DJ / DJI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Dominica";
        $country->country_code = '1-767';
        $country->iso_code = 'DM / DMA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Dominican Republic";
        $country->country_code = '1-809, 1-829, 1-849';
        $country->iso_code = 'DO / DOM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "East Timor";
        $country->country_code = '670';
        $country->iso_code = 'TL / TLS';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Ecuador";
        $country->country_code = '593';
        $country->iso_code = 'EC / ECU';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Egypt";
        $country->country_code = '20';
        $country->iso_code = 'EG / EGY';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "El Salvador";
        $country->country_code = '503';
        $country->iso_code = 'SV / SLV';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Equatorial Guinea";
        $country->country_code = '240';
        $country->iso_code = 'GQ / GNQ';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Eritrea";
        $country->country_code = '291';
        $country->iso_code = 'ER / ERI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Estonia";
        $country->country_code = '372';
        $country->iso_code = 'EE / EST';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Ethiopia";
        $country->country_code = '251';
        $country->iso_code = 'ET / ETH';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Falkland Islands";
        $country->country_code = '500';
        $country->iso_code = 'FK / FLK';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Faroe Islands";
        $country->country_code = '298';
        $country->iso_code = 'FO / FRO';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Fiji";
        $country->country_code = '679';
        $country->iso_code = 'FJ / FJI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Finland";
        $country->country_code = '358';
        $country->iso_code = 'FI / FIN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "France";
        $country->country_code = '33';
        $country->iso_code = 'FR / FRA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "French Polynesia";
        $country->country_code = '689';
        $country->iso_code = 'PF / PYF';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Gabon";
        $country->country_code = '241';
        $country->iso_code = 'GA / GAB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Gambia";
        $country->country_code = '220';
        $country->iso_code = 'GM / GMB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Georgia";
        $country->country_code = '995';
        $country->iso_code = 'GE / GEO';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Germany";
        $country->country_code = '49';
        $country->iso_code = 'DE / DEU';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Ghana";
        $country->country_code = '233';
        $country->iso_code = 'GH / GHA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Gibraltar";
        $country->country_code = '350';
        $country->iso_code = 'GI / GIB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Greece";
        $country->country_code = '30';
        $country->iso_code = 'GR / GRC';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Greenland";
        $country->country_code = '299';
        $country->iso_code = 'GL / GRL';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Grenada";
        $country->country_code = '1-473';
        $country->iso_code = 'GD / GRD';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guam";
        $country->country_code = '1-671';
        $country->iso_code = 'GU / GUM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guatemala";
        $country->country_code = '502';
        $country->iso_code = '	GT / GTM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guernsey";
        $country->country_code = '44-1481';
        $country->iso_code = 'GG / GGY';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guinea";
        $country->country_code = '224';
        $country->iso_code = 'GN / GIN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guinea-Bissau";
        $country->country_code = '245';
        $country->iso_code = 'GW / GNB';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Guyana";
        $country->country_code = '592';
        $country->iso_code = 'GY / GUY';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Haiti";
        $country->country_code = '509';
        $country->iso_code = 'HT / HTI';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Honduras";
        $country->country_code = '504';
        $country->iso_code = 'HN / HND';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Hong Kong";
        $country->country_code = '852';
        $country->iso_code = 'HK / HKG';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Hungary";
        $country->country_code = '36';
        $country->iso_code = 'HU / HUN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Iceland";
        $country->country_code = '354';
        $country->iso_code = 'IS / ISL';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "India";
        $country->country_code = '91';
        $country->iso_code = 'IN / IND';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Indonesia";
        $country->country_code = '62';
        $country->iso_code = 'ID / IDN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Iran";
        $country->country_code = '98';
        $country->iso_code = 'IR / IRN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Iraq";
        $country->country_code = '964';
        $country->iso_code = 'IQ / IRQ';
        $country->business_status = 'Good';
        $country->save();
        
        $country = new Country;

        $country->name = "Ireland";
        $country->country_code = '353';
        $country->iso_code = 'IE / IRL';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Isle of Man";
        $country->country_code = '44-1624';
        $country->iso_code = 'IM / IMN';
        $country->business_status = 'Good';
        $country->save();
        $country = new Country;

        $country->name = "Israel";
        $country->country_code = '972';
        $country->iso_code = 'IL / ISR';
        $country->business_status = 'High Risk';
        $country->save();

        $country = new Country;

        $country->name = "Mozambique";
        $country->country_code = '258';
        $country->iso_code = 'MZ / MOZ';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Italy";
        $country->country_code = '39';
        $country->iso_code = 'IT / ITA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Ivory Coast";
        $country->country_code = '225';
        $country->iso_code = '	CI / CIV';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Jamaica";
        $country->country_code = '1-876';
        $country->iso_code = 'JM / JAM';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Japan";
        $country->country_code = '81';
        $country->iso_code = 'JP / JPN';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Jersey";
        $country->country_code = '44-1534';
        $country->iso_code = 'JE / JEY';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "Jordan";
        $country->country_code = '962';
        $country->iso_code = 'JO / JOR';
        $country->business_status = 'Good';
        $country->save();


        $country = new Country;

        $country->name = "Mozambique";
        $country->country_code = '258';
        $country->iso_code = 'MZ / MOZ';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name = "United States of America";
        $country->country_code = '1';
        $country->iso_code = 'US / USA';
        $country->business_status = 'Good';
        $country->save();

        $country = new Country;

        $country->name= "South Africa";
        $country->country_code = '27';
        $country->iso_code = 'ZA / ZAF';
        $country->business_status = 'Good';
        $country->save();

    }
}