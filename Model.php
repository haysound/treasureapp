<?php

class Model
{
    private $server   = "localhost";
    private $username = "DevUser";
    private $password = "root@2020";
    private $db       = "churchadmin";

    // private $server   = "localhost";
    // private $username = "root";
    // private $password = "";
    // private $db       = "churchadmin";

    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "db error" . $e->getMessage();
        }

    }

    public function fetch_band()
    {
        $data = null;

        $query = 'SELECT * FROM chart_of_account';
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetch_Subband($other_payment)
    {
        $data = null;

        $query = "SELECT * FROM chartnotes where ChartID = '$other_payment'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function fetch_Categories($other_payment_sub)
    {
        $data = null;
        if ($other_payment_sub === 'Band_Savings') {
            $query = "SELECT * FROM band_tbl";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
        }

        return $data;
    }
}
