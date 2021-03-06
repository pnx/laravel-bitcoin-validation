<?php

namespace Tests\Rule;

use BitcoinValidation\Rules\Base58Address;

use Illuminate\Support\Facades\Validator;

use Tests\TestCase;

class Base58AddressTest extends TestCase
{
    /**
     * @dataProvider \Tests\Fixtures\LegacyAddress::valid
     */
    public function test_legacy_valid($address)
    {
        $validator = new Base58Address(Base58Address::LEGACY);

        $this->assertTrue($validator->passes('address', $address));
    }

    /**
     * @dataProvider \Tests\Fixtures\LegacyAddress::invalid
     */
    public function test_legacy_invalid($address)
    {
        $validator = new Base58Address(Base58Address::LEGACY);

        $this->assertFalse($validator->passes('address', $address));
    }

    public function test_legacy_test()
    {
        $validator = new Base58Address(Base58Address::LEGACY_TEST);

        $this->assertTrue($validator->passes('address', "mkHS9ne12qx9pS9VojpwU5xtRd4T7X7ZUt"));
    }

    /**
     * @dataProvider \Tests\Fixtures\P2SHAddress::valid()
     */
    public function test_p2sh_valid($address)
    {
        $validator = new Base58Address(Base58Address::P2SH);

        $this->assertTrue($validator->passes('address', $address));
    }

    /**
     * @dataProvider \Tests\Fixtures\P2SHAddress::invalid()
     */
    public function test_p2sh_invalid($address)
    {
        $validator = new Base58Address(Base58Address::P2SH);

        $this->assertFalse($validator->passes('address', $address));
    }

    /**
     * @dataProvider \Tests\Fixtures\XPubAddress::valid()
     */
    public function test_xpub_valid($address)
    {
        $validator = new Base58Address(Base58Address::XPUB);

        $this->assertTrue($validator->passes('address', $address));
    }

    /**
     * @dataProvider \Tests\Fixtures\XPubAddress::invalid()
     */
    public function test_xpub_invalid($address)
    {
        $validator = new Base58Address(Base58Address::XPUB);

        $this->assertFalse($validator->passes('address', $address));
    }

    public function test_get_message()
    {
        $rules = [
            'p2sh' => new Base58Address(Base58Address::P2SH)
        ];

        $validator = Validator::make(['p2sh' => 'invalid'], $rules, [], ['p2sh' => 'P2SH Address']);
        $expected = 'P2SH Address is not a valid bitcoin (SegWit) address';

        $errors = $validator->errors()->all();
        $this->assertEquals($expected, $errors[0]);
    }
}
