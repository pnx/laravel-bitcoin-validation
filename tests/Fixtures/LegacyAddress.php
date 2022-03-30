<?php

namespace Tests\Fixtures;

class LegacyAddress
{
    public static function valid()
    {
        return [
            [ "15CUvW3wCfkNSQWBvAkdyQ2x5g9z9y89SU" ],
            [ "1CSp1St6CLJuZ5aKWStSp3XWqk15F8r7Yo" ],
            [ "16nYrNeAHUwE1YWohAkHNCMu6jhdZVpcDY" ],
            [ "1FoPEPr7czNRbbpUi2d5gb1tbLeXydn43s" ],
            [ "1C7UfBKBadRTdfZDCYnQt2wL7wykcTrJqt" ],
            [ "12imMNxDuLE9gRTDU2ebCboVa8nUy6hoDT" ],
            [ "1FuR4NiDxuzZm55FeEAoE5DtYeA3oHUDWb" ],
            [ "1KsboeLP5wwqGeSmQfFZ9kTSxbM1VRXb5k" ],
            [ "18epSLx8Db9DZxD612vdRRH2cgjs4CRpKV" ],
            [ "18FfUgfG72BAGmdHePX4SGzAVAwjUeko7Z" ],
            [ "1GsiJgNFUXGZtVE79ksNNEbb4PmRgfVYvs" ],
            [ "1JemGfmoCL7kM1RhThBhsZyjPMZT4L4iXF" ],
            [ "1PKCTQtSLBXgNJmGyq3zfYaAzCqSSpXRWh" ],
            [ "13wYMJxQT1rPBhDwo9rAAEDPeyb5r7HL9A" ],
            [ "1peAk28KAoBMZGoN8TCL9yfLS3xmEeKtD"  ],
            [ "1H19iM8L87wfymvNsvYKukL5rGiDTwv1Km" ],
            [ "1PfcwCW75ivYVHrqyZ3BBpryLepyKUbKBW" ],
            [ "1NRbLEKdmA8YNP1gvATYBZ4E9c9FPJ9W3i" ],
            [ "18iPWK7WZBB3GvfiEuLtUcV1bXLLsbwV5S" ],
            [ "12BAdsXQ74Kd5DLdfWMWJXq9Tg9R4GXequ" ],
            [ "14UpE4ME7LHihJokhMiHruQp4eR2UQQdK6" ],
            [ "1N8feCqPxS6WvpyocBKAJPUfHbu5GXRNAi" ],
            [ "16fbquUTrKFQ2kmz6vKNnS2QDVtgS2Cgpu" ],
            [ "1QHUpAbEWX4sRpYasyTvDU7RkRijabuiS3" ],
            [ "1BoAxpeBFBb86h8YbpiMqEXxHLaewnxty7" ],
            [ "1PDEPHcj2ySNgon5mmnKQpGnr1ZanU9Zat" ],
            [ "1NpShRAijetSvWttC1uDY7FiLzhFaEp4vj" ],
            [ "14zvfGdA4osNLueE7b7uM2StuSmouV4f5s" ],
            [ "15LXCXWLTcQUWas7YiMF53T35DeCNvbEP4" ],
            [ "1GFSKH1QjyF3pWdKHPaJRjUMiHGkeWjwXm" ],
            [ "1Dd8tbZWZEcwM4nafB33sVVeAtojrB2D9g" ],
            [ "12rbgEkygjiqVyGjV2x5DMpDNfztSSU4pP" ],
            [ "1DgU51Y5dgdVvGaiYkCCVqX28Kya71WMA8" ],
            [ "1AKqumLRfpUqsPFffmg5b1a5LcUfk9SXcq" ],
            [ "1Jp3sx6xvvHwcWYqQZFLeADV3Zp3PPqKNX" ],
            [ "1B9sZEiNxeKT9qcn54m32okhah4xWoSpeb" ],
            [ "1DrGJAR7Pk3MA9M4roL8ec7xSSbjabpm7w" ],
            [ "1FNgs3qoEgGGTMQMRf2Edasae9LPUjRZLV" ],
            [ "1N7fkovjxoWoSgmL6iWenR62qKPf6xmznR" ],
            [ "1AidLDn7ffwbggdvq9VcKotbDcm1rvKq1N" ],
            [ "14vD2QgNbvSBWrZ9s5vCBrPe9zMRENowyH" ],
            [ "1AHWp5HyYZZiCAn8Q3JmKvooARwQu2U5Eu" ],
            [ "145aivecAj7RmequAv78ucpvezoVpX6WF9" ],
            [ "1N1F3V6tW56z7Hov6uPjkQhWDrKQDVUn9j" ],
            [ "1K7bdYXiPszFKy7za2mVsm7nhrLWKVkoXj" ],
            [ "13yQrpmPEbpE3iCvXGGSJos6E1eVVrKoKE" ],
            [ "1QBMjgsjCLMBPhn9yx89h4ZdP8KYvpnB2J" ],
            [ "176rAtCyw6jSCeiVvF2pa9WV4phNkpaLqH" ],
            [ "1PoKHrgJE6PCgrdTtpwe8PuxJF5ezhuHKo" ],
            [ "1F66ktrehWHgqweyojsF6WXfv7azRwdzkd" ]
        ];
    }

    public static function invalid() {
        return [
            [ "1AiZwiByRizj98ZpUbWZrCkPWkK31m1TA7" ],
            [ "1CNDhvYPkv95TJX9b4BzmhiKNPubndDMTh" ],
            [ "1Ju3Mt2yXFh8VWge9fuUzZv4rxXZhKp1ZU" ],
            [ "1LVmHd8EYUt6HCAB79CjjsVjSr6q8nvjzW" ],
            [ "1DrpgE9LKrDkmYPm8iyDxwBJ2UGEuPeH8G" ],
            [ "17jXCAP4KcGhbwMWHtpSiApiSmP2d36u8C" ],
            [ "1MjwRkcWyjpL6YA7XmZAPYTHNRsACYKWnh" ],
            [ "15URrsXxyx9ohWdofxeEUhBmZhnPx55MWp" ],
            [ "1QHLwsccPNuvhR8zPiaNRfkU9pHyGi9Cmi" ],
            [ "19sZGtkrACD5EgryNYjGvLQ3mLvWCGcZkf" ],
            [ "1EqAPiE4NMTws1fetDRT8kwVNED9AsLZLZ" ],
            [ "1EaLRCxz43PNmWX4HfGJvcnY1ptrTdoPKG" ],
            [ "1ENjy3sFxBacoKra5PNVXSz2dJAW3EA8GX" ],
            [ "1LEiGh68DV633YkcVSxne4ePujJWQTL4ds" ],
            [ "167SEEV5bL3UBNEmbpXgpfTaZ6GAkXpkq5" ],
            [ "1HVPAebQXBzXZ1o9hssQp8GrhTT4kX5aVe" ],
            [ "1Q2vDggWmevqQg4NzseVwUwVuPR28rkswh" ],
            [ "1BL8jGRAHdMvjAb78x6TYQjuHosdNZSuSV" ],
            [ "1JYV9CXjUL7YoeyRKMdXp2YsEs7PsG9gxj" ],
            [ "13sc2fDNVUCZBWngK6Ca8cH7VUkHodGwYQ" ],
            [ "18NPeFUyLJBEV2YE57tP4cfDU86u1ibJJ6" ],
            [ "1CgsDMmtxCKyMhw7QaC9x1KYM6UhFcmcxb" ],
            [ "14wsPsTkedZ8xYohnFs23jNv7dbeKqy9BR9S" ]
        ];
    }
}
