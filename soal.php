<?php
class Soal {

    // Atribut sesuai UML
    private string $pertanyaan;
    private string $pilihan1;
    private string $pilihan2;
    private string $pilihan3;
    private int $jawabanBenar;

    // Constructor
    public function __construct(string $pertanyaan, string $pilihan1, string $pilihan2, string $pilihan3, int $jawabanBenar) {
        $this->pertanyaan = $pertanyaan;
        $this->pilihan1 = $pilihan1;
        $this->pilihan2 = $pilihan2;
        $this->pilihan3 = $pilihan3;
        $this->jawabanBenar = $jawabanBenar;
    }

    // Getter 
    public function getPertanyaan(): string {
        return $this->pertanyaan;
    }

    public function getPilihan1(): string {
        return $this->pilihan1;
    }

    public function getPilihan2(): string {
        return $this->pilihan2;
    }

    public function getPilihan3(): string {
        return $this->pilihan3;
    }

    // cekJawaban (return boolean)
    public function cekJawaban(int $jawabanUser): bool {
        return $jawabanUser === $this->jawabanBenar;
    }
}
?>
