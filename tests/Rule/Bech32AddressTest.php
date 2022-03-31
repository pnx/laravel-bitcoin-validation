<?php

namespace Tests\Rule;

use BitcoinValidation\Rules\Bech32Address;

use Illuminate\Support\Facades\Validator;

use Tests\Fixtures\Bech32Address as Bech32Fixture;
use Tests\TestCase;

class Bech32AddressTest extends TestCase
{
    public function validAddresses()
    {
        return Bech32Fixture::$valid;
    }

    /**
     * @dataProvider validAddresses
     */
    public function test_valid($address)
    {
        $validator = new Bech32Address;

        $this->assertTrue($validator->passes('address', $address));
    }

    public function validTestnetAddresses()
    {
        return Bech32Fixture::$valid_testnet;
    }

    /**
     * @dataProvider validTestnetAddresses
     */
    public function test_valid_testnet($address)
    {
        $validator = new Bech32Address(Bech32Address::TEST);

        $this->assertTrue($validator->passes('address', $address));
    }

    public function invalidAddresses()
    {
        return Bech32Fixture::$invalid;
    }

    /**
     * @dataProvider invalidAddresses
     */
    public function test_invalid($address)
    {
        $validator = new Bech32Address;

        $this->assertFalse($validator->passes('address', $address));
    }

    public function test_get_message()
    {
        $rules = [
            'native_segwit' => new Bech32Address()
        ];

        $validator = Validator::make(['native_segwit' => 'invalid'], $rules, [], ['native_segwit' => 'Native SegWit Address']);
        $expected = 'Native SegWit Address is not a valid bitcoin (Native SegWit) address';

        $errors = $validator->errors()->all();
        $this->assertEquals($expected, $errors[0]);
    }
}
