<?php

class User
{
    private $name;
    private $surname;
    public $email;
    private $address;
    public static $classBoolean = 84;

    function __construct(string $_name, string $_surname, Address $_address = null)
    {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->address = $_address;
    }

    // GET & SET Address
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        if (!($address instanceof Address)) {
            echo 'Il parametro non è un\'istanza di Address';
        } else {
            $this->address = $address;
        }
    }

    // GET Address
    public function geClassBoolean()
    {
        return self::$classBoolean;
    }

    //Verifiche dati semplici
    // GET & SET $name
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        if (is_numeric($name)) {
            echo 'Il parametro nome deve essere una stringa';
        } else {
            $this->name = $name;
        }
    }

    // GET & SET $surname  
    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        if (is_numeric($surname)) {
            echo 'Il parametro cognome deve essere una stringa';
        } else {
            $this->surname = $surname;
        }
    }


    //Verifiche dati semplici Adress -> *
    // GET & SET $country  
    public function getCountry()
    {
        return $this->address?->country;
    }

    public function setCountry(string $country)
    {
        if ($this->address === null || is_numeric($country)) {
            echo 'Il parametro country deve essere una stringa';
        } else {
            $this->address->country = $country;
        }
    }

    // GET & SET $city  
    public function getCity()
    {
        return $this->address?->city;
    }

    public function setCity(string $city)
    {
        if ($this->address === null || is_numeric($city)) {
            echo 'Il parametro city deve essere una stringa';
        } else {
            $this->address->city = $city;
        }
    }

    // GET & SET $zipCode  
    public function getZipCode()
    {
        return $this->address?->zipCode;
    }

    public function setZipCode(string $zipCode)
    {
        if ($this->address !== null && is_numeric($zipCode) && strlen($zipCode) == 5) {
            $this->address->zipCode = $zipCode;
        } else {
            echo 'Il parametro zipCode deve essere una stringa e contenere 5 caratteri numerici';
        }
    }

    // GET & SET $street  
    public function getStreet()
    {
        return $this->address?->street;
    }

    public function setStreet(string $street)
    {
        if ($this->address === null || is_numeric($street)) {
            echo 'Il parametro street deve essere una stringa';
        } else {
            $this->address->street = $street;
        }
    }
}


class Address
{
    private $country;
    private $city;
    private $zipCode;
    private $street;
    function __construct(string $_city, string $_zipCode, string $_street, string $_country = 'Italia')
    {
        $this->setCountry($_country);
        $this->setCity($_city);
        $this->setZipCode($_zipCode);
        $this->setStreet($_street);
    }
    //Verifiche dati semplici
    // GET & SET $country  
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(string $country)
    {
        if (is_numeric($country)) {
            echo 'Il parametro country deve essere una stringa';
        } else {
            $this->country = $country;
        }
    }

    // GET & SET $city  
    public function getCity()
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        if (is_numeric($city)) {
            echo 'Il parametro city deve essere una stringa';
        } else {
            $this->city = $city;
        }
    }

    // GET & SET $zipCode  
    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode)
    {
        if (is_numeric($zipCode) && strlen($zipCode) == 5) {
            $this->zipCode = $zipCode;
        } else {
            echo 'Il parametro zipCode deve essere una stringa e contenere 5 caratteri numerici';
        }
    }

    // GET & SET $street  
    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        if (is_numeric($street)) {
            echo 'Il parametro street deve essere una stringa';
        } else {
            $this->street = $street;
        }
    }
}

$sofia = new User("Sofia", "Rossi", null);
$sofia->email = "sofia@email.it";
//$sofia->setName("Sofia");
var_dump($sofia);
var_dump($sofia->getName());

$filippo = new User("Filippo", "Rossi", null);
var_dump($filippo->getCity());
var_dump($filippo);

$roberto = new User("Roberto", "Larivera", null);
$roberto->email = "roberto@email.it";
//$roberto->setName("Roberto");
var_dump($roberto);


$robertoAddress = new Address('Vasto', '66054', 'Strada 1');
var_dump($robertoAddress);
var_dump($robertoAddress->getCity());


$roberto->setAddress($robertoAddress);
var_dump($roberto);
var_dump($roberto->getAddress());

var_dump(User::$classBoolean);
var_dump($roberto->geClassBoolean());