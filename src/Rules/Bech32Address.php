<?php

namespace BitcoinValidation\Rules;

use function Bitwasp\Bech32\decodeSegwit;
use BitWasp\Bech32\Exception\Bech32Exception;
use Illuminate\Contracts\Validation\Rule;

class Bech32Address implements Rule
{
    const MAIN   = 'bc';
    const TEST   = 'tb';

    /**
     * The format to validate.
     */
    protected string $format;

    /**
     * Format names.
     */
    protected array $names = [
        self::MAIN  => 'Native SegWit',
        self::TEST  => 'Native SegWit Testnet'
    ];

    public function __construct($format = self::MAIN)
    {
        $this->format = $format;
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
        try {
            decodeSegwit($this->format, $value);
        } catch(Bech32Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * Get the current format.
     *
     * @return string
     */
    public function format() : string
    {
        return $this->names[$this->format];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __("bitcoin-validation::messages.address_bech32", [
            'format' => $this->format()
        ]);
    }
}
