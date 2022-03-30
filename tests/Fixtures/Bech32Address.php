<?php

namespace Tests\Fixtures;

class Bech32Address
{
    public static $valid = [
        [ "bc1qrp33g0q5c5txsp9arysrx4k6zdkfs4nce4xj0gdcccefvpysxf3qccfmv3" ],
        [ "bc1qv56hmz7xtvmz677uf7e79q8drx985vlujuunqz" ],
        [ "bc1qka9zjq25wk9vmngg3yaspql9mdygehk4lut363" ],
        [ "bc1qn87dc6aam52ggrnfaafrn989a68m5qngglyrqj" ],
        [ "bc1q2xwakrtme989eh7lpr2pacv7p9tfskum4rtayh" ],
        [ "bc1qypgmc3vm0yudkts7n7n65zd2vfzrjrcdzfmv2p" ],
        [ "bc1qe2gq4hcaftwr8p7mm83tqnh4u66e2qygx4ckd4" ],
        [ "bc1q2dfra3wmhnjpm8s5eucf7jle9y8nwags6yf3ru" ],
        [ "bc1q5udvhxr4awpmx7rxdcnkhkwryradll8zwn3nvt" ],
        [ "bc1qm4qt7sf8wlac3k7mc4cvq7r6jm338dxp3ul7ry" ],
        [ "bc1qna87edplwcvutsc8u3w99cdthjuq93vy57yx3d" ],
        [ "bc1qm6ehe5yamgkmusgrfm2nave9g2vcp99t23ngj9" ],
        [ "bc1qatpytvte35qrqaf3ud9cpwhkltrt77yzwtl5ja" ],
        [ "bc1q84gstytj4xgfdkxeurrx5hqx7uhm9dmfjg68vg" ],
        [ "bc1qph4ara2937swk6y35uj99y63lauv3g4dy7zdvs" ],
        [ "bc1qn7arhnsyy5yc49xynstxqkgpx8pa5395rz4vjn" ],
        [ "bc1qa96m9ckshcg8e2fu6f0ew6uv0zyxc7lv8mpckg" ],
        [ "bc1quzshlhlt8npjqu2aje9tacqw38u7gtukun96ru" ],
        [ "bc1qu34twdnwkh4n0z7t7e6d3jejnjrsf5dpfzn5qz" ],
        [ "bc1q4xu34fscqakazzd3ags50g7rldse0kj4ngdmg5" ],
        [ "bc1qmdycrynz0qttfd0qsgeav8sp3mn7jk9qc7pvrk" ],
        [ "bc1q2qayv0xhc8xh656ggey8jupxacdftxhtm64pcn" ],
        [ "bc1qd2kxtjcsmepqc8s6newzxuyfnnjlnkw8zz44zz" ],
        [ "bc1qns6mer08xpxyp29w6j3dlr6lx4eumdjcskcsdt" ],
        [ "bc1q2s2z2m5huw0x66nkmxnfuf958qr68t4qfymm7k" ],
        [ "bc1qtqjxd6ysvz9wrxx3pndzgtetrrvnftlqh9sqx8" ],
        [ "bc1q4wlm7xcddwdpe65cpvcctgguueafj2z8fjkggt" ],
        [ "bc1qppv8z0h4j98zamzrhgeapwt00te2tlhdnp2c93" ],
        [ "bc1qsn7r34tp84vdw4rurazy9t5gfw20f6ayqjdt7a" ],
        [ "bc1q3m5zjcjfqtmg9tfvmlg6y9v2p7zw6rzsdyahd6" ],
        [ "bc1qk4n8d7uvlmsl92ug3yg0xlzpzuayqdff3xjn02" ],
        [ "bc1qk9rpt0y0m6cl6j9sxqud7tvrp6jdndcjl999zs" ],
        [ "bc1qh0yfg68s45720l7fd6a7gvel5cfg6lgnenmxu5" ],
        [ "bc1qeqqvt6ky2s92mrme3an6ljy46cqde6ac8ugwe7" ],
        [ "bc1qtjst7v7zmdw6rwxsl6f6t3hp76k3zfvdaw50lp" ],
        [ "bc1qgj6t2smznlfs8wjlux9cftk6ucjst63npcj33p" ],
        [ "bc1qy3z0gd6nnjc5g2zrvsjeqfuww3jlf3mq5n540p" ],
        [ "bc1q85mnjz3an3tnak5rqde70y0kmcxtwva4j8sym9" ],
        [ "bc1qxwqajdul9eq52mpx9j8lt6vnpg3vtkkre87wee" ],
        [ "bc1qj2ed2yxk5qsm4rmq34jcsm3ch7z3lachejfmdl" ],
        [ "bc1qrmjlt26yu7n6jkaczsnkqqgn394wgqsjcm56a4" ],
        [ "bc1qxyy52ntk045pf0efuedpdcm9rg8l6js8zhxlw7" ],
        [ "bc1qc58p9nfm29f68y6wjk0wnyr8tx2xlqkhgwazmk" ],
        [ "bc1qyttzcacsd69g2j7z8c5gn23dx9n6r54yymf5p7" ],
        [ "bc1qns3ly6el4njem4y3pdeg38d7w94uvrtscz0fgs" ],
        [ "bc1qemggfdww8jvst9694l7dqhcl420dyaxnhpz5ju" ],
        [ "bc1qx3897pdzsqznxmeklnhwd5rm0k4k3an2ws8rlf" ],
        [ "bc1q9th9mnyvwqudh6ppa0f5sskv7kpr8nqvwp9kjp" ],
        [ "bc1q55rypdtns4emed2h4w0ej5watnctr4nh2th048" ],
        [ "bc1q2pt9fr27fwf83uwm2d0dvjskxqymp7tl2u6p53" ],
        [ "bc1qrdstpn674wplyyts0fy5aqx0rs6m0ylxae83fq" ]
    ];

    public static $valid_testnet = [
        [ "tb1qrp33g0q5c5txsp9arysrx4k6zdkfs4nce4xj0gdcccefvpysxf3q0sl5k7" ]
    ];

    public static $invalid = [
        [ "bc1qcmejvj4v8098c2ccvlu2xs2kexvtd9y9s5axy0" ],
        [ "bc1qgmerslddvumd96wkewvuguvsacm9dm9xdem70a" ],
        [ "bc1qrr5ysgvn8zae4ltpeeqglln25z5whu9tqwe890" ],
        [ "bc1qzg7agrjwrcukwuvapmxk4fnq8ukphnpz4fpeyl" ],
        [ "bc1q0v9kzy48kc064k87xn2m4awhykf5lnr9dh44f9" ],
        [ "bc1qm8n6s2q70jevr39hjydx8p4fn89jnuzd8zwen9" ],
        [ "bc1q2nes4kklwvd52ukguzjzyq0pykckt7efuj4pd7" ],
        [ "bc1q5m2z9auffn74l07cx0t3rr4st3kfcx2y4hws48" ],
        [ "bc1qlxrzwu3caefalv6q2h94avtzguw68ej9stmxhu" ],
        [ "bc1ql8y6jp3fgn1rmhruk0w9vd02a5cm4jehc55ty6" ],
        [ "bc1qkgf88zndj67cqm5tfzyxzajggue7s72tpr9a8s" ],
        [ "bc1q7ra95qkclu7dfksr4tjxd5p9a7ux4mlm2qmqku" ],
        [ "bc1qcthwhe3s5xds0qtd74qh4ydxal0nvs9ufe2f73" ],
        [ "bc1qcy5a36uxyhsztnzrd7jkqmvjwp3x96kju8fy7l" ],
        [ "bc1q4fffgj9qsyu7jrgflnw4nefk2fw57x6ax4h02r" ],
        [ "bc1qsm9a385tg0s99ywt7446h4hjykcer5v97mpnk4" ],
        [ "bc1qgpv8nmwupxud3jp434arpn9n9dskh9Q5cj95sx" ],
        [ "bc1q3eg3ydwg5ugdltj6l5cm5eq72ec7kvpucc6d97" ],
        [ "bc1qmx5zhynftmmes9tzpe3u5ja50d48u469vpxf6x" ],
        [ "bc1qacqdv4uqxqj6qmetk529ea0xcnw26tsgg4199y" ],
        [ "bc1qw508d6qejxtdg4y5r3zarvary0c5xw7kv8f3t5" ],
        [ "BC13W508D6QEJXTDG4Y5R3ZARVARY0C5XW7KN40WF2" ],
        [ "bc10w508d6qejxtdg4y5r3zarvary0c5xw7kw508d6qejxtdg4y5r3zarvary0c5xw7kw5rljs90"],
        [ "bc1rw5uspcuh" ],
        [ "bc1gmk9yu" ]
    ];
}
