<?php

namespace BitcoinValidation\Rules;

use Tuupola\Base58;
use Illuminate\Contracts\Validation\Rule;

class Base58Address
{
    const LEGACY        = 0x00;
    const P2SH          = 0x05;
    const LEGACY_TEST   = 0x6F;
    const XPUB          = 0x0488B21E;

    /**
     * Version used.
     */
    protected int $version;

    /**
     * Version size (in bytes)
     */
    protected int $version_size = 1;

    /**
     * Format names.
     */
    protected $names = [
        self::LEGACY        => 'Legacy',
        self::LEGACY_TEST   => 'Legacy Testnet',
        self::P2SH          => 'SegWit',
        self::XPUB          => 'xPub',
    ];

    /**
     * The attribute name
     *
     * @var string
     */
    protected $attribute;

    public function __construct(int $version)
    {
        $this->version = $version;

        if ($version == self::XPUB) {
            $this->version_size = 4;
        }
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

        // NOTE: We do our own check here because Base58::decode assumes that
        // prefixes are always 1 bytes long.

        // Decode first
        try {
            $decoded = (new Base58(["characters" => Base58::BITCOIN]))
                ->decode($value);
        } catch(\InvalidArgumentException $ex) {
            return false;
        }

        // Calculate checksum and validate.
        $hash = substr($decoded, 0, -4);
        $hash = hash("sha256", $hash, true);
        $hash = hash("sha256", $hash, true);
        $checksum = substr($hash, 0, 4);

        if (0 !== substr_compare($decoded, $checksum, -4)) {
            return false;
        }

        // Validate version
        $v = substr($decoded, 0, $this->version_size);
        if ($this->version_size > 1) {
            $n = 0x0;
            for($i = 0; $i < $this->version_size; $i++) {
                $b = ord($v[$i]);
                $n |= $b << (($this->version_size - $i - 1) * 8);
            }
            $v = $n;
        } else {
            $v = ord($v);
        }

        if ($v !== $this->version) {
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
        return $this->names[$this->version];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __("bitcoin-validation::messages.address_base58", [
            'attribute' => $this->attribute,
            'format' => $this->format()
        ]);
    }
}
