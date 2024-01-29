<?php

namespace Administrator\Asm\core;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';

    public const TYPE_NUMBER = 'number';
    public string $type;
    public string $attribute;
    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
        <div class="form-group">
            <label for="">%s</label>
            <input type="%s" name="%s" id="%s">
        </div>
        ');
    }


    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function getLabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }

    public function labels():array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Your Email',
            'confirmPassword' => 'Confirm password',

        ];
    }
}
?>