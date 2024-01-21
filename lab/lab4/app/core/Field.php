<?php
namespace app\core;
class Field
{
    public const TYPE_TEXT = "text";
    public const TYPE_PASSWORD = "password";
    public const TYPE_NUMBER = "number";

    public string $type;
    public string $attribute;

    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function getLabel($attribute)
    {
        return $this->label()[$attribute] ?? $attribute;
    }

    public function label(): array
    {
        return [
            'firstname'=> 'First name',
            'lastname'=> 'Last name',
            'email'=> 'Your Email',
            'password'=> 'Password',
            'confirmPassword' => 'Confirm password',
        ];
    }
    public function __toString()
    {
        return sprintf(
            '
        <div class="form-group">
            <label>%s</label>
            <input type="%s" name="%s" id="">
        </div>
        ',
            $this->getLabel($this->attribute),
            $this->type,
            $this->attribute
        );
    }
}
