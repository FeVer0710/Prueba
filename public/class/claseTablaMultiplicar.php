<?php
    class claseTablaMultiplicar
    {
        public $numeroTabla = "";
        public $tablas = "";
        public $resultado = "";

        public function establecerNumeroTabla($valor)
        {
            $this->numeroTabla = $valor;
        }
        public function generarTabla()
        {
            $this->tablas = $_POST["numero"];
            $this->tablas = explode(",", $this->tablas);
            foreach ($this->tablas as $this->varias) {
                $this->tablas = $this->resultado;
                    $this->tablas = "<table>";
                    for ($i = 1; $i <= 10; $i++) {
                        $this->resultado .= "<tr justify-content: space-evenly;>
                        <td width='30px'>" . $this->varias . "</td>
                        <td width='10px'>x</td>
                        <td width='30px'>" . $i . "</td>
                        <td width='10px'>=</td>
                        <td width='30px'>" . ($this->varias * $i ) . "</td>
                        </tr>";
                    }
                    $this->resultado .="<td><br><br></td>";
                }
            }
    }
?>