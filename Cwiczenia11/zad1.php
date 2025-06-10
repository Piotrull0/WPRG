<?php

class NoweAuto
{
    protected string $model;
    protected float $cenaEuro;
    protected float $kursEuroPLN;

    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN)
    {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function ObliczCene(): float
    {
        return $this->cenaEuro * $this->kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto
{
    protected float $alarm;
    protected float $radio;
    protected float $klimatyzacja;

    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN,
                                float  $alarm, float $radio, float $klimatyzacja)
    {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene(): float
    {
        $podstawa = parent::ObliczCene();
        return $podstawa + $this->alarm + $this->radio + $this->klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami
{
    private float $procentUbezpieczenia;
    private int $lata;

    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN,
                                float  $alarm, float $radio, float $klimatyzacja,
                                float  $procentUbezpieczenia, int $lata)
    {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentUbezpieczenia = $procentUbezpieczenia;
        $this->lata = $lata;
    }

    public function ObliczCene(): float
    {
        $wartoscAuta = parent::ObliczCene();
        $znizka = max(0, (100 - $this->lata));
        $ubezpieczenie = $this->procentUbezpieczenia / 100 * $wartoscAuta * ($znizka / 100);
        return $ubezpieczenie;
    }
}

$auto = new Ubezpieczenie("Audi A4", 25000, 4.5, 1000, 500, 2000, 5, 3);
echo "Koszt ubezpieczenia: " . $auto->ObliczCene() . " PLN";


