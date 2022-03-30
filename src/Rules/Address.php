<?php

namespace BitcoinValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class Address implements Rule
{
    const LEGACY            = 0x01;
    const LEGACY_TEST       = 0x02;
    const P2SH              = 0x03;
    const NSEGWIT           = 0x04;
    const NSEGWIT_TEST      = 0x05;
    const XPUB              = 0x06;

    /**
     * Enabled formats.
     *
     * @var array
     */
    protected $formats = [];

    /**
     * The attribute name
     *
     * @var string
     */
    protected $attribute;

    public function __construct($formats = self::LEGACY)
    {
        if (!is_array($formats)) {
            $formats = [ $formats ];
        }

        foreach($formats as $format) {

            $validator = $this->make($format);
            if ($validator) {
                $this->formats[] = $validator;
            }
        }
    }

    /**
     * Make validation rule based on format.
     */
    protected function make($format)
    {
        switch($format) {
        case self::LEGACY :
            return new Base58Address(Base58Address::LEGACY);
        case self::LEGACY_TEST :
            return new Base58Address(Base58Address::LEGACY_TEST);
        case self::P2SH :
            return new Base58Address(Base58Address::P2SH);
        case self::XPUB :
            return new Base58Address(Base58Address::XPUB);
        case self::NSEGWIT :
            return new Bech32Address(Bech32Address::MAIN);
        case self::NSEGWIT_TEST :
            return new Bech32Address(Bech32Address::TEST);
        }
        return null;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->attribute = $attribute;

        foreach($this->formats as $format) {
            if ($format->passes($attribute, $value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Get the enabled formats.
     *
     * @return string
     */
    public function formats() : string
    {
        return collect($this->formats)
            ->map(function($item) {
                return $item->format();
            })->join(', ');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('bitcoin-validation::messages.address', [
            'attribute' => $this->attribute,
            'formats' => $this->formats()
        ]);
    }
}
