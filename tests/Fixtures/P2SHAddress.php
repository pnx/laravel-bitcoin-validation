<?php

namespace Tests\Fixtures;

class P2SHAddress
{
    public static function valid()
    {
        return [
            [ "38QyqYRSQCKgERmBp8PvwyMgJ82dB59EUp" ],
            [ "3Eso73Ma3jM7LiJ9DoUbaUr5rMVEPwCHxK" ],
            [ "3PWDqsDexzU75ifgti1QWVfvmvo6xv59YE" ],
            [ "39u9WBipftf9UigCietwgo6hETPybkNuun" ],
            [ "3KQ4NarevVhMWkcS5a7ovm9mz6rBWcB4Vf" ],
            [ "38a7yUYeUQorDQLhdC1Douitu2ty7P8jGX" ],
            [ "3PTCTpqoT9n24zNRU1AZRDGbyk4UamVAtN" ],
            [ "3Ltr5VaBiDrhG8Pdp31hXbJtgiKduhdkTn" ],
            [ "3JGCDDmJy3y5aFii1hyn1BtPw3HWNTvaSS" ],
            [ "37NkrNyL2bcUu4X8UgQ8R63Uwhknk3t4Wb" ],
            [ "3EhUESUCqQeDGF6os9cM3RiNSTin5uHbfG" ],
            [ "3Hr84tGFNwYakG3jRzR9eS8N1RE5KsAfbG" ],
            [ "32CvFHBKDJY9D3ZP5kGf9SUcJd7vfkfmJx" ],
            [ "34J7hDR4oVwxkJXgjRbu4TvWLPbVSpcd4x" ],
            [ "39dZrgg5eyECWTdh5eySndmfg2kFW4X7Yx" ],
            [ "3DAr79SHgvdQs5vZfmJZjMcpCuLk1jdK2J" ],
            [ "37W5DF1B34bHW1YvNyYaircmw8NieBCDSh" ],
            [ "3DNNxbb5ahscNoVTJV6ymvNs2FsuhSeLtB" ],
            [ "3JndNeRhEuXAbgMf9PnuKBhKYuk3XVgpSa" ],
            [ "3Mv7UHxvtm5ywxzBPxSta9NKsSEpPVweFU" ],
            [ "35gmLKEuX8peRD1717xRUTvWrusERoyh4J" ],
            [ "3Qd7JRUAcjrrYWTuHSQNrNWo3WqiATdFcQ" ],
            [ "3GsahMsvtqeVECTjFpW5p1U5sUmHybqrDh" ],
            [ "36NHzJhWZEYJauRQpoTnBwJ9NtENtGdYWk" ],
            [ "3NHSU34r6NktkvVLGAQcowCE9fV5xZrKWz" ],
            [ "3LFwPCHWDtPRGaNr879wwtjGB14hWwWHAj" ],
            [ "3Hn3bh13reogi9mUkUG9j7Nx3r9p4FWeXk" ],
            [ "3B3NfKm1Fw52DzgXyMqH8maSadJ7L9vDXE" ],
            [ "3AiN8jA9VCSANApVKLDmyKYazDLSdvpi5i" ],
            [ "3KoQACxujecVDPtDB5K9n1DXtBHUn24dRb" ],
            [ "3Mbrjvubso3M32t9YiZuV2VT5WEwkk2HPH" ],
            [ "3EYkYECYCjsD2nX4RH6rEC7wwchcQHYp2o" ],
            [ "3JYUKMoNnMnSZXZMdJde2DMaoXnoARqhFB" ],
            [ "3ARyZHUWwArbjANjfp8P3mNjJGZN7k8xEk" ],
            [ "3Q1WqijsadjRKhXQ4NQhWP5jBpve52NKmG" ],
            [ "3JNzp8tWdDubQeR6gJXDvodu37gt8R6PbV" ],
            [ "3LhwHUUdgGbzjmh4qEP7Lb4x9Y2TikFkQa" ],
            [ "3BEgSVUtEqnZSAAhF6nmHXNwYDFTb6obVQ" ],
            [ "3E6vFchiHXGHxJjzoMbqmhFnRba89DzLTx" ],
            [ "3P3N5Hqx1MMYnwDnMNSGnMbfEpo8sqti7r" ],
            [ "34ggi82sWNEtAn92m4pqR2ZkT8KH5h7q7T" ],
            [ "39ns7fTS1K78hq8wetXVzeC9XxvRZuVgXY" ],
            [ "37xSBV7bugeLoZh3EGjDKjB1ghZoXX1SZP" ],
            [ "3EmnD4wfW61Gf4hVobidrSJD6Xw17U51TA" ],
            [ "3DhiE3roshp8pLRPRpQ6m7kttvpP1fccQe" ],
            [ "3JDLkCwTrN7Q958Ert7iSzajihs8QDVZ74" ],
            [ "3Nw9Y5vgRj7r981TD14RhTbNncXPHiJKVc" ],
            [ "37Kfb9EwvpemJMb1oiYbg3wrsKZTWiHwF1" ],
            [ "37PdaPYVL64Nho46VU3D72PtLiML4ocHnW" ],
            [ "39X2hAf6BzA5FeehacmqvmEFDtMWd4rTiD" ]
        ];
    }

    public static function invalid()
    {
        return [
            [ '3KS4CkrpFDtkxDFsmbXbD7esjGtXHTZSwt' ],
            [ '39KbnzarmUvDNEV74ayLqEfjCT7dGaswee' ],
            [ "3KuFCViJFMuhJpHDnmS4M4j1LBb2oFEoQQ" ],
            [ "34X4UvekWXeU3jqdi3u75ruwXeantHfant" ],
            [ "3HWDpaSHm8h2ZzEP7jyhWxs7LdMS5fZaog" ],
            [ "3LLdFWPx8ujPb46kPF3agB4tWa29641ioL" ],
            [ "3LU3UtU5T3SC1HVeWnmjrVrSAhbngsBjvT" ],
            [ "3Nf2nZfEtuVMR9kfzn9L2E6Xqi6btHKH7z" ],
            [ "3C9Ln2AxRkY1egDCCA3ExgwxNAbF6zeJyR" ],
            [ "39Xt4gfqP4heBaJ3KqhpX31JUEej4wtJtQ" ],
            [ "3525sZy6GMhH799u9DtJFCpf5qKgtZvLuY" ],
            [ "35zKzv4xcVdTb6chBR4wrnPb9mR3SD5yoH" ],
            [ "3Q9SST7AuXtdfAfR2qEV4GaUi4yeg6tW2R" ],
            [ "3Apw6e5BE3qYiAL8b1Tz6GxFP7P6p3QZFZ" ],
            [ "3CPYMkh8t6ebXQLk6MHrViVA9U5ZNyG62b" ],
            [ "36rbxbU7ouxfRE41JfunSQzgxKyjnUd2Jn" ],
            [ "3BNGYzZqSPs4CDPhWfCVwjnxH511SQrKS7" ],
            [ "36hnUcGGqPXzd6dAmPbx1nEkE9DJjVCM5s" ],
            [ "3HGKQRRh496WE1tgoEYKDiwzW9up4E1Mwx" ],
            [ "3EPWtD8a8UKqhH1V4ajbErr2Gk9BCEwudJ" ],
            [ "3Pk1Kvp632Jk5ChR5fB1QZBz56HnZSuu5f" ],
            [ "3A81i3E9PryJzjCDPkRQxJfw18gtmV5qkF" ]
        ];
    }
}
