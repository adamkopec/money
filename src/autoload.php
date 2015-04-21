<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'sebastianbergmann\\money\\aed' => '/currency/AED.php',
                'sebastianbergmann\\money\\afn' => '/currency/AFN.php',
                'sebastianbergmann\\money\\all' => '/currency/ALL.php',
                'sebastianbergmann\\money\\amd' => '/currency/AMD.php',
                'sebastianbergmann\\money\\ang' => '/currency/ANG.php',
                'sebastianbergmann\\money\\aoa' => '/currency/AOA.php',
                'sebastianbergmann\\money\\ars' => '/currency/ARS.php',
                'sebastianbergmann\\money\\aud' => '/currency/AUD.php',
                'sebastianbergmann\\money\\awg' => '/currency/AWG.php',
                'sebastianbergmann\\money\\azn' => '/currency/AZN.php',
                'sebastianbergmann\\money\\bam' => '/currency/BAM.php',
                'sebastianbergmann\\money\\bbd' => '/currency/BBD.php',
                'sebastianbergmann\\money\\bdt' => '/currency/BDT.php',
                'sebastianbergmann\\money\\bgn' => '/currency/BGN.php',
                'sebastianbergmann\\money\\bhd' => '/currency/BHD.php',
                'sebastianbergmann\\money\\bif' => '/currency/BIF.php',
                'sebastianbergmann\\money\\bmd' => '/currency/BMD.php',
                'sebastianbergmann\\money\\bnd' => '/currency/BND.php',
                'sebastianbergmann\\money\\bob' => '/currency/BOB.php',
                'sebastianbergmann\\money\\bov' => '/currency/BOV.php',
                'sebastianbergmann\\money\\brl' => '/currency/BRL.php',
                'sebastianbergmann\\money\\bsd' => '/currency/BSD.php',
                'sebastianbergmann\\money\\btn' => '/currency/BTN.php',
                'sebastianbergmann\\money\\bwp' => '/currency/BWP.php',
                'sebastianbergmann\\money\\byr' => '/currency/BYR.php',
                'sebastianbergmann\\money\\bzd' => '/currency/BZD.php',
                'sebastianbergmann\\money\\cad' => '/currency/CAD.php',
                'sebastianbergmann\\money\\cdf' => '/currency/CDF.php',
                'sebastianbergmann\\money\\che' => '/currency/CHE.php',
                'sebastianbergmann\\money\\chf' => '/currency/CHF.php',
                'sebastianbergmann\\money\\chw' => '/currency/CHW.php',
                'sebastianbergmann\\money\\clf' => '/currency/CLF.php',
                'sebastianbergmann\\money\\clp' => '/currency/CLP.php',
                'sebastianbergmann\\money\\cny' => '/currency/CNY.php',
                'sebastianbergmann\\money\\cop' => '/currency/COP.php',
                'sebastianbergmann\\money\\cou' => '/currency/COU.php',
                'sebastianbergmann\\money\\crc' => '/currency/CRC.php',
                'sebastianbergmann\\money\\cuc' => '/currency/CUC.php',
                'sebastianbergmann\\money\\cup' => '/currency/CUP.php',
                'sebastianbergmann\\money\\currency' => '/Currency.php',
                'sebastianbergmann\\money\\currencymismatchexception' => '/exceptions/CurrencyMismatchException.php',
                'sebastianbergmann\\money\\cve' => '/currency/CVE.php',
                'sebastianbergmann\\money\\czk' => '/currency/CZK.php',
                'sebastianbergmann\\money\\djf' => '/currency/DJF.php',
                'sebastianbergmann\\money\\dkk' => '/currency/DKK.php',
                'sebastianbergmann\\money\\dop' => '/currency/DOP.php',
                'sebastianbergmann\\money\\dzd' => '/currency/DZD.php',
                'sebastianbergmann\\money\\egp' => '/currency/EGP.php',
                'sebastianbergmann\\money\\ern' => '/currency/ERN.php',
                'sebastianbergmann\\money\\etb' => '/currency/ETB.php',
                'sebastianbergmann\\money\\eur' => '/currency/EUR.php',
                'sebastianbergmann\\money\\exception' => '/interfaces/Exception.php',
                'sebastianbergmann\\money\\fjd' => '/currency/FJD.php',
                'sebastianbergmann\\money\\fkp' => '/currency/FKP.php',
                'sebastianbergmann\\money\\formatter' => '/interfaces/Formatter.php',
                'sebastianbergmann\\money\\gbp' => '/currency/GBP.php',
                'sebastianbergmann\\money\\gel' => '/currency/GEL.php',
                'sebastianbergmann\\money\\ghs' => '/currency/GHS.php',
                'sebastianbergmann\\money\\gip' => '/currency/GIP.php',
                'sebastianbergmann\\money\\gmd' => '/currency/GMD.php',
                'sebastianbergmann\\money\\gnf' => '/currency/GNF.php',
                'sebastianbergmann\\money\\gtq' => '/currency/GTQ.php',
                'sebastianbergmann\\money\\gyd' => '/currency/GYD.php',
                'sebastianbergmann\\money\\hkd' => '/currency/HKD.php',
                'sebastianbergmann\\money\\hnl' => '/currency/HNL.php',
                'sebastianbergmann\\money\\hrk' => '/currency/HRK.php',
                'sebastianbergmann\\money\\htg' => '/currency/HTG.php',
                'sebastianbergmann\\money\\huf' => '/currency/HUF.php',
                'sebastianbergmann\\money\\idr' => '/currency/IDR.php',
                'sebastianbergmann\\money\\ils' => '/currency/ILS.php',
                'sebastianbergmann\\money\\inr' => '/currency/INR.php',
                'sebastianbergmann\\money\\intlformatter' => '/IntlFormatter.php',
                'sebastianbergmann\\money\\invalidargumentexception' => '/exceptions/InvalidArgumentException.php',
                'sebastianbergmann\\money\\iqd' => '/currency/IQD.php',
                'sebastianbergmann\\money\\irr' => '/currency/IRR.php',
                'sebastianbergmann\\money\\isk' => '/currency/ISK.php',
                'sebastianbergmann\\money\\jmd' => '/currency/JMD.php',
                'sebastianbergmann\\money\\jod' => '/currency/JOD.php',
                'sebastianbergmann\\money\\jpy' => '/currency/JPY.php',
                'sebastianbergmann\\money\\kes' => '/currency/KES.php',
                'sebastianbergmann\\money\\kgs' => '/currency/KGS.php',
                'sebastianbergmann\\money\\khr' => '/currency/KHR.php',
                'sebastianbergmann\\money\\kmf' => '/currency/KMF.php',
                'sebastianbergmann\\money\\kpw' => '/currency/KPW.php',
                'sebastianbergmann\\money\\krw' => '/currency/KRW.php',
                'sebastianbergmann\\money\\kwd' => '/currency/KWD.php',
                'sebastianbergmann\\money\\kyd' => '/currency/KYD.php',
                'sebastianbergmann\\money\\kzt' => '/currency/KZT.php',
                'sebastianbergmann\\money\\lak' => '/currency/LAK.php',
                'sebastianbergmann\\money\\lbp' => '/currency/LBP.php',
                'sebastianbergmann\\money\\lkr' => '/currency/LKR.php',
                'sebastianbergmann\\money\\lrd' => '/currency/LRD.php',
                'sebastianbergmann\\money\\lsl' => '/currency/LSL.php',
                'sebastianbergmann\\money\\ltl' => '/currency/LTL.php',
                'sebastianbergmann\\money\\lvl' => '/currency/LVL.php',
                'sebastianbergmann\\money\\lyd' => '/currency/LYD.php',
                'sebastianbergmann\\money\\mad' => '/currency/MAD.php',
                'sebastianbergmann\\money\\mdl' => '/currency/MDL.php',
                'sebastianbergmann\\money\\mga' => '/currency/MGA.php',
                'sebastianbergmann\\money\\mkd' => '/currency/MKD.php',
                'sebastianbergmann\\money\\mmk' => '/currency/MMK.php',
                'sebastianbergmann\\money\\mnt' => '/currency/MNT.php',
                'sebastianbergmann\\money\\money' => '/Money.php',
                'sebastianbergmann\\money\\mop' => '/currency/MOP.php',
                'sebastianbergmann\\money\\mro' => '/currency/MRO.php',
                'sebastianbergmann\\money\\mur' => '/currency/MUR.php',
                'sebastianbergmann\\money\\mvr' => '/currency/MVR.php',
                'sebastianbergmann\\money\\mwk' => '/currency/MWK.php',
                'sebastianbergmann\\money\\mxn' => '/currency/MXN.php',
                'sebastianbergmann\\money\\mxv' => '/currency/MXV.php',
                'sebastianbergmann\\money\\myr' => '/currency/MYR.php',
                'sebastianbergmann\\money\\mzn' => '/currency/MZN.php',
                'sebastianbergmann\\money\\nad' => '/currency/NAD.php',
                'sebastianbergmann\\money\\ngn' => '/currency/NGN.php',
                'sebastianbergmann\\money\\nio' => '/currency/NIO.php',
                'sebastianbergmann\\money\\nok' => '/currency/NOK.php',
                'sebastianbergmann\\money\\npr' => '/currency/NPR.php',
                'sebastianbergmann\\money\\nullcurrency' => '/NullCurrency.php',
                'sebastianbergmann\\money\\nzd' => '/currency/NZD.php',
                'sebastianbergmann\\money\\omr' => '/currency/OMR.php',
                'sebastianbergmann\\money\\overflowexception' => '/exceptions/OverflowException.php',
                'sebastianbergmann\\money\\pab' => '/currency/PAB.php',
                'sebastianbergmann\\money\\pen' => '/currency/PEN.php',
                'sebastianbergmann\\money\\pgk' => '/currency/PGK.php',
                'sebastianbergmann\\money\\php' => '/currency/PHP.php',
                'sebastianbergmann\\money\\pkr' => '/currency/PKR.php',
                'sebastianbergmann\\money\\pln' => '/currency/PLN.php',
                'sebastianbergmann\\money\\pyg' => '/currency/PYG.php',
                'sebastianbergmann\\money\\qar' => '/currency/QAR.php',
                'sebastianbergmann\\money\\ron' => '/currency/RON.php',
                'sebastianbergmann\\money\\rsd' => '/currency/RSD.php',
                'sebastianbergmann\\money\\rub' => '/currency/RUB.php',
                'sebastianbergmann\\money\\rwf' => '/currency/RWF.php',
                'sebastianbergmann\\money\\sar' => '/currency/SAR.php',
                'sebastianbergmann\\money\\sbd' => '/currency/SBD.php',
                'sebastianbergmann\\money\\scr' => '/currency/SCR.php',
                'sebastianbergmann\\money\\sdg' => '/currency/SDG.php',
                'sebastianbergmann\\money\\sek' => '/currency/SEK.php',
                'sebastianbergmann\\money\\sgd' => '/currency/SGD.php',
                'sebastianbergmann\\money\\shp' => '/currency/SHP.php',
                'sebastianbergmann\\money\\sll' => '/currency/SLL.php',
                'sebastianbergmann\\money\\sos' => '/currency/SOS.php',
                'sebastianbergmann\\money\\srd' => '/currency/SRD.php',
                'sebastianbergmann\\money\\ssp' => '/currency/SSP.php',
                'sebastianbergmann\\money\\std' => '/currency/STD.php',
                'sebastianbergmann\\money\\svc' => '/currency/SVC.php',
                'sebastianbergmann\\money\\syp' => '/currency/SYP.php',
                'sebastianbergmann\\money\\szl' => '/currency/SZL.php',
                'sebastianbergmann\\money\\thb' => '/currency/THB.php',
                'sebastianbergmann\\money\\tjs' => '/currency/TJS.php',
                'sebastianbergmann\\money\\tmt' => '/currency/TMT.php',
                'sebastianbergmann\\money\\tnd' => '/currency/TND.php',
                'sebastianbergmann\\money\\top' => '/currency/TOP.php',
                'sebastianbergmann\\money\\ttd' => '/currency/TTD.php',
                'sebastianbergmann\\money\\twd' => '/currency/TWD.php',
                'sebastianbergmann\\money\\tzs' => '/currency/TZS.php',
                'sebastianbergmann\\money\\uah' => '/currency/UAH.php',
                'sebastianbergmann\\money\\ugx' => '/currency/UGX.php',
                'sebastianbergmann\\money\\usd' => '/currency/USD.php',
                'sebastianbergmann\\money\\usn' => '/currency/USN.php',
                'sebastianbergmann\\money\\uss' => '/currency/USS.php',
                'sebastianbergmann\\money\\uyi' => '/currency/UYI.php',
                'sebastianbergmann\\money\\uyu' => '/currency/UYU.php',
                'sebastianbergmann\\money\\uzs' => '/currency/UZS.php',
                'sebastianbergmann\\money\\vef' => '/currency/VEF.php',
                'sebastianbergmann\\money\\vnd' => '/currency/VND.php',
                'sebastianbergmann\\money\\vuv' => '/currency/VUV.php',
                'sebastianbergmann\\money\\wst' => '/currency/WST.php',
                'sebastianbergmann\\money\\xaf' => '/currency/XAF.php',
                'sebastianbergmann\\money\\xag' => '/currency/XAG.php',
                'sebastianbergmann\\money\\xau' => '/currency/XAU.php',
                'sebastianbergmann\\money\\xba' => '/currency/XBA.php',
                'sebastianbergmann\\money\\xbb' => '/currency/XBB.php',
                'sebastianbergmann\\money\\xbc' => '/currency/XBC.php',
                'sebastianbergmann\\money\\xbd' => '/currency/XBD.php',
                'sebastianbergmann\\money\\xcd' => '/currency/XCD.php',
                'sebastianbergmann\\money\\xdr' => '/currency/XDR.php',
                'sebastianbergmann\\money\\xfu' => '/currency/XFU.php',
                'sebastianbergmann\\money\\xof' => '/currency/XOF.php',
                'sebastianbergmann\\money\\xpd' => '/currency/XPD.php',
                'sebastianbergmann\\money\\xpf' => '/currency/XPF.php',
                'sebastianbergmann\\money\\xpt' => '/currency/XPT.php',
                'sebastianbergmann\\money\\xsu' => '/currency/XSU.php',
                'sebastianbergmann\\money\\xts' => '/currency/XTS.php',
                'sebastianbergmann\\money\\xua' => '/currency/XUA.php',
                'sebastianbergmann\\money\\xxx' => '/currency/XXX.php',
                'sebastianbergmann\\money\\yer' => '/currency/YER.php',
                'sebastianbergmann\\money\\zar' => '/currency/ZAR.php',
                'sebastianbergmann\\money\\zeromoney' => '/ZeroMoney.php',
                'sebastianbergmann\\money\\zmw' => '/currency/ZMW.php',
                'sebastianbergmann\\money\\zwl' => '/currency/ZWL.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
