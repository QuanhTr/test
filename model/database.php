<!-- Link kết nối db và thục hiện truy vấn -->
<?php
    class database{
        // kêt nối db theo huớng đối tượng
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dbname = 'qli_banhang';
        protected $conn = null;

        public function __construct(){ //2 gach
            $this->connect();
        }

        public function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass,$this->dbname);
            if (!$this->conn){
                echo"That bai";
                exit();
            }
        }
        // 
        // public function getConnection() {
        //     return $this->conn;
        // }

        public function get($Ten){
            // Cau lenh lay dl từ sql
            $sql = "SELECT * FROM $Ten";
            //Kiem tra xem co dieu kien khong
            if(!empty($dk)){
                $sql.="WHERE";
                foreach($dk as $key => $value){
                    $sql.= " $value";
                }
            }
            
            // Cau lenh thuc thi
            $query = mysqli_query($this->conn,$sql);
            // Khoi tao 1 mang luu tru ket qua cau lenh
            $result = array();
            // kiem tra xem co ket qua cua cau lenh chua
            if($query){
                // lap de lay gia tri cua tung dong
                while ($row = mysqli_fetch_assoc($query)){
                    $result[] = $row;
                }
            }
            return $result;
        }
        
        // Chuc nang tim kiem
        public function search($table, $column, $value){
            // B1: Khỏi tạo câu lệnh sql
            $sql = "SELECT * from $table where $column LIKE '%$value%' ";
            // B2: Chạy câu lệnh sql
            $query = mysqli_query($this->conn, $sql);
            // Khoi tao 1 mang de luu ket qua
            $result = array();
            if($query){
                while($row = mysqli_fetch_assoc($query)){
                    $result[] = $row;
                }
            }
            return $result;
        }
    }
?>