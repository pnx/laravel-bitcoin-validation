<?php

namespace Tests\Rule;

use BitcoinValidation\Rules\Address;

use Tests\Fixtures\LegacyAddress;
use Tests\Fixtures\P2SHAddress;
use Tests\TestCase;

class AddressTest extends TestCase
{
    public function validLegacyAndP2SHAddresses()
    {
        return array_merge(LegacyAddress::valid(), P2SHAddress::valid());
    }

    /**
     * @dataProvider validLegacyAndP2SHAddresses
     */
    public function test_passing($address)
    {
        $validator = new Address([ Address::LEGACY, Address::P2SH ]);

        $this->assertTrue($validator->passes("address", $address));
    }

    /**
     * @dataProvider \Tests\Fixtures\LegacyAddress::valid
     */
    public function test_failing($address)
    {
        $validator = new Address([ Address::P2SH ]);

        $this->assertFalse($validator->passes("address", $address));
    }

    public function test_get_message()
    {
        $validator = new Address([ Address::LEGACY, Address::P2SH, Address::NSEGWIT ]);

        $validator->passes('btc_address', "invalid");

        $expected = "btc_address is not a valid bitcoin address, the following formats are accepted: Legacy, SegWit, Native SegWit";

        $this->assertEquals($expected, $validator->message());
    }
}
