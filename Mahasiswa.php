<?php
class Mahasiswa
    {
            //list of properties
        public $nim;
        public $nama;
        public $programStudi;
            
            //methods
        function setData($nim, $nama, $programStudi)
            {
                $this->nim = $nim;
                $this->nama = $nama;
                $this->programStudi = $programStudi;
            }
        function getData()
            {
                return
                    [
                        'nim' => $this->nim,
                        'studi' => $this->nama,
                        'programStudi' => $this->programStudi
                    ];
            }
                //method baru
            function tampilData()
            {
                echo "NIM: " . $this->nim . "<br>";
                echo "Nama: " . $this->nama . "<br>";
                echo "Program Studi: " . $this->programStudi . "<br>";
            }
    }
?>